<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonController extends Controller
{
    public function index()
    {
    	return View('courses.phython-test');
    }

     public function beginnertest()
    {
    	return View('tests.pythonbiginner');
    }

    public function intermediatetest()
    {
    	return View('tests.pythonintermediate');
    }

    public function advancetest()
    {
    	return View('tests.pythonadvance');
    }
}