@extends('admin/layouts/main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit User</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->username }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Email</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->email }}">
        </div>
        <div class="mb-3">
            <label for="disabledSelect" class="form-label">Role</label>
            <select name="role" id="disabledSelect" class="form-select">
              <option value="{{ $data->role }}" seleted>{{$data->role}}</option>
              <option value="member">member</option>
              <option value="admin">admin</option>
            </select>
        <div class="mb-3">
            <label for="name" class="form-label">Password</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->password }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $data->no_tlp }}">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection