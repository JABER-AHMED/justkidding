<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhpController extends Controller
{
    public function index()
    {
    	return View('courses.php-test');
    }

     public function beginnertest()
    {
    	return View('tests.phpbiginner');
    }

    public function intermediatetest()
    {
    	return View('tests.phpintermediate');
    }

    public function advancetest()
    {
    	return View('tests.phpadvance');
    }
}
