<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CController extends Controller
{
    public function index()
    {
    	return View('courses.c-test');
    }

    public function beginnertest()
    {
    	return View('tests.cbiginner');
    }

    public function intermediatetest()
    {
    	return View('tests.cintermediate');
    }

    public function advancetest()
    {
    	return View('tests.cadvance');
    }	
}
