@extends('layouts.app')

@section('content')
    <div class="container">
        @forelse($movies->chunk(4) as $movieSubset)
            <div class="row">
                @foreach($movieSubset as $movie)
                    <div class="col-md-3">
                        <div class="card mt-5">
                            <div class="card-block">
                                <h4 class="card-title">{{ $movie->title }}</h4>
                                <p class="card-text">{{ $movie->description }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Duration: {{ date('G', mktime(0, $movie->duration)) }}h {{ date('i', mktime(0, $movie->duration)) }}min</li>
                                <li class="list-group-item">Release date: {{ $movie->released_at->format('d.m.Y') }}</li>
                            </ul>
                            @if (Auth::check())
                                @if(Auth::user()->hasSeen($movie))
                                    <div class="card-block">
                                        <a href="{{ route('movies.unwatch', $movie->id) }}" class="card-link">Mark as not watched</a>
                                    </div>
                                @else
                                    <div class="card-block">
                                        <a href="{{ route('movies.watch', $movie->id) }}" class="card-link">Mark as watched</a>
                                    </div>
                                @endif
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @empty
            <div class="row">
                <div class="col-md-12">
                    <p class="lead">
                        There are no movies yet. Have you ran <code>php artisan db:seed</code>?
                    </p>
                </div>
            </div>
        @endforelse
    </div>
@endsection
