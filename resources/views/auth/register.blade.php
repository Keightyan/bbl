@extends('layouts.app')

@section('content')

<div class="container pt-0">

<div class="text-center">
        <h1>ユーザー登録</h1>
    </div>

    <div class="row mt-5">
        <div class="col-sm-8 offset-sm-3 mx-auto">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', 'ユーザー名') !!}<span style="background-color: red; margin-left: 10px; color: #fff; padding: 1px 3px 3px 1px; border-radius: 3px; font-size: .8em;">必須</span>
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {{ Form::label('性別') }}<br>

                    {{ Form::label('sex', '男性') }}
                    {{ Form::radio('sex','男性') }}
                    {{ Form::label('sex', '女性') }}
                    {{ Form::radio('sex','女性') }}
                </div>

                <div class="form-group">
                    {!! Form::label('age', '年齢') !!}
                    {{ Form::number('age', null, ['class' => 'form-control', 'placeholder' => '', 'min' => 0, 'max' => 100]) }}
                </div>

                <div class="form-group">
                    {{ Form::label('投打') }}<br>

                    {{ Form::label('右投') }}
                    {{ Form::radio('throwing','右投') }}
                    {{ Form::label('左投') }}
                    {{ Form::radio('throwing','左投') }}
                    <span style="display: ineline-block;margin: 0 3px;"></span>
                    {{ Form::label('右打') }}
                    {{ Form::radio('batting','右打') }}
                    {{ Form::label('左打') }}
                    {{ Form::radio('batting','左打') }}
                </div>

                <div class="form-group">
                    {!! Form::label('favorite_team', '好きな球団') !!}<br>
                    {{Form::select('favorite_team', [
                        '未設定' => '未設定',
                        '読売ジャイアンツ' => '読売ジャイアンツ',
                        '横浜DeNAベイスターズ' => '横浜DeNAベイスターズ',
                        '阪神タイガース' => '阪神タイガース',
                        '広島東洋カープ' => '広島東洋カープ',
                        '中日ドラゴンズ' => '中日ドラゴンズ',
                        '東京ヤクルトスワローズ' => '東京ヤクルトスワローズ',
                        '埼玉西武ライオンズ' => '埼玉西武ライオンズ',
                        '福岡ソフトバンクホークス' => '福岡ソフトバンクホークス',
                        '東北楽天ゴールデンイーグルス' => '東北楽天ゴールデンイーグルス',
                        '千葉ロッテマリーンズ' => '千葉ロッテマリーンズ',
                        '北海道日本ハムファイターズ' => '北海道日本ハムファイターズ',
                        'オリックス・バファローズ' => 'オリックス・バファローズ'
                        ], ['placeholder' => 'null'])}}
                </div>

                <div class="form-group">
                    {!! Form::label('appeal', 'アピール') !!}
                    {!! Form::textarea('appeal', null, ['class' => 'field w-100']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}<span style="background-color: red; margin-left: 10px; color: #fff; padding: 1px 3px 3px 1px; border-radius: 3px; font-size: .8em;">必須</span>
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}<span style="background-color: red; margin-left: 10px; color: #fff; padding: 1px 3px 3px 1px; border-radius: 3px; font-size: .8em;">必須</span>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード（確認用）') !!}<span style="background-color: red; margin-left: 10px; color: #fff; padding: 1px 3px 3px 1px; border-radius: 3px; font-size: .8em;">必須</span>
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p class="mt-2 text-center">登録済みの方は {!! link_to_route('login.get', 'ここからログイン') !!}</p>
        </div>
    </div>
</div>
@endsection