@extends('layouts.app')
@section('meta', 'Movies')

@section('content')
    <section class="card-container">
        @foreach ($movies as $movie)
                <div class="card">
                    <div class="layover"></div>
                    <div class="card-content">
                        <h4>
                            Titolo: 
                        </h4>
                        <span>{{ $movie->title }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Titolo Originale: 
                        </h4>
                        <span>{{ $movie->original_title }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Nazionalità: 
                        </h4>
                        <span>{{ $movie->nationality }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Data: 
                        </h4>
                        <span>{{ $movie->date }}</span>
                    </div>
                    <div class="card-content">
                        <h4>
                            Voto: 
                        </h4>
                        <span>{{ $movie->vote }}</span>
                    </div>
                </div>
        @endforeach
    </section>
@endsection