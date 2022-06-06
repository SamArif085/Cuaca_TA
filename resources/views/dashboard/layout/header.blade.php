{{-- <header class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand text-capitalize" href="/"> <img src="img/logo2.png" class="rounded" alt="..."
                width="100" height="auto"></a>
        <div class=" p-1">
            <h6 class=" text-warning ">Halo {{ auth()->user()->name }}</h6>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ $judul === 'Home' ? 'active' : '' }} " href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $judul === 'Blog' ? 'active' : '' }}" href="/blog">Data MoU</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" href="#"><i
                                            class="bi bi-box-arrow-right"></i> Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="/login" class="nav-link {{ $judul === 'login' ? 'active' : '' }}"><i
                                class="bi bi-arrow-left-square-fill"></i>
                            Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</header> --}}
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <div class=" container-fluid position-relative ">
        <img src="{{ asset('img/logo2.png') }}" class="rounded " alt="..." width="150" height="auto">
    </div>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap position-relative">
            <form action="/logout" method="POST">
                @csrf
                <button class=" btn btn-danger px-3 " href="#">Logout <span data-feather="log-out"></button>
            </form>
        </div>
    </div>
</header>
