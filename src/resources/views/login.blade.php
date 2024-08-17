@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__content">
  <div class="login__content-inner">
    <div class="login-form__heading">
      <p>Login</p>
    </div>
    <form class="form" action="/login" method="post">
        @csrf
      <div class="form__group">
        <div class="form__group-content">
          <div class="form__input">
            <input  class="form__input--text" type="email" name="email" placeholder="Email" value="{{ old('email') }}" />
          </div>
          <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__group-content">
          <div class="form__input">
            <input class="form__input--text" type="password" name="password" placeholder="Password"/>
          </div>
          <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
      </div>
      </div>
    </form>
  </div>
</div>


@endsection