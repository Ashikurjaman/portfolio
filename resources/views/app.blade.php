<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MR-X</title>
</head>
<body>
        @include('component.navbar')
        @include('component.loader')

        <div class=""  id="content-div ">
            @yield('content')
        </div>

        @include('component.footer')
</body>
</html>
