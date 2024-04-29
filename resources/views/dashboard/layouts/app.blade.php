<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $title }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1/css/all.css') }}" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script>
</head>

<body>
    <!--Main Navigation-->
    <header>
        <!-- Sidebar -->
        @include('dashboard.layouts.sidebar')
        <!-- Sidebar -->

        <!-- Navbar -->
        @include('dashboard.layouts.navbar')
        <!-- Navbar -->
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">
            {{ $slot }}
        </div>
    </main>
    <!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.umd.min.js') }}"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="{{ asset('js/admin.js') }}"></script>

</body>

</html>