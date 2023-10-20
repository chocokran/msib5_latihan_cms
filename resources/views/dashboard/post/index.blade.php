@extends('dashboard.layout.main')
@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post, {{ auth()->user()->name }}</h1>
</div>
<div class="col my-3">
    <div class="card-header">
        <div class="col-md-4"> 
            @if (session()->has('berhasil'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('berhasil') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div> 
            @endif
      <a href="/dashboard/post/create" class="btn btn-sm btn-primary">Tambah</a>
    </div>
</div>
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
      <thead>
        <tr>
          <th widht=10%>No</th>
          <th>Judul</th>
          <th>Date Post</th>
          <th width=15%>Aksi</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($beritas as $item)  
          <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $item->judul }}</td>
              <td>{{ $item->created_at->format('d F Y') }}</td>
              <td>
                  <div class="btn-grup">
                      <a href="/dashboard/post/{{ $item->id }}/edit" class="btn btn-sm btn-info">Edit</a>
                      <form action="/dashboard/post/{{ $item->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</button>
                      </form>
                  </div>
              </td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>
@endsection