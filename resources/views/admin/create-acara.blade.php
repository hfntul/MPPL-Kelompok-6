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
                    <input type="text" id="judul" name="judul" class="form-control" style="width:100%" placeholder="Judul Acara" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Tanggal Pelaksanaan</strong></label>
                    <input type="text" id="tanggalPel" name="tanggalPel" class="form-control" style="width:100%" placeholder="Tanggal Pelaksanaan Acara" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Kabinet</strong></label>
                    <input type="text" id="tanggalPel" name="kabinet" class="form-control" style="width:100%" placeholder="Nama Kabinet" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Proposal</strong></label>
                    <input type="text" id="propos" name="propos" class="form-control" style="width:100%" placeholder="URL Proposal" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>LPJ</strong></label>
                    <input type="text" id="lpj" name="lpj" class="form-control" style="width:100%" placeholder="URL LPJ" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Poster</strong></label>
                    <input type="text" id="poster" name="poster" class="form-control" style="width:100%" placeholder="URL Poster" required>
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