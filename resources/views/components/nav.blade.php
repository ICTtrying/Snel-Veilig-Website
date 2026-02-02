<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top border-bottom border-secondary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="images/logo.jpg" loading="eager" fetchpriority="high" alt="logo" width="200" height="50">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3">
                    <a class="nav-link{{ request()->routeIs('home') ? ' active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link{{ request()->routeIs('overOns.index') ? ' active' : '' }}" href="{{ route('overOns.index') }}">Over Ons</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link{{ request()->routeIs('pakketten.index') ? ' active' : '' }}" href="{{ route('pakketten.index') }}">Pakketten</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link{{ request()->routeIs('contact.index') ? ' active' : '' }}" href="{{ route('contact.index') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
