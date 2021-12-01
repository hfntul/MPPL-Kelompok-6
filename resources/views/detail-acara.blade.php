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
                <th rowspan="2"><img src="/images/poster.png" style="max-width: 380px; max-height: 460px; margin-top:1%" alt="Card image cap"></th>
                <td><label>Tanggal Pelaksanaan: {{$detailProp->eventTimeHeld}} </label></td>
            </tr>
            <tr>
                <td rowspan="2">
                    <div class="box-file">
                        <p>Proposal (pdf)</p>
                        <a href="#"><i class="fa fa-download" style="margin-right:10px"></i>Download</a>
                    </div>
                    <div class="box-file">
                        <p>LPJ (pdf)</p>
                        <a href="#"><i class="fa fa-download" style="margin-right:10px"></i>Download</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
