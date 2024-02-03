<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layouts.super-admin.head-css')
</head>

<body>
    @include('layouts.super-admin.main-sidebar')
    @include('layouts.super-admin.main-header')
    @yield('content')
    @include('layouts.super-admin.scripts')
</body>

</html>
