@extends('admin/index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Iklan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Advertisement</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Masukkan Iklan</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form  action="{{ url('/category/create') }}" method="post">
              {{ csrf_field() }}
              <label for="">Judul</label>
              <input type="text" class="form-control" name="title" placeholder="Judul" value="">
              <br>
              <label for="">Deskripsi</label>
                <textarea class="textarea" placeholder="Masukkan deskripsi"></textarea>
              <br>
              <a class="btn btn-danger" href="/admin/advertisement">Back</a>
              <input type="submit" class="btn btn-success" name="" value="Submit">
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
