<?php

namespace App\Http\Controllers;

use App\Labal;
use App\Group;
use App\Session;
use App\Shift;
use App\Section;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function allStudents(){
      
         $students = DB::table('students')
            ->join('groups', 'students.group_id', '=', 'groups.id')
            ->join('sessions', 'students.session_id', '=', 'sessions.id')
            ->join('labals', 'students.class_id', '=', 'labals.id')
            ->join('shifts', 'students.shift_id', '=', 'shifts.id')
            ->join('sections', 'students.section_id', '=', 'sections.id')
            ->join('users', 'students.creatorID', '=', 'users.id')
            ->select('students.*', 'groups.group_name','sessions.session_name','labals.class_name','shifts.shift_name','sections.section_name','users.name')
            ->orderBy('id', 'desc')->get();

        return view('user.Student.allStudent',['students' =>$students]);
    }

    public function showStudentProfil($id){
            $studentByID = DB::table('students')
            ->join('groups', 'students.group_id', '=', 'groups.id')
            ->join('sessions', 'students.session_id', '=', 'sessions.id')
            ->join('labals', 'students.class_id', '=', 'labals.id')
            ->join('shifts', 'students.shift_id', '=', 'shifts.id')
            ->join('sections', 'students.section_id', '=', 'sections.id')
            ->join('users', 'students.creatorID', '=', 'users.id')
            ->select('students.*', 'groups.group_name','sessions.session_name','labals.class_name','shifts.shift_name','sections.section_name','users.name')
            ->where('students.id',$id)
            ->first();
            return view('user.Student.showStudentProfile',['student'=>$studentByID]);

    }
    public function addStudents(){
    	$Groups = Group::where('publication_status',1)->get();
    	$Lavals = Labal::where('publication_status',1)->get();
    	$Sessions = Session::where('publication_status',1)->get();
        $Shifts = Shift::where('publication_status',1)->get();
    	$Sections = Section::where('publication_status',1)->get();
    	return view('user.Student.addStudent',[
    		'Groups' =>$Groups,
    		'Lavals' =>$Lavals,
    		'Sessions' =>$Sessions,
            'Shifts' =>$Shifts,
    		'Sections' =>$Sections
    	]);
    }

    public function save_Student(Request $request){
           /* return $request;*/

        $profil_photo= $request->file('avator');
        $imageName = time() . '.' . $profil_photo->getClientOriginalExtension();
        $directory = 'p_image/';
        $profil_photo->move($directory,$imageName);
        $imageUrl = $directory.$imageName;

        $this->validate($request,[
                    'firstName' => 'required',
                    'lastName' => 'required',
                    'birthdate' => 'required',
                    'phonNO' => 'required',
                    'indexNO' => 'required',
                    'rollNO' => 'required',
                    'session_id' => 'required',
                    'class_id' => 'required',
                    'group_id' => 'required',
                    'section_id' => 'required',
                    'shift_id' => 'required',
                    'gender' => 'required',
                    'creatorID' => 'required'
                ]);

        $newStudent = new Student;
        $newStudent->firstName = $request->firstName;
        $newStudent->lastName = $request->lastName;
        $newStudent->birthdate = $request->birthdate;
        $newStudent->avator = $imageUrl;
        $newStudent->email = $request->email;
        $newStudent->phonNO = $request->phonNO;
        $newStudent->gardiansFirstName = $request->gardiansFirstName;
        $newStudent->gardiansLastName = $request->gardiansLastName;
        $newStudent->gardiansNID = $request->gardiansNID;
        $newStudent->gardiansEmail = $request->gardiansEmail;
        $newStudent->gardiansPhonNO = $request->gardiansPhonNO;
        $newStudent->permanentAdress = $request->permanentAdress;
        $newStudent->presentAdress = $request->presentAdress;
        $newStudent->indexNO = $request->indexNO;
        $newStudent->rollNO = $request->rollNO;
        $newStudent->session_id = $request->session_id;
        $newStudent->class_id = $request->class_id;
        $newStudent->group_id = $request->group_id;
        $newStudent->shift_id = $request->shift_id;
        $newStudent->section_id = $request->section_id;
        $newStudent->religion = $request->religion;
        $newStudent->gender = $request->gender;
        $newStudent->creatorID = $request->creatorID;
        $newStudent->save();
        return back()->with('message', 'Student added successfully. Thank you!');
    }
    public function edit_Students($id){

        $studentByID = Student::find($id);
        
        $Groups = Group::where('publication_status',1)->get();
        $Lavals = Labal::where('publication_status',1)->get();
        $Sessions = Session::where('publication_status',1)->get();
        $Shifts = Shift::where('publication_status',1)->get();
        $Sections = Section::where('publication_status',1)->get();
        return view('user.Student.editStudent',[
            'Student' =>$studentByID,
            'Groups' =>$Groups,
            'Lavals' =>$Lavals,
            'Sessions' =>$Sessions,
            'Shifts' =>$Shifts,
            'Sections' =>$Sections
        ]);
    }
    public function updet_Students(Request $request){
        $this->validate($request,[
                    'firstName' => 'required',
                    'lastName' => 'required',
                    'birthdate' => 'required',
                    'phonNO' => 'required',
                    'indexNO' => 'required',
                    'rollNO' => 'required',
                    'session_id' => 'required',
                    'class_id' => 'required',
                    'group_id' => 'required',
                    'section_id' => 'required',
                    'shift_id' => 'required',
                    'gender' => 'required',
                    'creatorID' => 'required'
                ]);
        $studentByID = Student::find($request->id);
        $studentByID->firstName = $request->firstName;
        $studentByID->lastName = $request->lastName;
        $studentByID->birthdate = $request->birthdate;
        $studentByID->email = $request->email;
        $studentByID->phonNO = $request->phonNO;
        $studentByID->gardiansFirstName = $request->gardiansFirstName;
        $studentByID->gardiansLastName = $request->gardiansLastName;
        $studentByID->gardiansNID = $request->gardiansNID;
        $studentByID->gardiansEmail = $request->gardiansEmail;
        $studentByID->gardiansPhonNO = $request->gardiansPhonNO;
        $studentByID->permanentAdress = $request->permanentAdress;
        $studentByID->presentAdress = $request->presentAdress;
        $studentByID->indexNO = $request->indexNO;
        $studentByID->rollNO = $request->rollNO;
        $studentByID->session_id = $request->session_id;
        $studentByID->class_id = $request->class_id;
        $studentByID->group_id = $request->group_id;
        $studentByID->shift_id = $request->shift_id;
        $studentByID->section_id = $request->section_id;
        $studentByID->religion = $request->religion;
        $studentByID->gender = $request->gender;
        $studentByID->creatorID = $request->creatorID;
        $studentByID->save();
        return redirect('/student-profile/'.$studentByID->id)->with('message', 'Student info saved successfully. Thank you!');
        }

        public function change_student_photo($id){
            $student = Student::find($id);
            return view('user.Student.changePhoto',['student' =>$student]);
        }

        public function uodete_student_photo(Request $request){
            $student_photo= $request->file('avator');

            $studentByID = Student::find($request->id);

            if (isset($student_photo)) {
            $imageName = time() . '.' . $student_photo->getClientOriginalExtension();
            $directory = 'p_image/';
            unlink($studentByID->avator);
            
            $student_photo->move($directory,$imageName);
            $imageUrl = $directory.$imageName;
            $studentByID->avator = $imageUrl;
            $studentByID->save();
            return redirect('/student-profile/'.$studentByID->id);
            }
            else{
                return back()->with('message', 'Somthing wennt Worng.Thank you!');
            }
        }

        public function delete_Student($id){
            $studentByID = Student::find($id);
            $studentByID->delete();
            return redirect(route('student.all'))->with('message', 'Student Deleted successfully. Thank you!');
        }
}
