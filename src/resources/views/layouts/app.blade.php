<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rese</title>
  <link rel="stylesheet" href="{{ asset('css/common.css')}}">
  <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="nav">
      <input class="drawer_hidden" type="checkbox" id="drawer_input">
      <label for="drawer_input" class="drawer_open">
        <span></span>
      </label>
      <nav class="nav_content">
        @if (Auth::check())
        <ul class="nav_list">
          <li class="nav_item"><a href="/">Home</a></li>
          <li class="nav_item"><a href="/login">Logout</a></li>
          <li class="nav_item"><a href="/mypage">Mypage</a></li>
        </ul>
        @endif
        <ul class="nav_list">
          <li class="nav_item"><a href="/">Home</a></li>
          <li class="nav_item"><a href="/register">Registration</a></li>
          <li class="nav_item"><a href="/login">Login</a></li>
        </ul>
      </nav>
    </div>
    <div class="logo">Rese</div>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>