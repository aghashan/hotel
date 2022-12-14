@extends('admin/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Special Over</h1>
    </div>

    <div class="col-lg-8">
    <form method="post" action="/secret/admin/special/create" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="deskripsi" class="form-label">isi</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="image" name="image">
          </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>  
  </div> 
  @endsection