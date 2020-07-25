@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="head">投稿する</div>
    <div class="row">
        <div class="col-sm-10 mb-5 mx-auto">
        <form method="POST" action="{{ route('lectures.store') }}" enctype='multipart/form-data'>
        {{ csrf_field() }}
            <div class="form-group mb-4">
              <label class="font-weight-bold">カテゴリ</label><span class="small ml-5" style="color: #f00;">どれか1つを選択してください。</span><br>
               <input id="radio-1" name="category_name" type="radio" value="ピッチング" required>
                <label  for="radio-1" class="radio-label">ピッチング</label>
                <input id="radio-2" name="category_name" type="radio" value="バッティング">
                <label  for="radio-2" class="radio-label">バッティング</label>
                <input id="radio-3" name="category_name" type="radio" value="守備">
                <label  for="radio-3" class="radio-label">守備</label>
                <input id="radio-4" name="category_name" type="radio" value="走塁">
                <label  for="radio-4" class="radio-label">走塁</label>
                <input id="radio-5" name="category_name" type="radio" value="メンタル">
                <label  for="radio-5" class="radio-label">メンタル</label>
                <input id="radio-6" name="category_name" type="radio" value="その他">
                <label  for="radio-6" class="radio-label">その他</label>
          </div>
                
          <div class="form-group mb-4">
              <label class="font-weight-bold">タイトル</label><span class="small ml-5" style="color: #f00;">必ず入力してください。</span>
                <input type="text" name="title" id="input_title" class="form-control" placeholder="" required>
          </div>
          
          <div class="form-group mb-4">
              <label class="font-weight-bold">全体コメント</label><span class="small ml-3" style="color: #f00;">必ず入力してください。</span>
                <textarea id="text_all_comment" name="content" class="form-control" rows="6" required></textarea>
          </div>
          
          <div class="img-comment_set">
              <div class="form-group">
                  <label class="font-weight-bold">画像</label>
                      <input type="file" id="file1" name="image[]" class="form-control-file">
              </div>
              <div class="form-group">
                  <label class="font-weight-bold">コメント</label>
                      <input type="text" class="form-control" maxlength="100" name="comment[]" id="text-length">
              </div>
          </div>
          
          <p>
        
        
          <button id="append-img-comment" type="button" class="btn btn-secondary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            画像を増やす
          </button> <span style="font-size: 14px; display: inline-block;" class="pl-2 append-img-comment-span">9つ（合計で10）まで増やせます。</span>
              
          </p>
          
          <div id="append-img-comment_area">
              
          </div>
          
          <div class="text-center mt-5">
              <input type="reset" value="書き直し" class="btn btn-danger mr-5">
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
          </div>

        </form>
        </div>
    </div>
@endsection