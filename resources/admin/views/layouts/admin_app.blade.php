<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin Dashboard</title>
        <!-- Google Fonts -->
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Nunito">
 
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    </head>
    <body>
        <div id="app">
            @include('_partials.header')
            <div id="main">
                @yield('content')
            </div>    
            @include('_partials.footer')
        </div>
    </body>
</html>