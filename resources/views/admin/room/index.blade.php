@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Room</h1>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
  <a href="/secret/admin/room/edit" class="btn btn-primary me-md-2" type="button">Tambah</a>

</div>
<div class="table-responsive">
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">Room Name</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Jenis Kamar</th>
        <th scope="col">Harga</th>
        <th scope="col">Kapasitas</th>
        <th scope="col">Gambar</th>
        <th scope="col">Bed</th>
        <th scope="col">Status</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      @foreach($data as $d)
      <tr>
        <td>{{$d['room_name']}}</td>
        <td>{{$d['deskripsi']}}</td>
        <td>{{$d['jenis_kamar']}}</td>
        <td>{{$d['harga']}}</td>
        <td>{{$d['kapasitas']}}</td>
        <td>{{$d['']}}</td>
        <td>{{$d['bed']}}</td>
        <td>{{$d['status']}}</td>
        <td>
          <a href="/secret/admin/room/edit" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
          <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection