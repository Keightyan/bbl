@extends('layouts.app')

@section('content')

<div class="container">
    <div class="head">レクチャー詳細</div>

        <div class="row ml-3 mt-5 pt-4">

            <div class="col-9 mx-auto">
                <article class="cont_inner">
                @if ($lecture)
                    @foreach ($images as $image)
                        @if ($image->image_path)
                        <figure class="show_post_thumbnail"><div class="new_area-img text-center"><img class="show_image" src="{{ asset('storage/'.$image->image_path) }}"></div></figure>
                        @else
                        <figure class="show_post_thumbnail"><div class="new_area-img text-center"><img src="../img/noimage.gif"></div></figure>
                        @endif
                    @endforeach
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
@endsection