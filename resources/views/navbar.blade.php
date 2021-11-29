<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">KORIDOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav ">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Beranda<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="{{url('')}}">Acara</a>
                <span class="caret"></span></a>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('/acara')}}">BEM KM IPB</a>
                    <a class="dropdown-item" href="#">BEM FAPERTA</a>
                    <a class="dropdown-item" href="#">BEM FKH</a>
                    <a class="dropdown-item" href="#">BEM FPIK</a>
                    <a class="dropdown-item" href="#">BEM FAPET</a>
                    <a class="dropdown-item" href="#">BEM FAHUTAN</a>
                    <a class="dropdown-item" href="#">BEM FATETA</a>
                    <a class="dropdown-item" href="#">BEM FMIPA</a>
                    <a class="dropdown-item" href="#">BEM FEM</a>
                    <a class="dropdown-item" href="#">BEM FEMA</a>
                    <a class="dropdown-item" href="#">BEM SV</a>
                    <a class="dropdown-item" href="#">BEM SB</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">Tentang</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">Login</a>
            </li>
        </ul>
    </div>
</nav>