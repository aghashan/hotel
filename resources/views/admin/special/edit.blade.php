@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Special Over</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">isi</label>
      <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{$data->deskripsi}}">
    </div>
    <div class="mb-3">
      <label for="formFile" class="form-label">Gambar</label> <br>
      <img src="{{asset('/storage/'.$data->image)}}" alt="" class="img-thumbnail img-responsive mb-2" width="500" height="100">
      <input class="form-control" type="file" id="formFile" id="image" name="image">
    </div>
    <button type="submit" class="btn btn-primary">edit</button>
  </form>
</div>
@endsection