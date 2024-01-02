<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div class="container">
        @section('content')
            <p> Đây là phần content của viewTemplate.blade.php</p>
        @show
        <p> Đây là phần content của viewTemplate</p>
    </div>
</body>
</html>