@extends('admin/layouts/main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Jumbotron</h1>
    </div>
    <div class="col-lg-3">
        <form method="room" action="/admin/room">
            @csrf
            <div class="mb-3">
              <label for="formFile" class="form-label">Gambar</label>
              <input class="form-control" type="file" id="formFile">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
      </form>  
    </div> 
    @endsection