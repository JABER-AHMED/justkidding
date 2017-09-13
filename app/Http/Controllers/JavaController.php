<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JavaController extends Controller
{
    public function index()
    {
    	return View('courses.java-test');
    }

     public function beginnertest()
    {
    	return View('tests.javabiginner');
    }

    public function intermediatetest()
    {
    	return View('tests.javaintermediate');
    }

    public function advancetest()
    {
    	return View('tests.javaadvance');
    }
}
