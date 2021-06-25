<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('includes/style')
</head>
<body>

@include('includes.script')
@include('includes.sidebar')
@include('includes.topbar')
@yield('content')

@include('includes.footer')



</body>
</html>
