@extends('admin.admin-master')


@section('title')
    Ubah Acara
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
                
                <form action="/admin/acara/edit/{{$proposal->id}}/update" method="POST" class="text-start">
                {{csrf_field()}}
                  <div class="input-group input-group-outline my-3" style="display:block">
                    <label><strong>Judul</strong></label>
                    <input type="text" id="eventName" name="eventName" class="form-control" style="width:100%" value="{{$proposal->eventName}}">
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Tanggal Pelaksanaan</strong></label>
                    <input type="text" id="eventTimeHeld" name="eventTimeHeld" class="form-control" style="width:100%" value="{{$proposal->eventTimeHeld}}">
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Kabinet</strong></label>
                    <input type="text" id="kabinet" name="kabinet" class="form-control" style="width:100%" value="{{$proposal->kabinet}}">
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label for="customFile"><strong>Proposal</strong></label>
                    <input type="file" class="form-control" id="customFile" style="width:100%" />
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
                    <button type="submit" class="btn my-4 mb-2 simpan">Simpan</button>
                    <button type="button" class="btn my-4 mb-2 batal">Batal</button>
                  </div>
                </form>
              </div>
          </div>
         
        </div>
      </div>
</div>

@endsection