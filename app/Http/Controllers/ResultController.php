<?php

namespace App\Http\Controllers;
use App\Student;
use App\Exam;
use App\Session;
use App\Group;
use App\Shift;
use App\Section;
use App\Labal;
use App\User;
use App\Result;
use App\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function add_result(){
    	$Subjects = Subject::where('publication_status',1)->get();
    	$exams = Exam::where('publication_status',1)->get();
    	return view('user.result.addRusult',
    		['Subjects' =>$Subjects,'exams'=>$exams]);
    }
    public function save_new_result(Request $request){
        $StudentByIndex = Student::where('indexNO', $request->indexNO)->first();

        if(is_null($StudentByIndex)){
            return back()->with('message', 'Invalid Index No. Try Again.');
        }
        else{
            $ChakeResult = Result::where('indexNO', $StudentByIndex->indexNO)
                                ->where('class_id', $StudentByIndex->class_id)
                                ->where('exam_id', $request->exam_id)
                                ->where('subject_id', $request->subject_id)
                                ->first();
                 if(is_null($ChakeResult)) 
                {   
                    $this->validate($request,[
                        'indexNO' => 'required',
                        'exam_id' => 'required',
                        'subject_id' => 'required',
                        'status' => 'required',
                        'createrUserId' => 'required'
                    ]);
                    $saveREsult = new Result;
                    $saveREsult->indexNO = $StudentByIndex->indexNO;
                    $saveREsult->session_id = $StudentByIndex->session_id;
                    $saveREsult->class_id = $StudentByIndex->class_id;
                    $saveREsult->exam_id = $request->exam_id;
                    $saveREsult->subject_id = $request->subject_id;
                    if ($request->status ==1) {
                        if ($request->written+$request->mcq+$request->practical <=100) {
                         $saveREsult->written = $request->written;
                        $saveREsult->mcq = $request->mcq;
                        $saveREsult->practical = $request->practical;
                        }
                        else{
                            return back()->with('message', ' Result can not save! Total mark is adobe 100');
                        }
                    
                    }
                    $saveREsult->status = $request->status;
                    $saveREsult->createrUserId = $request->createrUserId;
                    $saveREsult->save();
                    return back()->with('message', 'Result Saved successfully.');
                    
                }
            else{
                return back()->with('message', 'Result Alredy exiest.');
            }
        }
    }
    public function search_result(){
       $exams = Exam::where('publication_status',1)->get(); 
       $years = Session::where('publication_status',1)->get(); 
       $lavels = Labal::where('publication_status',1)->get(); 
        return view('user.result.searchResult',[
            'exams' =>$exams,
            'years' =>$years,
            'lavels' =>$lavels
        ]);
    }

    public function sow_result(Request $request){
         $studentinfo = Student::where('indexNO',$request->indexNO)->first();
         $Subjects = Subject::where('publication_status',1)->get();

        if(isset($studentinfo)){
                    $ChakeResult = DB::table('results')
                    ->join('labals', 'results.class_id', '=', 'labals.id')
                    ->join('exams', 'results.exam_id', '=', 'exams.id')
                    ->join('sessions', 'results.session_id', '=', 'sessions.id')
                    ->select('results.*','labals.class_name','exams.exam_name','sessions.session_name')
                    ->where('indexNO',$request->indexNO)
                    ->where('class_id',$request->class_id)
                    ->where('exam_id',$request->exam_id)
                    ->where('session_id',$request->session_id)
                    ->first();
                if(isset($ChakeResult)){
                    $showResults = DB::table('results')
                    ->join('subjects', 'results.subject_id', '=', 'subjects.id')
                    ->join('users', 'results.createrUserId', '=', 'users.id')
                    ->select('results.*', 'subjects.subject_name','users.name')
                    ->where('indexNO',$request->indexNO)
                    ->where('class_id',$request->class_id)
                    ->where('exam_id',$request->exam_id)
                    ->where('session_id',$request->session_id)
                    ->orderBy('subject_id')
                    ->get();
                return view('user.result.showResult',[
                    'showResults'=>$showResults,
                    'studentinfo'=>$studentinfo,
                    'ChakeResult'=>$ChakeResult,
                    'Subjects'=>$Subjects]);
                }
                else{
                    return back()->with('message', 'No Such Result. Try Again');
                }
            }
        else{
            return back()->with('message', 'Invalid Index No. Try Again');
        }
        
    }


    public function edit_result($id){
    $resultById = Result::find($id);
    /*return $resultById;*/
    $Subjects = Subject::where('publication_status',1)->get();
    $exams = Exam::where('publication_status',1)->get();
    $Sessions = Session::where('publication_status',1)->get();
    return view('user.result.updetRusult',['result'=>$resultById,'Subjects' =>$Subjects,'exams'=>$exams,'Sessions'=>$Sessions]);
    }

    public function updet_result(Request $request){

        $updetResult = Result::find($request->id);
        $updetResult->createrUserId = $request->createrUserId;
        if ($request->status == 1) {
            if ($request->written+$request->mcq+$request->practical <=100) {
            $updetResult->written = $request->written;
            $updetResult->mcq = $request->mcq;
            $updetResult->practical = $request->practical;
            }
            else{
               return back()->with('message', ' Result can not save! Total mark is adobe 100'); 
            }
        }
        else{
            $updetResult->written = 0;
            $updetResult->mcq = 0;
            $updetResult->practical = 0;
        }
        $updetResult->status = $request->status;
        $updetResult->save();
        return back()->with('message', 'Result updeted successfully'); 
        return $request;

    }
    public function delet_result($id){
        $result = Result::find($id);
        $result->delete();
    return back()->with('message', 'Result Deleted successfully'); 
    }

}
