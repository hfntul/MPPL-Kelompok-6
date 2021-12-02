<div class="container-fluid ps-md-0" style="padding:110px 0 50px 0; background:#2277BF">
    <h1 class="fakultas-title">BEM KM IPB</h1>
    @foreach($bannernya as $key => $p)
    <marquee behavior="scroll" direction="right" class="banner-deskripsi">{{$p->link}}</marquee>
    @endforeach
</div>