<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('dashboard');
    }
    public function test()
    {
        return view('enq');
    }
    public function test2()
    {
        return view('Output');
    }
    public function masterlead()
    {
        return view('masterlead');
    }
}
