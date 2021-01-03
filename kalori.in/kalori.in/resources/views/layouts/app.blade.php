<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href='https://fonts.googleapis.com/css?family=Bungee Outline' rel='stylesheet'>
<title>Kalori.in</title>
  <style type="text/css">
    #tales {
    width: 65%;
    height: 355px;
	  }
    .bg-custom {
            background: rgba(115, 178, 163, 1);
        }

    .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 1);
        }
    h2 {
            color: rgba(115, 178, 163, 1)
    }
    .button {
            background-color: rgba(115, 178, 163, 1); 
            border: none;
            border-radius: 10px;
            color: white;
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 17px;
            margin: 4px 2px;
            cursor: pointer;
      }
      .buttonMenu {
            background-color: rgba(115, 178, 163, 1); 
            border: none;
            border-radius: 10px;
            color: white;
            padding: 15px 65px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            position: absolute;
            left: 264px;
            background: #73B2A3;
            border-radius: 15px;
      }
      /* Welcome To kalori.in */
      .buttonSign {
            background-color: rgba(115, 178, 163, 1); 
            border: none;
            border-radius: 10px;
            color: white;
            padding: 10px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 17px;
            margin: 4px 2px;
      }
      .buttonk {
            background-color: rgba(255, 255, 255, 1); 
            border: #73b2a3 1px solid;
            border-radius: 10px;
            color: rgba(115, 178, 163, 1);
            padding: 10px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 17px;
            margin: 4px 2px;
      }
      .jumbotronk {
              background: url("images/bglanding.jpg");
              background-size: cover;
              color: #faf0f0;           
      }   
      .kata{
position: absolute;
width: 500px;
height: 350px;
left: 35px;
top: 100px;

font-family: Bungee Outline;
font-style: normal;
font-weight: bold;
font-size: 36px;
line-height: 43px;
text-align: center;

color: #C81F38;


/*backdrop-filter: blur(4px);*/
/* Note: backdrop-filter has minimal browser support */
transform: rotate(-8.39deg);
}       
  </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kalori.in') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="css/Kalori.in webf.png" width="120" height="35">
                </a>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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
