<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('includesHome/style')
</head>
<body>


@include('includesHome/topbar')

@yield('content')
@include('includesHome/footer')

@include('includesHome.script')

    
</body>
</html>