@extends('layouts.master')

@section('content')

    
<div>    
<a href="{{ url ('/artikel/create') }}">
<button class="btn btn-success">Bikin Artikel</button>
</a>
</div>  
<br>     
<div class=" card card-primary col-sm-12">
  <div class="card-header">
    <h3 class="card-title">TABEL LIST ARTIKEL</h3>
  </div>
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th>#</th>
        <th>No</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Slug</th>
        <th>Tag</th>
        <th>Penulis</th>
        <th>Dibuat</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($artikel as $key => $data)
        <tr>
          <td>  
          <div class="btn-group">
            <a href="{{ url('/artikel/'.$data->id) }}"><button class="btn btn-sm btn-info"> Show</button>
            </a>
            <a href="{{ url('/artikel/'. $data->id.'/edit') }}"><button class="btn btn-sm btn-warning"> Edit</button>
              </a>
            <form action="{{ url('/artikel/'.$data->id) }}" method="post" style="display: inline">
              @csrf
              @method('DELETE')
            <button class="btn btn-sm btn-danger" type="submit"> <I class="fas fa-trash"></I></button>
            </form>
          </div>
        </td>    
          <td> {{ $key+1 }} </td>   
            <td> {{ $data->judul }} </td>
            <td> {{ $data->img }} </td>
            <td>  {{ $data->slug }} </td>
            <td>  {{ $data->tag }} </td>
            <td>  {{ $data->id_penulis }} </td>
            <td>  {{ $data->created_at }} </td>
            <td>  {{ $data->updated_at }} </td>
        </tr> 
        @endforeach
    </tbody>
  </table>   
</div>
@endsection
@push('script')
<script>
  Swal.fire({
      title: 'Berhasil!',
      text: 'Memasangkan script sweet alert',
      icon: 'success',
      confirmButtonText: 'Cool'
  })
</script>
@endpush