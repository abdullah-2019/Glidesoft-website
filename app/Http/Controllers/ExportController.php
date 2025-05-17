<?php

namespace App\Http\Controllers;



class ExportController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');

    }

    public function collection()
    {
        return new Collection([
            [1, 2, 3],
            [4, 5, 6]
        ]);
    }
}
