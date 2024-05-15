<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu"
            aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo bskreatif.png') }}" height="20" alt="" loading="lazy" />
        </a>
        {{-- <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
            <input autocomplete="off" type="search" class="form-control rounded"
                placeholder='Search (ctrl + "/" to focus)' style="min-width: 225px" />
            <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form> --}}

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
            <!-- Avatar -->
            <li class="nav-item ">
                <a class="nav-link  dropdown d-flex align-items-center" href="#" id="navbarDropdownMenuLink"
                    role="button" data-mdb-dropdown-init data-mdb-ripple-init aria-expanded="false">
                    <div class="me-3 text-dark ">{{ auth()->user()->name }}
                    </div><img src="{{ asset('img/user-default.png') }}" class="rounded-circle" height="30"
                        alt="" loading="lazy" />
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">My profile</a></li>
                    <li><a class="dropdown-item" href="#" data-mdb-ripple-init data-mdb-modal-init
                            data-mdb-target="#logoutModal">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- Container wrapper -->
</nav>
