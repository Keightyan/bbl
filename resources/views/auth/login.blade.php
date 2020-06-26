@extends('layouts.app')

@section('content')

<div class="container pt-0">

    <div class="text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-3 mx-auto">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p class="mt-2 text-center">まだ登録していない方は {!! link_to_route('signup.get', '今すぐ登録！') !!}</p>
        </div>
    </div>

</div>
@endsection