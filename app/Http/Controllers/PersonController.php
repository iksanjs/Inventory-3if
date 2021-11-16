<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    //Membuat attribite Name
    private $name = "Iksan Jaya Sebastian";
    private $code = "190914009";

    //Membuat Method Index
    public function index() {
        //Mengembalikan nilai attibute name
        return view("person.index");
    }

    public function sendData() {
        //Mengembalikan nilai attibute name
        $code = $this->code;
        $name = $this->name;

        return view("person.sendData", compact('code', 'name'));
    }

    public function show($param) {
        //Mengembalikan nilai attibute name
        $this->name = $param;
        return $this->name;
    }

    public function add() {
        //Mengembalikan nilai attibute name
        return view('person.add');
    }

    public function addProcess(Request $request) {
        //Mengembalikan nilai attibute name
        $this->validate($request,[
            'person_name' => 'required|max:30',
            'person_email' => 'required|email'
        ]);

        return view('person.show',['data' => $request]);
    }
}
