<nav class="z-1 navbar navbar-expand-lg shadow">
    <div class="container">
        <a href="{{ route('home.index') }}">
            <img alt="logo" src="{{ asset('build/assets/image/logo.png') }}" height="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarcontent" aria-controls="navbarcontent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarcontent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item m-1">
                    <a class="nav-link" href="">
                        Home
                    </a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="">
                        Projects
                    </a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="">
                        About
                    </a>
                </li>
                <li class="nav-item m-1">
                    <a class="nav-link" href="">
                        Contact
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>