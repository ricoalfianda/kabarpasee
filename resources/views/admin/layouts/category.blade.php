@extends('admin/index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">{{$title}}</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
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
        <h3 class="card-title">Data Kategori</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <a href="{{url('/admin/category/add_category')}}" class="btn btn-success">Tambah</a>
        <div>
          <br>
        </div>
        <table id="example1" class="table table-bordered table-striped">
          <thead>

          <tr>
            <th><center>No</th>
            <th><center>Kategori</th>
            <th><center>Created at</th>
            <th><center>Aksi</th>
          </tr>

          </thead>
          <tbody>
        @foreach ($categories as $index => $kt)
          <tr>
            <td><center>{{$index+1}}</td>
            <td><center>{{$kt->category}}</td>
            <td><center>{{$kt->created_at}}</td>
            <td>
              <center>
              <a href="{{url('/admin/category/'.$kt->id.'/edit_category')}}" class="btn btn-primary">Edit</a>
              <form class="" action="{{url('/admin/category/'.$kt->id.'/delete_category')}}" method="post" style="display:inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="submit" class="btn btn-danger" name="" value="Delete">
              </form>
            </center>
            </td>
          </tr>
        @endforeach

          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>

  </section>
  <!-- /.content -->
</div>
@endsection
