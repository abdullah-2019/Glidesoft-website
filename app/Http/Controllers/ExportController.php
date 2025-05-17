<?php

namespace App\Http\Controllers;



class ExportController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }
}
