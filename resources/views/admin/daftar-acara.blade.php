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
                <h6 class="text-white text-capitalize ps-3">Daftar Acara</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr style="color:#2D7DC2">
                      <th class="text-center font-weight-bolder">Judul</th>
                      <th class="text-center font-weight-bolder">Tanggal Pelaksanaan</th>
                      <th class="text-center font-weight-bolder">Proposal</th>
                      <th class="text-center font-weight-bolder">LPJ</th>
                      <th class="text-center font-weight-bolder">Poster</th>
                      <th class="text-center font-weight-bolder">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <h6 class="mb-0 text-sm text-center" style="color:#2277BF; font-weight:normal">
                            Seminar Nasional
                        </h6>
                      </td>

                      <td>
                        <h6 class="mb-0 text-sm text-center" style="color:#2277BF; font-weight:normal">
                            20 Oktober 2021
                        </h6>
                      </td>

                      <td class="align-middle text-center text-sm">
                        <h6 class="mb-0 text-sm text-center" style="color:#2277BF">
                            <i class="fa fa-check"></i>
                        </h6>
                      </td>

                      <td class="align-middle text-center">
                        <h6 class="mb-0 text-sm text-center" style="color:#2277BF">
                            <i class="fa fa-times"></i>
                        </h6>
                      </td>

                      <td class="align-middle text-center">
                        <h6 class="mb-0 text-sm text-center" style="color:#2277BF">
                            <i class="fa fa-check"></i>
                        </h6>
                      </td>

                      <td class="align-middle text-center">
                        <h6 class="mb-0 text-sm text-center" style="color:#2277BF">
                            <a class="edit" href="{{url('/admin/edit-acara')}}"><i class="fas fa-edit"></i></a>
                            <a class="delete" href="#"><i class="fas fa-trash-alt"></i></a>                            
                        </h6>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection