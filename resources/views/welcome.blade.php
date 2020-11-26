@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        @include('tasks.index')
    @else    
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ようこそタスクリストへ</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'アカウントを登録しよう', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
            <div class="text-center">
                {{-- ログインへのリンク --}}
                {!! link_to_route('login', 'ログイン', [], ['class' => 'btn btn-lg btn-success']) !!}
                
            </div>
    @endif    
@endsection