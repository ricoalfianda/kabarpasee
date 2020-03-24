@extends('admin/index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Artikel</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Article</li>
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
        <h3 class="card-title">Data Artikel</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <a href="/admin/article/add_article" class="btn btn-success">Tambah</a>
        <div>
          <br>
        </div>
        <table id="example1" class="table table-bordered table-striped">
          <thead>

          <tr>
            <th><center>No</th>
            <th><center>Gambar</th>
            <th><center>Judul</th>
            <th><center>Kategori</th>
            <th><center>Penulis</th>
            <th><center>Created at</th>
            <th><center>Aksi</th>
          </tr>

          </thead>
          <tbody>
        @foreach($articles as $index => $ar)
          <tr>
            <td><center>{{$index+1}}</td>
            <td><center><img src="{{asset('article/'.$ar->picture)}}"width='50' height='50'></td>
            <td><center>{{$ar->title}}</td>
            <td><center>{{$ar->category}}</td>
            <td><center>{{$ar->name}}</td>
            <td><center>{{$ar->created_at}}</td>
            <td>
              <center>
              <a href="{{url('/admin/article/'.$ar->id.'/edit_article')}}" class="btn btn-primary">Edit</a>
              <form class="" action="{{url('/admin/article/'.$ar->id.'/delete_article')}}" method="post" style="display:inline">
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
