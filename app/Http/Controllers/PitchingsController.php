<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;

class PitchingsController extends Controller
{
    public function index() {
        
            $pitchings = Lecture::orderBy('updated_at', 'desc')->where('category_name', 'ピッチング')->paginate(6);

        return view('lectures.pitchings.pitchings', [
        'pitchings' => $pitchings,
    ]);
}
}
