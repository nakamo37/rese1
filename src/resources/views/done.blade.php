@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
<div class="done_content">
<p class="content_text">会員登録ありがとうございます</p>
<a class="content_btn" href="/login">ログインする</a>
</div>


@endsection