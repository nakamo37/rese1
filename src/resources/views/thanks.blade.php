@extends('layouts.app')

@section('css')
<!-- <link rel="stylesheet" href="{{ asset('css/common.css') }}"> -->
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks_content">
<p class="content_text">ご予約ありがとうございます</p>
<a class="content_btn" href="/">戻る</a>
</div>


@endsection