<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/0bbbe16b25.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <link href="/sass/app.scss" rel="stylesheet" type="text/css">
    <link href="/js/app.js" rel="stylesheet" type="text/css">
    
</head>
<header style="text-align: center; font-size: xx-large">
    Invoice ListBoard
</header>
<body style="font-family: 'Open Sans', sans-serif; background-color: gainsboro">
    
    <div class="container">
        @yield('mainContent')
    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>