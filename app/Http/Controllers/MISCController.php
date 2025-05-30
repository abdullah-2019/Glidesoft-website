<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MISCController extends Controller
{
    public function termsOfServices() {
        return view('terms-of-service');
    }

    public function privacyPolicy() {
        return view('privacy-policy');
    }

    public function cookiePolicy() {
        return view('cookie-policy');
    }
}
