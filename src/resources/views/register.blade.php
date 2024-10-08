@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/common.css') }}">
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register__content">
  <div class="register__content-inner">
    <div class="register-form__heading">
      <p>Registration</p>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
      <div class="form__group">
      <div class="form__group-content">
          <div class="form__input">
            <input  class="form__input--text" type="name" name="name" placeholder="Username" value="{{ old('name') }}" />
          </div>
          <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
          </div>
        </div>
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
        <div class="form__group-content">
          <div class="form__input">
            <input class="form__input--text" type="password" name="password_confirmation" placeholder="Password"/>
          </div>
          <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
          </div>
        </div>
        <div class="form__button">
        <button class="form__button-submit" type="submit">登録</button>
      </div>
      </div>
    </form>
  </div>
</div>


@endsection