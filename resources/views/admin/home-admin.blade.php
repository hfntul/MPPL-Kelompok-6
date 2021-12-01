@extends('admin.admin-master')


@section('title')
    Welcome
@endsection

@section('admin-content')
<div class="container-fluid py-4">
    <br>
    <div class="row">
        <div class="col-12">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class=" border-radius-lg pt-4 pb-3 bg-gradient-primary">
                <br>
                <h1 class="text-white text-capitalize ps-5">BEM {{Auth::user()->ormawa}}</h1>
                <h6 class="text-white ps-5">Selamat datang di halaman admin BEM {{Auth::user()->ormawa}}</h6>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>

@endsection