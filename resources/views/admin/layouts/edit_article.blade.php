@extends('admin/index')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Artikel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Article</li>
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
            <h3 class="card-title">Edit Artikel</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="{{ url('/admin/article/'.$articles->id.'/edit_article') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('put') }}
              <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="title" placeholder="Judul" value="{{$articles->title}}">
              </div>

              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control" name="category_id">
                  <option>-Pilih Kategori-</option>
                  @foreach ($categories as $index => $kt)
                    <option value="{{ $kt->id }}" {{ $articles->category_id == $kt->id ? 'selected' : '' }}>{{ $kt->category }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Gambar Thumbnail</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="picture" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Pilih Gambar</label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="">Artikel</label>
                  <textarea name="article" class="textarea" rows="5">{{ $articles->article }}</textarea>
              </div>

              <a class="btn btn-danger" href="/admin/article">Back</a>
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
