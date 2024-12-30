<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Soal;

class QuizController extends Controller
{
    public function index(Request $request) {
        return view('user.kuis.index');
    }
}
