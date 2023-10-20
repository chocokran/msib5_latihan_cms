@extends('layout.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">{{ $detail->judul }}</h1>
            <img src="https://source.unsplash.com/1200x400/?news" alt="" class="img-fluid my-3">
            <p class="card-text">By <a href="#" class="text-decoration-none">{{ $detail->user->name }}</a></p>
            <p class="card-text"><small class="text-muted">{{ $detail->created_at->diffForHumans() }}</small></p>
            <article>
                {!! $detail->body !!}
            </article>
            <a href="/" class="btn btn-danger mb-3">Kembali</a>
        </div>
    </div>
@endsection