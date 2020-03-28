<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pick Your Show</title>
        <link rel="shortcut icon" href="/img/back.jpg">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">

        <!-- Styles-->
          <style>
             html, body {
                background-attachment: scroll;
                background: -webkit-gradient(linear, left top, left bottom, from(rgba(29, 28, 28, 0.89)), to(rgba(29, 28, 28, 0.89))), url("/img/back-1.jpg");
                background: linear-gradient(to bottom, rgba(29, 28, 28, 0.89) 0%, rgba(29, 28, 28, 0.89) 100%), url("/img/back-1.jpg");  
                background-position: center;
                 background-repeat: no-repeat;
                background-size: cover;
                color: #0074d9;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100%;
                margin: 0;
            }
           .content {
                text-align: center;
            }
            .title {
                font-size: 50px;
            }
           .links > a {
                color: #0074d9;
                padding: 0 20px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
            }
        </style> 
</head>
    <body>
      <div class="justify-content-center align-items-center">           
            <div class="content py-5 mr-3">
                <h1 class="title"> Pick Your Show!
                </h1>
                
                @if (Route::has('login'))
                <div class="links text-uppercase">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div> 
            <h2 class="text-center"> Manage your alltime favourite Tv Shows and Quotes in one place.</h2>
                
        </div> 
 </body>

</html>
