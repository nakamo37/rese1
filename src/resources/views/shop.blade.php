@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')

<div class="search-content">
  <form class="search-form" action="/" method="get">
    @csrf
    <div class="search-form__inner">
      <div class="search-form_item">
        <select class="search-form__item-inner" name="area" value="{{old('area')}}">
          <option disabled selected>All area</option>
          <option value="">東京</option>
          <option value="">大阪</option>
          <option value="">福岡</option>
        </select>
      </div>
      <div class="search-form_item">
        <select class="search-form__item-inner" name="genre" value="{{request('genre')}}">
          <option disabled selected>All genre</option>
          <option value="" @if(request('genre'))selected @endif>寿司</option>
          <option value="" @if(request('genre'))selected @endif>焼肉</option>
          <option value="" @if(request('genre'))selected @endif>居酒屋</option>
          <option value="" @if(request('genre'))selected @endif>イタリアン</option>
          <option value="" @if(request('genre'))selected @endif>ラーメン</option>
        </select>
      </div>
      <div class="searach-form_item">
        <input class="search-form__item-input" type="text" name="name" placeholder="Search..." value="{{ old('name') }}">
      </div>
      <div class="search-form__button">
        <button class="search-form__button-submit" type="submit">検索</button>
      </div>
    </div>
  </form>
</div>

<div class="content">
  @foreach ($shops as $shop)
  <div class="card-content">
    <div class="card-content__img" id="img">
      <img src="{{ asset('img/sushi.jpg') }}" alt="代替テキスト">
    </div>
    <div class="card-content__text">
      <h3 class="card-ttl">{{$shop->name}}</h3>
      <p class="card-tag">#{{$shop->area}} #{{$shop->genre}}</p>
      <a class="card-detail" href="/detail/?id={{$shop->id}}">詳しく見る</a>
    </div>
  </div>
  @endforeach
</div>

@endsection