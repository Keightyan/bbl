<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Lecture;
use App\LectureImage;
use App\User;

class LecturesController extends Controller
{
    public function index() {
        
        $lectures = Lecture::orderBy('updated_at', 'desc')->paginate(6);

        $image = LectureImage::get();

        return view('welcome', [
            'lectures' => $lectures,
            'images' => $image,
        ]);
    }

    public function show($id) {

        $lecture = Lecture::find($id);

        $image = LectureImage::where('lecture_id', $id)->get();

        return view('lectures.show', [
            'lecture' => $lecture,
            'images' => $image,
        ]);
    }

    public function create() {
        
        $lecture = new Lecture;

        return view('lectures.create', [
            'lecture' => $lecture,
        ]);
    }

    public function store(Request $request) {

        $this->validate($request, [
            'category_name' => 'required',
            'title' => 'required|string|max:100',
            'content' => 'required',
            'image.*' => 'nullable',
            'comment.*' => 'nullable|string|max:100',
        ]);

        if ($request->hasFile('image') ) {
            $lecture = new Lecture;

            $files = $request->file('image');

            $lecture_data = $lecture->create([
                'user_id' => \Auth::id(),
                'category_name' => $request->category_name,
                'title' => $request->title,
                'content' => $request->content,
            ]);

            $i = 0;

            // foreach で $files に入った画像を $file として別個に取り出す
            foreach ($files as $file) {

                $lecture_image = new LectureImage;

                // UNIXタイムスタンプを取得したものと、ユーザーID、オリジナルの拡張子を取得したものとを繋ぎ、ファイル名として $filename に代入
                $filename = time() . $i . '_' . $lecture->user_id . '.' . $file->getClientOriginalExtension();
            
                // storeAs の第1引数は storage からのパス、第2引数はファイル名、第3引数は利用するストレージ(local、public…など）
                $path = $file->storeAs('', $filename, ['disk' => 'public']);

                $lecture_image->create([
                    'lecture_id' => $lecture_data->id,
                    'image_path' => $path,
                ]);

                $i++;
            }
        }
        else {
            $request->user()->lectures()->create([
                'category_name' => $request->category_name,
                'title' => $request->title,
                'content' => $request->content,
            ]);
        }
        
        return redirect('/');
    }

    public function destroy($id) {

        $lecture = Lecture::find($id);

        if (\Auth::id() === $lecture->user_id) {
            $lecture->delete();
        }

        return back();
    }
}