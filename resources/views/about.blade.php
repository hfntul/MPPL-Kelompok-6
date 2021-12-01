@extends('app')

@section('title')
    Tentang
@endsection

@section('content')

<div class="container-fluid ps-md-0">
    <div class="row g-0">
        <div class="d-none d-md-flex col-md-4 col-lg-6">
            <img class="images" src="./images/about.png">
        </div>
        <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-10 wlcm">
                            <h1>Koridor</h1>
                            <br>
                            <p class="about">Koridor yang merupakan singkatan dari Koordinasi Mahasiswa,
                                adalah sebuah aplikasi berbasis web sebagai wadah untuk 
                                organisasi mahasiswa untuk saling menginformasikan kegiatan 
                                yang sedang atau akan berlangsung. Sistem ini terdiri dari 
                                dua aktor yaitu admin, dan pengunjung/user. Admin adalah 
                                perwakilan dari pengurus ormawa. Admin dapat mengubah banner 
                                yang berisi informasi kegiatan-kegiatan organisasi, mengunggah 
                                LPJ atau proposal sponsor, serta menghapus LPJ atau proposal 
                                sponsor yang sudah tidak berlaku. Pengunjung atau user merupakan 
                                pihak umum, atau siapa saja bisa mengunjungi web Koridor. User 
                                dapat melihat daftar kegiatan dari ormawa, melihat LPJ atau 
                                proposal sponsor, serta mengunduh LPJ atau proposal sponsor.
                            </p>
                            <br>
                            <div>
                                <table>
                                    <tr>
                                        <th><i class="fa fa-envelope" style="color:#2277BF; font-size:16px"></th>
                                        <td><label>koridoripb@gmail.com</label></td>
                                    </tr>
                                    <tr>
                                        <th><i class="fa fa-phone" style="color:#2277BF; font-size:16px"></th>
                                        <td><label>(425) 555-1212</label></td>
                                    </tr>
                                    <tr>
                                        <th><i class="fa fa-instagram" style="color:#2277BF; font-size:16px"></th>
                                        <td><label>koridoripb</label></td>
                                    </tr>
    
                                </table>
                            </div>
                            
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection