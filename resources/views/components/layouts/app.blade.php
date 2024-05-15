<!doctype html>
<html lang="en">
<livewire:styles />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSKreatif | {{ $title ?? '' }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.1/css/all.css') }}" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
</head>

<body style="background: rgb(209, 255, 255)">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"> <img src="{{ asset('img/logo bskreatif putih.png') }}"
                    height="15" alt="" loading="lazy" />
                </i></a>
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

                <ul class="navbar-nav me-auto  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a wire:navigate class="nav-link  {{ $title === 'Home' ? 'text-danger' : '' }}"
                            aria-current="page" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a wire:navigate class="nav-link  {{ $title === 'Product' ? 'text-danger' : '' }}"
                            href="{{ route('product') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link  {{ $title === 'About' ? 'text-danger' : '' }}"
                            href="{{ route('about') }}">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link  {{ $title === 'Galleries' ? 'text-danger' : '' }}"
                            href="{{ route('gallery') }}">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a wire:navigate class="nav-link  {{ $title === 'Policy' ? 'text-danger' : '' }}"
                            href="{{ route('policy') }}">Kebijakan</a>
                    </li>
                </ul>

                <!-- Right elements -->
                <div class="d-flex align-items-center nav-item">
                    <!-- Avatar -->
                    <div class="dropdown nav-link">
                        <a class="d-flex align-items-center" id="navbarDropdown" role="button" data-mdb-dropdown-init
                            data-mdb-ripple-init aria-expanded="false">
                            <div class="me-3 text-secondary">@auth{{ auth()->user()->name }}@endauth
                            </div><img src="{{ 'img/user-default.png' }}" class="rounded-circle bg-light"
                                height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            @auth
                                <li><a wire:navigate class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                                </li>
                                <li><a wire:navigate class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="#" data-mdb-ripple-init data-mdb-modal-init
                                        data-mdb-target="#logoutModal">Logout</a></li>
                            @else
                                <li><a wire:navigate class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li><a wire:navigate class="dropdown-item" href="{{ route('register') }}">Register</a>
                                </li>
                            @endauth
                        </ul>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
        </div>
    </nav>

    {{ $slot }}
    @if ($title != 'Login' && $title != 'Register')
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-dark text-light mt-4">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Terhubung dengan kami di jejaring sosial:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="https://www.facebook.com/BSKreatif1" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://www.tiktok.com/@bskreatif?_t=8mJ0g7EbZk0&_r=1" class="me-4 text-reset">
                        <i class="fab fa-tiktok"></i>
                    </a>
                    <a href="https://www.instagram.com/bskreatif?igsh=bzdrczNkMzc2Y3lk" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4"><img
                                    src="{{ asset('img/logo bskreatif putih.png') }}" height="15" alt=""
                                    loading="lazy" />
                            </h6>
                            <p>
                                BSKreatif atau Bisnis Seni Kreatif Adalah sebuah usaha yang bergerak dibidang pembuatan
                                box hantaran, frame, isian mahar dan berbagai perlengkapan hantaran lainnya.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Main Menu
                            </h6>
                            <p>
                                <a href="{{ route('home') }}" class="text-reset">Beranda</a>
                            </p>
                            <p>
                                <a href="{{ route('product') }}" class="text-reset">Produk</a>
                            </p>
                            <p>
                                <a href="{{ route('about') }}" class="text-reset">Tentang</a>
                            </p>
                            <p>
                                <a href="{{ route('gallery') }}" class="text-reset">Galeri</a>
                            </p>
                            <p>
                                <a href="{{ route('policy') }}" class="text-reset">Kebijakan</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
                            <p><i class="fas fa-home me-3"></i> Kota Jambi, Jambi, Indonesia</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                admin@bskreatif.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> +62 857-0903-3274</p>
                            <p><i class="fab fa-whatsapp me-3"></i> +62 857-0903-3274</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © {{ date('Y') }} Copyright:
                <a class="text-reset fw-bold" href="https://bskreatif.com/"><img
                        src="{{ asset('img/logo bskreatif putih.png') }}" height="15" alt=""
                        loading="lazy" /></a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
    @endif
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
