@extends('admin/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Special Over</h1>
    </div>

    <div class="col-lg-8">
    <form method="post" action="/admin/room">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">isi</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="formFile">
          </div>
      <button type="submit" class="btn btn-primary">Tambah</button>
    </form>  
  </div> 
  @endsection