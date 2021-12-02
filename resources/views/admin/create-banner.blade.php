@extends('admin.admin-master')


@section('title')
    Banner
@endsection

@section('admin-content')
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class=" border-radius-lg pt-4 pb-3" style="background-color:#2277BF">
                <h6 class="text-white text-capitalize ps-3">Create Banner</h6>
              </div>
            </div>
            <div class="card-body">
                <form action="{{action('AdminsControllers@createBanner')}}" method="POST" class="text-start">
                {{csrf_field()}}
                  <div class="input-group input-group-outline my-3" style="display:block">
                    <label>Deskripsi</label>
                    <input type="text" id="link" name="link" class="form-control" style="width:100%">
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