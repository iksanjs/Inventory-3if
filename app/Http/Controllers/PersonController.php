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
        return $this->name. " " . $this->code;
    }

    public function show($param) {
        //Mengembalikan nilai attibute name
        $this->name = $param;
        return $this->name;
    }

    
}
