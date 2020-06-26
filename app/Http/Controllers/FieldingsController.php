<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;

class FieldingsController extends Controller
{
    public function index() {
        
            $fieldings = Lecture::orderBy('updated_at', 'desc')->where('category_name', '守備')->paginate(6);

        return view('lectures.fieldings.fieldings', [
        'fieldings' => $fieldings,
    ]);
}
}