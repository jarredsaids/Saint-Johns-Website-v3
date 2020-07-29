<!DOCTYPE HTML>
<HTML class="no-js" lang="en-US">
    <META content="IE=11.0000" http-equiv="X-UA-Compatible">
    <META charset="UTF-8">
    <!--[if lte IE 8]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8"/><![endif]-->
    <META name="viewport" content="width=device-width, initial-scale=1, maximum-scale= 1">

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Shadows Into Light Two' rel='stylesheet'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <!--Social Media Links-->
    <link href='/css/social.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel='stylesheet'>

    <!--NavBar Requirements-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>

    <!--Theme Changer-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/background.js"></script>

    <!--Bootstrap 4.5.0-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!--Galleria-->
    <style>.galleria{ width: 700px; height: 400px; background: #000 }</style>
</HEAD>
<TITLE>SJ - {{$title}}</TITLE>
<body>

<div class="p-4"></div>
<div class="container" style="background-color: white;">
    <div class="home-column-widgets-both" style="width: 100%; background-color: white;">
        <div class="d-flex justify-content-between" style="width: 100%;">
            <div class="p-2">
                <img class="logo" alt="Saint John's Logo" src="/images/logo2.png" scale="0">
            </div>
            <div class="p-2" style="text-decoration: none; text-align: center; font-family: 'Shadows Into Light Two';font-size: 32px;">
                <p>Connecting Growing Serving</p>
                @include('includes.social')

            </div>
        </div>
    </div>
    <a id="insideLabel"></a>
    @yield('content')
</div>
<div class="p-4"></div>
</body>
</html>
