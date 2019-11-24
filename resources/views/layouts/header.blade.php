<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Weightloss Expert</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item">
                    <a href="{{ url('/home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/services') }}" class="nav-link {{ Request::is('services') ? 'active' : '' }}">
                        <span>Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">
                        <span>About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">
                        <span>Contact</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>