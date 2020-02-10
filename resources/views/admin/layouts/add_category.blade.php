@extends('admin/index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Kategori</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Masukkan Kategori</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form  action="{{ url('/admin/category/add_category') }}" method="post">
              {{ csrf_field() }}
              <label for="exampleInputEmail1">Nama Kategori</label>
              <input type="text" class="form-control" name="category" placeholder="Nama Kategori" value="">
              <!--<br>
              <label for="exampleInputEmail1">Deskripsi</label>
              <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="">
              -->
              <br>
              <a class="btn btn-danger" href="/admin/category">Back</a>
              <input type="submit" class="btn btn-success" value="Submit">
            </form>
          </div>

          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
@endsection
