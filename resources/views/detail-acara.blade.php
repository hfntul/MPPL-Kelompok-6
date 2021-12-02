@extends('app')

@section('title')
    Acara
@endsection

@section('content')

<div class="container-fluid ps-md-0">
    <div class="detail-acara">
        <h1 class="keg" style="margin-left:0">{{$detailProp->eventName}}</h1>
        <table>
            <tr>
                <th rowspan="3"><img src="{{$detailProp->poster}}" style="max-width: 380px; max-height: 460px; margin-top:1%" alt="Card image cap"></th>
                <td><label>Kabinet: {{$detailProp->kabinet}} </label></td>
            </tr>
            <tr>
                <td ><label>Tanggal Pelaksanaan: {{$detailProp->eventTimeHeld}} </label></td>
            </tr>
            <tr>
                <td rowspan="3">
                    <div class="box-file">
                        <p><strong>Proposal</strong></p>
                        <a href="{{$detailProp->propos}}" target="_blank" style="font-weight:normal"><i class="fa fa-eye" style="margin-right:10px"></i>Lihat Dokumen</a>
                    </div>
                    <div class="box-file">
                        <p><strong>LPJ</strong></p>
                        <a href="{{$detailProp->lpj}}" target="_blank" style="font-weight:normal"><i class="fa fa-eye" style="margin-right:10px;"></i>Lihat Dokumen</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
