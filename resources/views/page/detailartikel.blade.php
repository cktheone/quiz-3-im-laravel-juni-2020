@extends('layouts.master')

@section('content')

  
<table class="table table-bordered">
    <thead>                  
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Img</th>
        <th>Slug</th>
        <th>Tag</th>
        <th>Like</th>
        <th>Penulis</th>
        <th>Tgl Dibuat</th>
        <th>Tgl Diupdate</th>
      </tr>
    </thead>
    <tbody>
        <tr>
            <td> {{ $pilihartikel->id }}</td>   
            <td> {{ $pilihartikel->judul }}</td>
            <td> {{ $pilihartikel->isi }}</td>
            <td> {{ $pilihartikel->img }}</td>
            <td> {{ $pilihartikel->slug }}</td>
            <td> {{ $pilihartikel->tag }}</td>
            <td> {{ $pilihartikel->like }}</td>
            <td> {{ $pilihartikel->id_penulis }}</td>
            <td> {{ $pilihartikel->created_at }} </td>
            <td> {{ $pilihartikel->updated_at }}</td>
        </tr> 
   </tbody>
  </table>
</div> 
</div>
 
  <a href="{{ url ('/artikel') }}">
  <button class="btn btn-success">Kembali</button>
  </a>

@endsection