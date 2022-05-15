<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

   

     <style>
         body {
             font-family: 'Nunito', sans-serif;
         }
     </style>
</head>
<body>

    @if (session('status'))
        {{ session('status') }}
    @endif

    @yield('content') 
    
</body>
</html>