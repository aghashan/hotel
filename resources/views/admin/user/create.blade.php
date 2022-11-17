@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah User</h1>
</div>

<div class="col-lg-8">
    @if(session('error'))
    <div class="alert alert-danger">
        @foreach(session('error') as $error )
        <p>{{$error}}</p>
        @endforeach
    </div>
    @endif
    <form method="post" action="/secret/admin/usermanage/create">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="username">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Email</label>
            <input type="text" class="form-control" id="name" name="email">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Password</label>
            <input type="text" class="form-control" id="name" name="password">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="name" name="no_tlp">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection