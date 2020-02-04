@extends('admin/index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Komentar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Comment</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Data Komentar</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>

          <tr>
            <th><center>No</th>
            <th><center>Nama</th>
            <th><center>Email</th>
            <th><center>Judul</th>
            <th><center>Komentar</th>
            <th><center>Created at</th>
            <th><center>Aksi</th>
          </tr>

          </thead>
          <tbody>
          <tr>
            <td><center>1</td>
            <td><center>Rico Alfianda</td>
            <td><center>ricoalfianda11@gmail.com</td>
            <td><center>Virus Corona Menyusup Ke Aceh</td>
            <td><center>Ini Hoaaax!</td>
            <td><center>29-Jan-20</td>
            <td>
              <center>
              <a href="#" class="btn btn-success">Lihat</a>
              <a href="#" class="btn btn-danger">Hapus</a>
            </center>
            </td>
          </tr>

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

  </section>
  <!-- /.content -->
</div>
@endsection
