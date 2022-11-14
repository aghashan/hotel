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
                <th scope="col">No</th>
                <th scope="col">Room Name</th>
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
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>w</td>
                <td>a</td>
                <td>a</td>
                <td>q</td>
                <td>
                  <a href="/secret/admin/room/edit" class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                  <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>w</td>
                <td>a</td>
                <td>a</td>
                <td>q</td>
                <td>p</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>Thornton</td>
                <td>@twitter</td>
                <td>w</td>
                <td>a</td>
                <td>a</td>
                <td>q</td>
                <td>p</td>
              </tr>
            </tbody>
          </table>
          </div>
          @endsection