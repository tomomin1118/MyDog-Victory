<!DOCTYPE>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" containt="IE=edge">
        <meta name="viewport" containt="width=device-width, initial-scale=1">
        
        <!-- token -- >
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        <!-- javascript -->
        <script src="{{ secure_asset('js/app.jp') }}" defer></script>
        
        <! -- fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts/googleapis.com/css?family="Raleway:300,400,600" rel="stylesheet" type="text/css">
        
        <!-- styles -->
        <!-- (laravel標準css) -->
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <!-- (css) -->
        <link href="{{ secure_asset('css/admin.css') }}" rel ="stylesheet">
    </head>
    
    <body>
        <div id="app">
            <!-- 画面上部ナビゲーションバー -->
            <nav class="navbar navbar-expand-md navbar-dark navbarr-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggler="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- left side -->
                        <ul class="navbar-nav ml-auto">
                        </ul>
                        <!-- right side -->
                        <ul class="navbar-nav ml-auto">
                        
                        <!-- authentication linkd-->
                        {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        {{-- ログインしていたらユーザー名とログアウトボタン表示 --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: nane;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            
            
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>