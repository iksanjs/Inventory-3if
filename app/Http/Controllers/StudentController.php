<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Membuat attribite Name
    private $name = "Iksan Jaya Sebastian";
    private $code = "190914009";
    private $course;
    private $task;
    private $quiz;
    private $mid_term;
    private $final;
    private $grade;

    //Membuat Method Index
    public function index() {
        //Mengembalikan nilai attibute name
        return view("student.index");
    }

    public function calculateGrade() {
        //Mengembalikan nilai attibute name
        $grade = ($this->task * 0.1) + ($this->quiz * 0.1) + ($this->mid_term * 0.3) + ($this->final * 0.5);
        return $grade;
    }

    public function myCourse($course, $task, $quiz, $mid_term, $final) 
    {
        $this->course = $course;
        $this->task = $task;
        $this->quiz = $quiz;
        $this->mid_term = $mid_term;
        $this->final = $final;
        $this->grade = $this->calculateGrade();

        return view("student.show", [
            'code' => $this->code,
            'name' => $this->name,
            'course' => $this->course,
            'task' => $this->task,
            'quiz' => $this->quiz,
            'mid_term' => $this->mid_term,
            'final' => $this->final,
            'grade' => $this->grade,
        ]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "Ini Create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return "ini Edit";
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
        return "ini Hapus";
    }
}
