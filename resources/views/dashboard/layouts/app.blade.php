<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>{{ $title ?? '' }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1/css/all.css') }}" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"
        integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
        crossorigin="anonymous"></script> --}}
</head>

<body style="background: rgb(209, 255, 255)">
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
    {{-- logout modal --}}
    <div wire:ignore.self class="modal fade" id="logoutModal" data-mdb-backdrop="static" data-mdb-keyboard="false"
        tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                </div>
                <div class="modal-body">
                    Are you sure you?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-mdb-ripple-init
                        data-mdb-dismiss="modal">No</button>
                    @livewire('dashboard.logout')
                </div>
            </div>
        </div>
    </div>
    {{-- logout modal --}}
    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('js/mdb.umd.min.js') }}"></script>
</body>

</html>
