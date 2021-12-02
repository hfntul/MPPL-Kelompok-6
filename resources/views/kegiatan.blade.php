<div class="container-fluid ps-md-0" style="padding:10px 5% 50px 5%; margin-top:50px">
    <h1 class="keg">Acara yang dilaksanakan</h1>
    <div class="row" style="margin:0, padding:0" id="fakultas">
        @foreach($proposalnya as $key => $p)
        <div class="column">
            <div class="card">
                <img src="{{$p->poster}}" style="max-width: 380px; max-height: 460px" alt="Card image cap">
                <h3>{{$p->eventName}}</h3>
                <br>
                <a href="/acara/toDetail/{{$p->id}}">Read More</a>
            </div>
        </div>
        @endforeach
    </div> 
</div>