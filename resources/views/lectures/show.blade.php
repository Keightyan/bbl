@extends('layouts.app')

@section('content')

<div class="container">
    <div class="head">レクチャー詳細</div>

        <div class="row ml-3 mt-5 pt-4">

            <div class="col-9 mx-auto">
                <article class="cont_inner">
                @if ($lecture)
                    @php
                        $image = $images->first();
                    @endphp
                        @if ($image)
                        <figure class="show_post_thumbnail"><div class="new_area-img text-center"><img  id="mainImage" class="show_image" src="{{ asset('storage/'.$image->image_path) }}"></div></figure>
                        @else
                        <figure class="show_post_thumbnail"><div class="new_area-img text-center"><img src="../img/noimage.gif"></div></figure>
                        @endif
                    <section class="post_meta-all multiline line-8">
                <div class="pick_title mb-2">{{ $lecture->title }}</div>
                <time>{{ $lecture->updated_at }}</time>
                <div>
                @if ($lecture->category_name == 'ピッチング')
                    <span class="tag-pitching">{{ $lecture->category_name }}</span>
                @elseif ($lecture->category_name == 'バッティング')
                    <span class="tag-batting">{{ $lecture->category_name }}</span>
                @elseif ($lecture->category_name == '守備')
                    <span class="tag-fielding">{{ $lecture->category_name }}</span>
                @elseif ($lecture->category_name == '走塁')
                    <span class="tag-running">{{ $lecture->category_name }}</span>
                @elseif ($lecture->category_name == 'メンタル')
                    <span class="tag-mental">{{ $lecture->category_name }}</span>
                @elseif ($lecture->category_name == 'その他')
                    <span class="tag-other">{{ $lecture->category_name }}</span>
                @endif
                @if ($lecture->user === null)    
                <span class="d-inline-block ml-2 small text-info">投稿者：このユーザーは退会しました</span></div>
                @else
                <span class="d-inline-block ml-2 small text-info">投稿者：<a href="{{ route('users.show', ['id' => $lecture->user->id]) }}">{{ $lecture->user->name }}</a></span></div>
                @endif
                <div class="mt-2 mb-5 ml-n4">
                    <ul style="list-style-type: none;">
                        @foreach ($images as $image)
                            @if ($image)
                            <li style="border: 1px solid #333; width: 40px; height: 40px; display: inline-block;"><img class="show_image-li js-thumb-click" src="{{ asset('storage/'.$image->image_path) }}"></li>
                            @else
                            <li style="border: 1px solid #333; width: 40px; height: 40px; display: inline-block;"><img src="../img/noimage.gif"></li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="mt-3 mb-5">{{ $lecture->content }}</div>
                </section>
                @endif
                </article>
                @if (Auth::id() === $lecture->user_id)
                    <div class="text-center mt-4">
                            {!! Form::open(['route' => ['lectures.destroy', $lecture->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除する', ['class' => 'btn btn-danger btn-sm del_check']) !!}
                            {!! Form::close() !!}
                    </div>
                @endif
            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script>
                $(document).on('click', '.js-thumb-click', function(e) {
                    var image = $(e.currentTarget);
                    var imageUrl = image.attr('src');

                    $('#mainImage').attr('src', imageUrl);
                })
            </script>
@endsection