<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login') && !Auth::check())
        <div class="top-right links">
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
        </div>
    @endif
    @if(Auth::check())
        <div class="top-right links">
            <a href="#">{{Auth::user()->name}}</a>
            <a href="{{ url('/logout') }}" onclick="logout(this,event)">Logout </a>
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            {!! env('APP.LONG_NAME') !!}
        </div>

        <div class="links">
            <a href="http://centralbos.com/" target="_blank">Home</a>
            <a href="https://mycbos.com/" target="_blank">Application Login</a>
        </div>

        <div>
            {!! env('APP.TAG_LINE') !!}
        </div>
    </div>
</div>
<script>
    function logout(t, e) {
        e.preventDefault();
        if (confirm('Are you sure you want to loggout?')) {
            document.getElementById('logout-form').submit();
        }
    }
</script>
</body>
</html>
