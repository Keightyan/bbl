<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;

class MentalsController extends Controller
{
    public function index() {
        
            $mentals = Lecture::orderBy('updated_at', 'desc')->where('category_name', 'メンタル')->paginate(6);

        return view('lectures.mentals.mentals', [
        'mentals' => $mentals,
    ]);
}
}