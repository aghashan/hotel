@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Room</h1>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
  <a href="/secret/admin/room/create" class="btn btn-success me-md-2" type="button"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<div class="table-responsive">
  <div class="overflow-auto" style="width:1300px;">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">Room Name</th>
          <th scope="col">No room</th>
          <th scope="col">Deskripsi</th>
          <th scope="col">Jenis Kamar</th>
          <th scope="col">Harga</th>
          <th scope="col">Kapasitas</th>
          <th scope="col">Gambar</th>
          <th scope="col">Bed</th>
          <th scope="col">Total kamar</th>
          <th scope="col">Status</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>

          <td>{{$d['room_name']}}</td>
          <td>{{$d['no_room']}}</td>
          <td>{!!Str::limit($d['deskripsi'],30)!!}</td>
          <td>{{$d['jenis_kamar']}}</td>
          <td>{{$d['harga']}}</td>
          <td>{{$d['kapasitas']}}</td>
          <td> <img src="{{asset('/storage/'.$d['gambar'])}}" alt="" width="100px"> </td>
          <td>{{$d['bed']}}</td>
          <td>{{$d['total_room']}}</td>
          <td>{{$d['status']}}</td>
          <td>
            <a href="/secret/admin/room/edit" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
            <form action="/secret/admin/room/delete/{{$d['id']}}" method="post">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection