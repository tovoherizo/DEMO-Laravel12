<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-3" style="min-height: 70px;">
    <div class="container-fluid">
      
        <a class="navbar-brand text-success fw-bold fs-3" href="/">JobApply</a>

        <button class="navbar-toggler me-4" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" 
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link fs-5" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="/about">About</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-5" href="#" data-bs-toggle="dropdown">Jobs</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-5" href="/joblist">Job List</a></li>
                        <li><a class="dropdown-item fs-5" href="/jobdetail">Job Detail</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fs-5" href="#" data-bs-toggle="dropdown">Pages</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-5" href="/category">Job category</a></li>
                        <li><a class="dropdown-item fs-5" href="/testimonial">Testimonial</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link fs-5" href="/contact">Contact</a></li>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item fs-5" href="">français(fr)</a></li>
                    <li><a class="dropdown-item fs-5" href="">anglais(en)</a></li>
                  
                </ul>

                <!-- si utilisateur n'est pas connecter -->
                @guest
                    <li class="nav-item">
                        <a href="/login" class="nav-link fs-5 fw-bold" >
                            Post A Job <i class="fa fa-arrow-right ms-2"></i>
                        </a>
                    </li>
                @endguest

                <!-- si utilisateur connecté  -->
                @auth
                    <li class="nav-item dropdown">
                        
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Photo de profil" class="rounded-circle" id="profil" style="width: 35px; height: 35px; object-fit: cover;">
                            <span class="fs-5">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            
                            <li><a class="dropdown-item fs-5" href="/profile">Mon Profil</a></li>
                            <li>
                                <a class="dropdown-item text-danger fs-5" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                            </li>

                        </ul>
                    </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->
