<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    function showData(){
        return "We are routing our controller";
    }

    function show($id){
        return $id;
    }

    function load(){
        return View('about');
    }
    
}