<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/all-student','StudentController@allStudents')->name('student.all');
Route::get('/student-profile/{id}','StudentController@showStudentProfil')->name('student.profil');
Route::get('/add-student','StudentController@addStudents')->name('student');
Route::get('/change-student-phpto/{id}','StudentController@change_student_photo')->name('student.photo.change');
Route::post('/uodete-student-phpto/','StudentController@uodete_student_photo')->name('student.photo.uodete');
Route::post('/student-add','StudentController@save_Student')->name('student.add');
Route::get('/edit-student/{id}','StudentController@edit_Students')->name('student.edit');
Route::post('/updet-student','StudentController@updet_Students')->name('student.updet');
Route::get('/delete-student/{id}','StudentController@delete_Student')->name('student.delete');

Route::get('/class-add','ClassController@addClass')->name('class');
Route::post('/add-class', 'ClassController@add_class')->name('add.class');
Route::get('/class-menage','ClassController@class_menage')->name('menage.class');
Route::get('/edit-class/{id}','ClassController@class_edit')->name('edit.class');
Route::post('/edit-update','ClassController@class_update')->name('updete.class');
Route::get('/delete-class/{id}','ClassController@class_delete')->name('delete-class');

Route::get('/group-add','ClassController@addGroup')->name('group');
Route::post('/add-group', 'ClassController@save_Group')->name('add.group');
Route::get('/group-menage', 'ClassController@menage_Group');
Route::get('/edit-group/{id}', 'ClassController@edit_Group');
Route::post('/updete-group', 'ClassController@updete_Group')->name('updete.group');
Route::get('/delete-group/{id}', 'ClassController@delete_Group');

Route::get('/exam-add','ClassController@addExam')->name('exam');
Route::post('/add-exam', 'ClassController@add_Exam')->name('add.exam');

Route::get('/subject-add','ClassController@addSubject')->name('subject');
Route::post('/add-subject', 'ClassController@add_Subject')->name('add.subject');

Route::get('/session-add','ClassController@addSession')->name('session');
Route::post('/add-session', 'ClassController@add_Session')->name('add.session');


Route::get('/section-add','ClassController@addSection')->name('section');
Route::post('/add-section', 'ClassController@add_Section')->name('add.section');

Route::get('/shift-add','ClassController@addShift')->name('shift');
Route::post('/add-shift', 'ClassController@add_Shift')->name('add.shift');

Route::get('/result-add','ResultController@add_result')->name('result.add');
Route::get('/result-search','ResultController@search_result')->name('result.search');
Route::post('/save-result','ResultController@save_new_result')->name('result.save');
Route::post('/updet-result','ResultController@updet_result')->name('result.updet');
Route::get('/edit-result/{id}','ResultController@edit_result')->name('result.edit');
Route::get('/delet-result/{id}','ResultController@delet_result')->name('result.delet');
Route::get('/find-result','ResultController@sow_result')->name('result.find');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
