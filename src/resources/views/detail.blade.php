@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')

<div class="detail-inner">
  <div class="detail-content">
    <div class="detail">
      <div class="detail-name" name="name">{{$detail->name}}</div>
      <div class="img">
      <img src="{{ asset('img/sushi.jpg') }}" alt="代替テキスト">
      </div>
      <div class="detail-tag">#{{$detail->area}} #{{$detail->genre}}</div>
      <div class="detail-text">{{$detail->detail}}</div>
    </div>
    <div class="reserve">
      <div class="reserve-content">
        <form class="contact-form" action="/detail" method="post">
          @csrf
          <p class="reserve-text">予約</p>
          <div class="reserve">
            <input class="reserve-inner_input" type="date" id="date" name="date" value="{{ old('date') }}"></br>
            <input class="reserve-inner_input" type="time" min="10:00" max="21:30" step="1800" name="time" id="time" value="{{ old('time') }}"></br>
            <input class="reserve-inner_input" type="number" min="1" max="50" name="number" id="number" value="{{ old('number') }}">
          </div>
          <div class="confirm">
            <div class="confirm-head">
              <p class="confirm-text">Shop</p>
              <p class="confirm-text">Date</p>
              <p class="confirm-text">Time</p>
              <p class="confirm-text">Number</p>
            </div>
            <div class="confirm-inner">
              <p>{{$detail->name}}</p>
              <p value="#date"></p>
              <p value="#time"></p>
              <p value="#number"></p>
            </div>
          </div>
          <div class="form-btn">
            <button class="form-btn_inner" type="submit">予約する</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection