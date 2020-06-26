@extends('layouts.app')

@section('content')
    <div class="row ml-3" style="margin-bottom: 150px;">
        <div class="col-sm-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    <img class="rounded img-fluid" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
                @if (Auth::id() === $user->id)
                    <div class="text-right">
                            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                                {!! Form::submit('退会', ['class' => 'btn btn-danger btn-sm del_check']) !!}
                            {!! Form::close() !!}
                    </div>
                @endif
            </div>
        </div>
        <div id="user_info" class="col-sm-8">
            <dl>
                <dt>性別</dt><dd>{{ $user->sex }}</dd>
                <br>
                <dt>年齢</dt><dd>{{ $user->age }}</dd>
                <br>
                <dt>投打</dt><dd>{{ $user->throwing }}{{ $user->batting }}</dd>
                <br>
                <dt>好きなチーム</dt><dd>{{ $user->favorite_team }}</dd>
                <br>
                <dt>アピール</dt><dd>{{ $user->appeal }}</dd>
            </dl>
        </div>
        <div class="col-sm-12 d-flex mt-5 pt-5 overflow-hidden">
        @foreach ($lectures as $lecture)
        
        @if ($loop->index <= 4)
        <div class="col-3">
            <article class="cont_inner_list">
                @if ($lecture->image)
                    <a href="{{ route('lectures.show', ['id' => $lecture->id]) }}"><figure class="user_post_thumbnail"><div class="new_area-img"><img class="user_thumbnail" src="{{ asset('storage/'.$lecture->image) }}"></div></figure></a>
                @else
                <a href="{{ route('lectures.show', ['id' => $lecture->id]) }}"><figure class="user_post_thumbnail"><div class="new_area-img"><img src="../img/noimage.gif" style="width: 127px; height: 130px; object-fit: cover;"></div></figure></a>
                @endif
                    <section class="post_meta-all multiline line-8">
                <div class="pick_title"><a href="{{ route('lectures.show', ['id' => $lecture->id]) }}" class="post_text_color">{{ $lecture->title }}</a></div>
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
                </div>
                @if (Auth::id() === $lecture->user_id)
                    <div class="text-right">
                            {!! Form::open(['route' => ['lectures.destroy', $lecture->id], 'method' => 'delete']) !!}
                                {!! Form::submit('削除する', ['class' => 'btn btn-danger btn-sm del_check']) !!}
                            {!! Form::close() !!}
                    </div>
                @endif
                </section>
            </article>
        </div>
    @endif
    @endforeach
        </div>
        <div class="paginate_total_relative">
    <div class="paginate_total_absolute">
        {{ $lectures->links('pagination::bootstrap-4') }}
        <p class="mb-4 text-center">総投稿数：{{ $lectures->total() }}</p>
    </div>
    </div>
    </div>
@endsection