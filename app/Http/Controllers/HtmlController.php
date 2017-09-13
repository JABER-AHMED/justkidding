<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function index()
    {
    	return View('courses.html-test');
    }

     public function beginnertest()
    {
    	return View('tests.htmlbiginner');
    }

    public function intermediatetest()
    {
    	return View('tests.htmlintermediate');
    }

    public function advancetest()
    {
    	return View('tests.htmladvance');
    }
}
