<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="container w-75 mt-3">
        @yield('content')
    </div>    
</body>

</html>