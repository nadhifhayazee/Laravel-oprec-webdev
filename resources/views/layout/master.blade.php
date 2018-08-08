<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Webde Open Recruitment</title>
</head>

<body>

  
        {{-- jumbotron --}}
        <div class="container-fluid">
                @yield('jumbotron')

                {{-- end-jumbotron --}} @yield('content')
        

        </div>
      
        {{-- <footer>

            <p class="text-center">
                <strong>Copyright &copy; 2018 | Web Developer IT PENS</strong>
            </p>

            <ul class="text-center">
                <li>
                    <img src="/img/webdev.jpg" alt="">
                </li>
                <li>
                    <img src="/img/himit.png" alt="">
                </li>
                <li>
                    <img src="/img/pens.png" alt="">
                </li>
            </ul>

        </footer>
  --}}


    <script src="/js/bootstrap.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>