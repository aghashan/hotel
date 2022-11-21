@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Special</h1>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
    <a href="/secret/admin/special/create" class="btn btn-success me-md-2" type="button"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Gambar</th>
      <th scope="col">Isi</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $d)
    <tr>
      <td>
        <img src="{{asset('/storage/'.$d->image)}}" alt="" class="img-thumbnail img-responsive" width="100" height="50">
      </td>
      <td>{{ $d['deskripsi'] }}</td>
      <td>
        <a href="/secret/admin/special/edit" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection