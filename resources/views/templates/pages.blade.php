<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hiscare Dashboard</title>

    @include('includes.style')

    @stack('style')
    <link rel="stylesheet" href="/assets/css/pages/page.css">

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
</body>


</html>