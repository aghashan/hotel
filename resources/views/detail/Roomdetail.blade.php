@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 mt-5">
            <img src="{{$data['gambar']}}" alt="duluxe room" loading="lazy" style="width:100%;" >
        </div>
        <div class="col-6 mt-5">
            <div>
                <h3>{{$data['jenis_kamar']}}</h3>
            </div>
            <div class="mb-3">
            {{$data['deskripsi']}}
            </div>
            <b>ROOM DETAILS :</b>
            <table class="mt-3">
                <tr style="height:50px;">
                    <td width="28%">Bed Type</td>
                    <td width="2%">:</td>
                    <td width="70%">{{$data['bed']}}</td>
                </tr>
                <tr style="height:50px;">
                    <td width="28%">Number of Rooms</td>
                    <td width="2%">:</td>
                    <td width="70%">{{$data['no_room']}}</td>
                </tr>
                <tr style="height:50px;">
                    <td width="28%">Max. Occupancy</td>
                    <td width="2%">:</td>
                    <td width="70%">{{$data['kapasitas']}}</td>
                </tr>
                <tr style="height:50px;">
                    <td width="28%">Price</td>
                    <td width="2%">:</td>
                    <td width="70%">{{$data['harga']}}</td>
                </tr>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-5">
                <button class="btn btn-primary" type="button">BOOK NOW!</button>
            </div>
        </div>
    </div>
</div>
@endsection