@extends('layouts.app')

@section('content')
    <div class="hero"></div>
    <section class="comics">
        <div class="container">
            <h2>Current series</h2>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6">
                @foreach ($comics as $index => $comic)
                    <div class="col">
                        <a href="{{ route('comics.show', $index) }}">
                            <div class="comic-card">
                                <div class="comic-cover">
                                    <img class="img-fluid" src="{{ $comic['thumb'] }}"
                                        alt="{{ $comic['title'] }}" />
                                </div>
                                <div class="comic-title">{{ $comic['series'] }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="actions">
                <a href="" class="btn-primary">Load more</a>
            </div>
        </div>
    </section>
    @include('partials.banner')
@endsection
