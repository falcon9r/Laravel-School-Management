@extends('layout.basic')
@section("main")

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>

            @include('layout.partials.navbar')

            <div class="content">
                <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">

                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                            aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
                    <a class="navbar-brand me-1 me-sm-3" href="../index.html">
                        <div class="d-flex align-items-center"><img class="me-2"
                                                                    src="{{ asset('assets/img/icons/spot-illustrations/falcon.png') }}"
                                                                    alt="" width="40"/><span
                                class="font-sans-serif">falcon</span>
                        </div>
                    </a>
                    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                        </li class="nav-item">
                        Username
                        </li>
                        <li class="nav-item">
                            <div class="theme-control-toggle fa-icon-wait ps-2">
                                <input class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                                       type="checkbox" data-theme-control="theme" value="dark"/>
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                       for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                       title="Switch to light theme"><span class="fas fa-sun fs-0"></span></label>
                                <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                       for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                       title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                            </div>
                        <li class="nav-item">
                    </ul>
                </nav>

                @yield("content")

                @yield("footer")

                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">School Management System <span
                                    class="d-none d-sm-inline-block">| </span><br class="d-sm-none"/>
                                {{ \Carbon\Carbon::now()->year }} &copy; <a
                                    href="">StartCoding</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

@endsection
