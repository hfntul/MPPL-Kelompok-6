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
                    <input type="text" id="eventName" name="eventName" class="form-control" style="width:100%" value="{{$proposal->eventName}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Tanggal Pelaksanaan</strong></label>
                    <input type="text" id="eventTimeHeld" name="eventTimeHeld" class="form-control" style="width:100%" value="{{$proposal->eventTimeHeld}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Kabinet</strong></label>
                    <input type="text" id="kabinet" name="kabinet" class="form-control" style="width:100%" value="{{$proposal->kabinet}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Proposal</strong></label>
                    <input type="text" id="propos" name="propos" class="form-control" style="width:100%" value="{{$proposal->propos}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>LPJ</strong></label>
                    <input type="text" id="lpj" name="lpj" class="form-control" style="width:100%" value="{{$proposal->lpj}}" required>
                  </div>
                  <div class="input-group input-group-outline mb-3" style="display:block">
                    <label><strong>Poster</strong></label>
                    <input type="text" id="poster" name="poster" class="form-control" style="width:100%" value="{{$proposal->poster}}" required>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn my-4 mb-2 simpan">Simpan</button>
                    <a href="{{url('/admin/acara')}}"><button type="button" class="btn my-4 mb-2 batal">Batal</button></a>
                  </div>
                </form>
              </div>
          </div>
         
        </div>
      </div>
</div>

@endsection