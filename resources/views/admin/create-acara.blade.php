@extends('admin.admin-master')


@section('title')
    Buat Acara
@endsection

@section('admin-content')
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class=" border-radius-lg pt-4 pb-3" style="background-color:#2277BF">
                <h6 class="text-white text-capitalize ps-3">Buat Acara</h6>
              </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{action('AdminsControllers@createProposal')}}" class="formproposal">
                  {{ csrf_field() }}
                  <div class="input-group input-group-outline my-3" style="display:block">
                    <label><strong>Judul</strong></label>
                    <input type="text" id="judul" name="judul" class="form-control" style="width:100%" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Tanggal Pelaksanaan</strong></label>
                    <input type="text" id="tanggalPel" name="tanggalPel" class="form-control" style="width:100%" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label for="customFile"><strong>Proposal</strong></label>
                    <input type="file" class="form-control" id="file" name="file" style="width:100%" />
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label for="customFile"><strong>LPJ</strong></label>
                    <input type="file" class="form-control" id="customFile" style="width:100%"/>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block;">
                    <label for="customFile"><strong>Poster</strong></label>
                    <input type="file" class="form-control tes" id="customFile" style="width:100%;"/>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn w-100 my-4 mb-2" style="background-color:#2277BF;color:white">Create</button>
                  </div>
                </form>
              </div>
          </div>
          
        </div>
      </div>
</div>

@endsection