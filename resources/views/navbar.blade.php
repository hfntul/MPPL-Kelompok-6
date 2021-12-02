<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="height:75px">
    <a class="navbar-brand" href="#">KORIDOR</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
        <ul class="navbar-nav ">
            <li class="nav-item" style="margin-top:14px">
                <a class="nav-link" style="{{ (request()->is('/')) ? 'font-weight:bold' : '' }}" href="{{url('/')}}">Beranda</a>
            </li>
            <li class="nav-item dropdown" style="margin-top:14px">
                <a class="nav-link dropdown-toggle" href="{{url('/')}}"  data-toggle="dropdown" style="{{ (request()->is('acara*')) ? '!important; font-weight:bold' : '' }}">Acara</a>
                <span class="caret"></span></a>
                <form>
                {{ csrf_field() }}
                    <div class="dropdown-menu" >
                        <a class="dropdown-item" href="acara/toAcara/KM">BEM KM IPB</a>
                        <a class="dropdown-item" href="acara/toAcara/FAPERTA">BEM FAPERTA</a>
                        <a class="dropdown-item" href="acara/toAcara/FKH">BEM FKH</a>
                        <a class="dropdown-item" href="acara/toAcara/FPIK">BEM FPIK</a>
                        <a class="dropdown-item" href="acara/toAcara/FAPET">BEM FAPET</a>
                        <a class="dropdown-item" href="acara/toAcara/FAHUTAN">BEM FAHUTAN</a>
                        <a class="dropdown-item" href="acara/toAcara/FATETA">BEM FATETA</a>
                        <a class="dropdown-item" href="acara/toAcara/FMIPA">BEM FMIPA</a>
                        <a class="dropdown-item" href="acara/toAcara/FEM">BEM FEM</a>
                        <a class="dropdown-item" href="acara/toAcara/FEMA">BEM FEMA</a>
                        <a class="dropdown-item" href="acara/toAcara/SV">BEM SV</a>
                        <a class="dropdown-item" href="acara/toAcara/SB">BEM SB</a>
                    </div>
                </form>
            </li>
            <li class="nav-item" style="margin-top:14px">
                <a class="nav-link" style="{{ (request()->is('about')) ? 'font-weight:bold' : '' }}" href="{{url('/about')}}">Tentang</a>
            </li>
            <li class="nav-item" style="margin-top:14px">
                <a class="nav-link" href="{{url('login')}}">Login</a>
            </li>
        </ul>
    </div>
</nav>