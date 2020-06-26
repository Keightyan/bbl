<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;

class BattingsController extends Controller
{
    public function index() {
        
            $battings = Lecture::orderBy('updated_at', 'desc')->where('category_name', 'バッティング')->paginate(6);

        return view('lectures.battings.battings', [
        'battings' => $battings,
    ]);
}
}
