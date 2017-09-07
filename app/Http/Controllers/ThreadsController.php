<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index()
    {
    	$msg = "All Threads are here";
    	return view("threads.index", compact("msg"));
    }

    public function create()
    {
    	$msg = "All Threads";
    	return $msg;
    }

    public function show($id)
    {
    	return "this is the thread with id " . $id;
    }
}
