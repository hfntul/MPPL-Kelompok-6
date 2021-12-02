<div class="container-fluid ps-md-0" style="padding:110px 0 50px 0; background:#2277BF">
    @foreach($bannernya as $key => $p)
    <h1 class="fakultas-title">BEM {{$p->nama}}</h1>
    <marquee behavior="scroll" direction="right" class="banner-deskripsi">{{$p->link}}</marquee>
    @endforeach
</div>