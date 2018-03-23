<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Labal;
use App\Group;
use App\Exam;
use App\Subject;
use App\Session;
use App\Shift;
use App\Section;

class ClassController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }

    public function addClass(){
    	return view('user.class.classadd');
    }

    public function add_class( Request $request){
    	$this->validate($request,[
            'class_name' => 'required|min:3|max:50'
        ]);
    	$addclass = new Labal;
        $addclass ->class_name = $request ->class_name;
    	$addclass ->class_descroption = $request ->class_descroption;
    	$addclass->save();
    	return redirect()->back()->with('message', 'Class added successfully. Thank you!');
    }
    public function class_menage(){
        $labels = Labal::orderBy('id','desc')->get();
        return view('user.class.classMenage',['labels' =>$labels]);
    }

    public function class_edit($id){
        $classById = Labal::find($id);
        return view('user.class.classEdit',['classById'=>$classById]);
    }

    public function class_update(Request $request){
        $updateClass = Labal::find($request->id);
        $updateClass->class_name = $request->class_name;
        $updateClass->class_descroption = $request->class_descroption;
        $updateClass->publication_status = $request->publication_status;
        $updateClass->save();
        return back()->with('message','Class Info Save Successfully');

    }

    public function class_delete($id){
        $deleteClass = Labal::find($id);
        $deleteClass->delete();
        return back()->with('message','Class Delete Successfully');
    }

    public function addGroup(){
    	return view('user.group.addgroup');
    }

    public function save_Group(Request $request){
    	$this->validate($request,[
            'group_name' => 'required|min:3|max:50'
        ]);
    	$newgroup = new Group;
    	$newgroup ->group_name = $request->group_name;
    	$newgroup ->group_descroption = $request->group_descroption;
    	$newgroup ->save();
    	return redirect()->back()->with('message', 'Group added successfully. Thank you!');
    }

    public function menage_Group(){
        $allgroup = Group::orderBy('id','desc')->get();
        return view('user.group.menageGropp',['allgroup'=>$allgroup]);
    }

    public function edit_Group($id){
        $groupById = Group::find($id);
        return view('user.group.editGropp',['groupById'=>$groupById]);
    }

    public function updete_Group(Request $request){
        $groupById = Group::find($request->id);
        $groupById->group_name = $request->group_name;
        $groupById->group_descroption = $request->group_descroption;
        $groupById->publication_status = $request->publication_status;
        $groupById ->save();
        return redirect()->back()->with('message', 'Group Info Saved successfully. Thank you!');

    }

    public function delete_Group($id){
        $groupById = Group::find($id);
        $groupById->delete();
        return redirect()->back()->with('message', 'Group Deleted successfully. Thank you!');
    }

    public function addExam(){

    	return view('user.exam.addexam');
    }

    public function add_Exam(Request $request){
    	$this->validate($request,[
            'exam_name' => 'required|min:3|max:50'
        ]);
    	$addexam = new Exam;
    	$addexam ->exam_name = $request ->exam_name;
    	$addexam ->exam_descroption = $request ->exam_descroption;
    	$addexam ->save();
    	return redirect()->back()->with('message','Exam added successfully. Thank you');
    }

    public function addSubject(){
    	$PublishedGroups = Group::where('publication_status',1)->get();
    	/*return $PublishedGroups;*/
    	return view('user.subject.addSubject',['PublishedGroups' => $PublishedGroups]);
    }

    public function add_Subject(Request $request){
    	$this->validate($request,[
            'subject_name' => 'required|min:3|max:50',
            'subject_code' => 'required|min:3|max:8',
            'group_id' => 'required|max:8'
        ]);
        $subjectAdd = new Subject;
        $subjectAdd ->subject_name = $request ->subject_name;
        $subjectAdd ->group_id = $request ->group_id;
        $subjectAdd ->subject_code = $request ->subject_code;
        $subjectAdd ->subject_descroption = $request ->subject_descroption;
        $subjectAdd->save();

        return redirect()->back()->with('message','Subject added successfully. Thank you');
        }

    public function addSession(){

        return view('user.session.addSession');
    }

        

    public function add_Session(Request $request){
        $this->validate($request,[
            'session_name' =>'required|min:3|max:20'
        ]);
        $Sessions = new Session;
        $Sessions->session_name = $request->session_name;
        $Sessions->session_descroption = $request->session_descroption;
        $Sessions->save();
        
       return redirect()->back()->with('message','Session added successfully. Thank you');
    }

    public function addSection(){
        return view('user.section.addSection');
    }
    public function add_Section(Request $request){
        $addSection = new Section;
        $addSection->section_name = $request->section_name;
        $addSection->sections_descroption = $request->sections_descroption;
        $addSection->save();
        return redirect()->back()->with('message','Sessions added successfully. Thank you');
    }

    public function addShift(){
        return view('user.shift.addShift');
    }
    public function add_Shift(Request $request){
        $this->validate($request,[
            'shift_name' => 'required|min:3|max:20'
        ]);
        $Shifts = new Shift;
        $Shifts->shift_name = $request->shift_name;
        $Shifts->shift_descroption = $request->shift_descroption;
        $Shifts->save();
        return redirect()->back()->with('message','Shift added successfully. Thank you');
    }
}

