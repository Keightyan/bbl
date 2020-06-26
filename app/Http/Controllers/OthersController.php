<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;

class OthersController extends Controller
{
    public function index() {
        
            $others = Lecture::orderBy('updated_at', 'desc')->where('category_name', 'その他')->paginate(6);

        return view('lectures.others.others', [
        'others' => $others,
    ]);
}
}