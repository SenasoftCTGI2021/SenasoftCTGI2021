<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crear_sala extends Controller
{
    function save(Request $req){
        print_r($req->input());
    }
}
