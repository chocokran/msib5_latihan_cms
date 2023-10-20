@extends('dashboard.layout.main')

@section('konten')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Post</h1>
</div>
<div class="col-lg-9">
    <form method="post" action="/dashboard/post/{{ $berita->id }}">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $berita->judul }}" required>
        </div>
        
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input id="body" type="hidden" name="body" value="{{ $berita->body }}">
            <trix-editor input="body"></trix-editor>
        </div>
        {{-- <div class="mb-3">
            <label for="cover" class="form-label">Cover</label>
            <input type="text" class="form-control" id="cover" name="cover" value="{{ $buku->cover }}" required>
        </div> --}}
        {{-- <div class="mb-3">
            <label class="form-label" for="cover">Upload Cover</label>
            <input type="file" class="form-control" name="cover" id="cover">
        </div> --}}
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>


@endsection