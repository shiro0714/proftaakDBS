<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NieuweSingleController extends Controller
{
    public function show() {
        return view('nieuwe-single');
    }
}
