@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>tasklistへようこそ！</h1>
            {{--ユーザ登録ページへのリンク--}}
            {!! link_to_route('signup.get','アカウントの作成',[],['class' => 'btn btn-primary']) !!}
        </div>
    </div>
@endsection    