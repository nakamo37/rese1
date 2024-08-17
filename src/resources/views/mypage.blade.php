@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
<div class="content-inner">
  @foreach ($contacts as $contact)
    @csrf
  <div class="content-inner_res">
    <p class="text-head">予約状況</p> 
    <div class="content-confirm_inner">
      <p>予約{{$contact->id}}</p>
      <div class="confirm">
        <div class="confirm-head">
            <p class="confirm-text">Shop</p>
            <p class="confirm-text">Date</p>
            <p class="confirm-text">Time</p>
            <p class="confirm-text">Number</p>
        </div>
        <div class="confirm-inner">
          <p>{{$contact->name}}</p><br>
          <p>{{$contact->date}}</p>
          <p>{{$contact->time}}</p>
          <p>{{$contact->number}}人</p>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <div class="content-inner_fav">
    <p class="text-head">お気に入り店舗</p>
  </div>
  
</div>

@endsection