<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark stroke">
            <h1><a class="navbar-brand" href="{{ locale_route('home') }}" style="text-transform: none">
                    <span class="sub-log">B</span>olayoqat
                </a></h1>
            <!-- if logo is image enable this
  <a class="navbar-brand" href="#index.html">
      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
  </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav navbar-left mar">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ locale_route('home') }}">{{ trans('landing.menu.home') }} <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">{{ trans('landing.menu.about_us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">{{ trans('landing.menu.teachers') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">{{ trans('landing.menu.news') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ locale_route('photo-gallery') }}">{{ trans('landing.menu.photo_gallery') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="/ru" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-ru"> </span> Русский</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'en') }}"><span class="flag-icon flag-icon-us"> </span>  English</a>
                            <a class="dropdown-item" href="{{ route(Route::currentRouteName(), 'tj') }}"><span class="flag-icon flag-icon-tj"> </span>  Тоҷикӣ</a>
                        </div>
                    </li>
                </ul>

            </div>
            <!-- toggle switch for light and dark theme -->

            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container py-1">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>
