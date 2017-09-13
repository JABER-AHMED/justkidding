<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CplusController extends Controller
{
    public function index()
    {
    	return View('courses.cplus-test');
    }

    public function beginnertest()
    {
    	return View('tests.c+biginner');
    }

    public function intermediatetest()
    {
    	return View('tests.c+intermediate');
    }

    public function advancetest()
    {
    	return View('tests.c+advance');
    }	
}
