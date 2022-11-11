@extends('Index')
@section('content')
<div class="container">
    <div class="row ">
        <div class="col mt-3">
            <div class="album py-5 ">
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <picture>
                                    <img src="{{$data['gambar']}}" class="img-fluid " alt="">
                                </picture>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <b class="card-text">{{$data['jenis_kamar']}}</b>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="/room/roomdetail" class="btn btn-sm btn-outline-secondary">detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection