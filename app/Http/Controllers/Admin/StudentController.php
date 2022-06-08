<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Instructor;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students =  Student::all();
        $courses = Course::all();
        $instructors = Instructor::all();
        return view('admin.student.student',compact('courses','instructors','students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'father_occupation'=>$request->father_occupation,
            'course_id'=>$request->course_id,
            'mobile_no'=>$request->mobile_no,
            'cnic'=>$request->cnic,
            'dob'=>$request->dob,
            'home_address'=>$request->home_address,
            'previous_school'=>$request->previous_school,
            'image'=>$request->image,
            'add_type'=>$request->add_type,
            'reg_no'=>$request->reh_no,
            'instructor'=>$request->instructor,
            'Enroll_type' =>$request->Enroll_type
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
