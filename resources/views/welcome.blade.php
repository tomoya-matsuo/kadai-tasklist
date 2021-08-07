@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>tasklistへようこそ！</h1>
            {{--ユーザ登録ページへのリンク--}}
            {!! link_to_route('signup.get','アカウントの作成',[],['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    @endif
@endsection    