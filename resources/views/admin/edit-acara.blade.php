@extends('admin.admin-master')


@section('title')
    Koridor
@endsection

@section('admin-content')
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class=" border-radius-lg pt-4 pb-3" style="background-color:#2277BF">
                <h6 class="text-white text-capitalize ps-3">Edit Acara</h6>
              </div>
            </div>
            <div class="card-body">
                <form role="form" class="text-start">
                  <div class="input-group input-group-outline my-3" style="display:block">
                    <label>Judul</label>
                    <input type="text" class="form-control" style="width:100%" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label>Tanggal Pelaksanaan</label>
                    <input type="text" class="form-control" style="width:100%" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label for="customFile">Proposal</label>
                    <input type="file" class="form-control" id="customFile" style="width:100%" />
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label for="customFile">LPJ</label>
                    <input type="file" class="form-control" id="customFile" style="width:100%"/>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block;">
                    <label for="customFile">Poster</label>
                    <input type="file" class="form-control tes" id="customFile" style="width:100%;"/>
                  </div>
                </form>
              </div>
          </div>
          <div class="text-center">
            <button type="button" class="btn my-4 mb-2 simpan">Simpan</button>
            <button type="button" class="btn my-4 mb-2 batal">Batal</button>
          </div>
        </div>
      </div>
</div>

@endsection