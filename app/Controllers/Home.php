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
        return view('leads');
    }
    public function test2()
    {
        return view('Output');
    }
    
}
