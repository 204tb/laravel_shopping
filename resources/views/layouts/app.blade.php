<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--BootStrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body class="container">
<nav class="nav bg-light">
    <a href="{{route('admin.item.index')}}" class="nav-link">商品一覧</a>
    <a href="{{route('admin.item.create')}}" class="nav-link">商品入力</a>
</nav>

    <div class="container">
        @yield("content")
    </div>
    
</body>
</html>