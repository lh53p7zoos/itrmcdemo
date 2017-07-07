<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"-->

        <!-- Styles -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="body">
            <div class="jumbotron">
              <h4 class="display-5">Laravel Training</h4>
              <a href="d1"><button type="button" class="btn btn-primary btn-small">Day One</button></a>
              <a href="d2"><button type="button" class="btn btn-primary btn-small">Day Two</button></a>
              <a href="d3"><button type="button" class="btn btn-primary btn-small">Day Three</button></a>
              <hr class="my-4">
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
    </body>
</html>
