{{-- <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <div class=" container-fluid position-relative ">
        <img src="{{ asset('img/logo2.png') }}" class="rounded " alt="..." width="150" height="auto">
    </div>

    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap position-relative">
            <a class=" btn btn-success px-3 mx-5 mx-md-3 mx-sm-3" href="/login">Login <span data-feather="log-in"></a>
        </div>
    </div>
</header> --}}



{{-- <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <div class=" container-fluid position-relative ">
        <img src="{{ asset('img/logo2.png') }}" class="rounded " alt="..." width="150" height="auto">
    </div>
    <div class="container-fluid">
        <button class="navbar-toggler d-md-none d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class=" text-nowrap ">
        <a class="btn btn-success px-3 mx-5 mx-md-3 mx-sm-3" href="/login">Login <span data-feather="log-in"></a>
    </div>
</nav>
<div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
        <div class="nav-item text-nowrap d-sm-none ">
            <a class="btn btn-success" href="/login">Login <span data-feather="log-in"></a>
        </div>
    </div>
</div> --}}

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">

        <img src="{{ asset('img/logo2.png') }}" class="rounded " alt="..." width="150" height="auto">

        <div class="d-flex">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <div class="nav-item text-nowrap position-relative">
                        <a class=" btn btn-success" href="/login">Login <span data-feather="log-in"></a>
                    </div>
                </div>
            </div>
            <button class="navbar-toggler bg-success" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
        </div>
    </div>
</nav>
