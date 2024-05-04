<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <a wire:navigate href="{{ route('dashboard') }}"
                class="list-group-item list-group-item-action py-2 {{ $title === 'Dashboard' ? 'active' : '' }}"
                data-mdb-ripple-init aria-current="true">
                <i class="fas fa-tachometer-alt fa-fw me-3 "></i><span>Dashboard</span>
            </a>
            <a wire:navigate href="{{ route('dashboard.user') }}"
                class="list-group-item list-group-item-action py-2 {{ $title === 'Dashboard | User' ? 'active' : '' }}"
                data-mdb-ripple-init><i class="fas fa-user fa-fw me-3"></i><span>Users</span></a>
            <a wire:navigate href="{{ route('dashboard.customer') }}"
                class="list-group-item list-group-item-action py-2 {{ $title === 'Dashboard | Customer' ? 'active' : '' }}"
                data-mdb-ripple-init><i class="fas fa-users fa-fw me-3"></i><span>Customer</span></a>
            <a wire:navigate href="{{ route('dashboard.product') }}"
                class="list-group-item list-group-item-action py-2 {{ $title === 'Dashboard | Product' ? 'active' : '' }}"
                data-mdb-ripple-init>
                <i class="fas fa-chart-area fa-fw me-3"></i><span>Product </span>
            </a>
            <a wire:navigate href="#"
                class="list-group-item list-group-item-action py-2 {{ $title === 'Dashboard | Orders' ? 'active' : '' }}"
                data-mdb-ripple-init><i class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
            <a wire:navigate href="#"
                class="list-group-item list-group-item-action py-2 {{ $title === 'Dashboard | Sales' ? 'active' : '' }}"
                data-mdb-ripple-init><i class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a>
        </div>
    </div>
</nav>
