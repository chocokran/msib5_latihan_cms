@extends('layout.main')

@section('content')
    <h1 class="text-center">Berita Terbaru</h1>
    <div class="container">
        <div class="row">
            @foreach ( $beritas as $item )
                
            <div class="col-md-4 py-2">
                <div class="card h-100 d-flex flex-column" style="width: 22rem;">
                    <img src="https://source.unsplash.com/500x300/?news" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text"><small class="text-muted">By <a href="#" class="text-decoration-none">{{ $item->user->name }}</a></small></p>
                        <p class="card-text">{{ $item->describe }}</p>
                        <p class="card-text"><small class="text-muted">{{ $item->created_at->diffForHumans() }}</small></p>
                        <a href="/detail/{{ $item["judul"] }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection