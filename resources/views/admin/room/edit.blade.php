@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Room</h1>
</div>

<div class="col-lg-8">

  <form method="post" action="" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Room Name</label>
      <input type="text" class="form-control" id="room_name" name="room_name" value="{{$data->room_name}}">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">No room</label>
      <input type="text" class="form-control" id="no_room" name="no_room" value="{{$data->no_room}}">
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Jenis kamar</label>
      <input type="text" class="form-control" id="jenis_kamar" name="jenis_kamar" value="{{$data->jenis_kamar}}">
    </div>
    <div class="mb-3">
      <label for="kamar" class="form-label">Total kamar</label>
      <input type="text" class="form-control" id="total_room" name="total_room" value="{{$data->total_room}}">
    </div>
    <div class="mb-3">
      <label for="harga" class="form-label">Harga</label>
      <input type="text" class="form-control" id="harga" name="harga" value="{{$data->harga}}">
    </div>
    <div class="mb-3">
      <label for="kapasitas" class="form-label">Kapasitas</label>
      <input type="text" class="form-control" id="kapasitas" name="kapasitas" value="{{$data->kapasitas}}">
    </div>
    <div class="mb-3">
      <label for="bed" class="form-label">Bed</label>
      <input type="text" class="form-control" id="bed" name="bed" value="{{$data->bed}}">
    </div>
    <div class="mb-3">
      <label for="bed" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$data->deskripsi}}">
    </div>
    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <input type="text" class="form-control" id="status" name="status" value="{{$data->status}}">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Gambar</label> </br>
      <img src="{{asset('/storage/'.$data->gambar)}}" alt="" class="img-thumbnail img-responsive" width="500" height="100">
      <input class="form-control" type="file" id="image" name="gambar">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</div>
@endsection