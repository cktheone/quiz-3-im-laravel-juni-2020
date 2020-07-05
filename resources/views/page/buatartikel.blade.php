@extends('layouts.master')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">FORM ARTIKEL</h3>
    </div>
<form action="{{ url('/artikel') }}" method="POST">
 @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="exampleInputEmail1">Judul Artikel</label>
      <input type="text" class="form-control" name="judul" placeholder=" Judul artikel">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Isi artikel</label>
      <textarea class="form-control" rows="5" name="isi" placeholder="Enter ..."></textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Judul Artikel</label>
        <input type="text" class="form-control" name="img" placeholder=" link Gambar">
      </div>
    {{-- <div class="form-group">
        <label for="exampleInputFile">Gambar</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
          <div class="input-group-append">
            <span class="input-group-text" id="">Upload</span>
          </div>
        </div>
      </div> --}}
      <div class="form-group">
        <label for="exampleInputEmail1">Slug</label>
        <input type="text" class="form-control" name="slug">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">#Tag</label>
        <input type="text" class="form-control" name="tag">
      </div>
    <input hidden name="like" value=1>
    <input hidden name="id_penulis" value=1>
    
    {{-- <div class="form-group">
            <label>Penulis</label>
            <select class="form-control">
              <option name="id_penulis" value=1>Maulaya</option>
              <option name="id_penulis" value=2>Novi</option>
            </select>
      </div> --}}
    <input hidden name="created_at" value="{{ \Carbon\Carbon::now() }}">
    <input hidden name="updated_at" value="{{ \Carbon\Carbon::now() }}">
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>

@endsection