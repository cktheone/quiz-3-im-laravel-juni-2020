@extends('layouts.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">EDIT ARTIKEL</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('/artikel/'.$pilihartikel->id) }}" method="POST">
        @csrf
        @method('PUT')
       <div class="card-body">
        <div class="form-group">
          <label>Judul Artikel</label>
          <input type="text" class="form-control" name="judul" value="{{ $pilihartikel->judul }}">
        </div>
        <div class="form-group">
          <label>Isi Artikel</label>
          <textarea class="form-control" rows="5" name="isi">{{ $pilihartikel->isi }}</textarea>
        </div>
        <div class="form-group">
          <label>Gambar</label>
          <input type="text" class="form-control" name="img" value="{{ $pilihartikel->img }}">
        </div>
        <div class="form-group">
          <label>Slug</label>
          <input type="text" class="form-control" name="slug" value="{{ $pilihartikel->slug }}">
        </div>
        <div class="form-group">
          <label>Tag</label>
          <input type="text" class="form-control" name="tag" value="{{ $pilihartikel->tag }}">
        </div>
        <input hidden name="like" value="{{  $pilihartikel->like }}">
        <input hidden name="id_penulis" value="{{  $pilihartikel->id_penulis }}">
        <input hidden name="created_at" value="{{  $pilihartikel->created_at }}">
        <input hidden name="updated_at" value="{{ \Carbon\Carbon::now() }}">
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
 
</div>
@endsection