@extends('app')

@section('title')
    Koridor
@endsection

@section('content')
<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6">
            <img style="height:80%; margin:auto; padding-top:70px"src="./images/home.png">
        </div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-10 wlcm">
                            <h1>Welcome to Koridor</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <br>
                            <div class="input-group">
                                <div class="form-outline">
                                    <input type="search" id="form1" class="form-control" placeholder="Search"/>
                                </div>
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
