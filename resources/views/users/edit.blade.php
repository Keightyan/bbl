@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-6">
            {!! Form:model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form:label('content', 'メッセージ：') !!}
            </div>


@endsection