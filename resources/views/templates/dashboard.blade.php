<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    {{-- {{ csrf_token() }} --}}
    <link rel="shortcut icon" href="{{ asset('assets/image/brand-2.png') }}" />

    <title>Dashboard Hiscare</title>

    @include('includes.style')

    @stack('style')

</head>

<body>
    <div class="wrapper">

        @include('layouts.sidebar')

        <div class="main">

            @include('layouts.navbar')

            @yield('content')

            @include('layouts.footer')
        </div>

    </div>

    @include('includes.script')

    @stack('script')

</body>

</html>