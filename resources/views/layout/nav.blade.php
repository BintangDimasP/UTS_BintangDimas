@php
    $currentRouteName = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi bi-crosshair2"></i>TESTIFY</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-lg-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}"
                        class="nav-link active">Home</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('barangs.index') }}"
                        class="nav-link">Barang</a></li>
            </ul>
            <hr class="d-lg-none text-white-50">
            <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i
                    class="bi bi-person-fill"></i></a>
        </div>
    </div>
</nav>
