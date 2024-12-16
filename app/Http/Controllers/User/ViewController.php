<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function simulasi() {
        return view('user.simulasi');
    }
}
