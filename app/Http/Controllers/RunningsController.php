<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;

class RunningsController extends Controller
{
    public function index() {
        
            $runnings = Lecture::orderBy('updated_at', 'desc')->where('category_name', '走塁')->paginate(6);

        return view('lectures.runnings.runnings', [
        'runnings' => $runnings,
    ]);
}
}