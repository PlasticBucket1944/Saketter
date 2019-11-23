<html>
<head>
    @include('layouts/head')
    <style>
    </style>
</head>
<body>
@include('layouts/header')

    <div class="content">
        @yield('content')
    </div>

@include('layouts/scripts')
</body>
</html>
