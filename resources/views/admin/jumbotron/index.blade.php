@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Jumbotron</h1>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
  <a href="/secret/admin/jumbotron/create" class="btn btn-success me-md-2" type="button"><i class="fa-solid fa-plus"></i> Tambah</a>
</div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" class="text-center">Gambar</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $d)
    <tr>
      <td><img src="" alt="" class="img-thumbnail img-responsive" width="100" height="50"></td>
      <td>
        p
        <a href="/secret/admin/jumbotron/edit" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
        <form action="/secret/admin/jumbotron/delete/{{$d['id']}}" method="post">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection