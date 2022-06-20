@extends('layouts.app')

@section('page-title', $comic['title'])


@section('custom-css')
    <link rel="stylesheet" href="{{ asset('css/comic_show.css') }}">
@endsection

@section('content')
    <div class="hero"></div>
    <div class="primary_block"></div>
    <div class="container p-relative">
        <div class="thumb">
            <div class="text_top">comic book</div>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
            <div class="text_bottom">view gallery</div>
        </div>
    </div>
    <section class="comic">

        <div class="comic_top py-5">
            <div class="container">
                <div class="metadata d-flex">
                    <div class="details flex-grow-1 py-4 pe-5">
                        <h2 class="text-uppercase">{{ $comic['title'] }}</h2>
                        <div class="info mt-4 mb-3 d-flex justify-content-between align-items-center">
                            <div class="price">
                                <span class="light">U.S. Price:</span>
                                <span>{{ $comic['price'] }}</span>
                            </div>
                            <div class="availability d-flex align-items-center">
                                <div class="text-uppercase light">Availability</div>
                                <button>Check Availability <i class="fa fa-chevron-down"></i></button>
                            </div>
                        </div>
                        <p class="description">
                            {{ $comic['description'] }}
                        </p>
                    </div>
                    <div class="advertisement flex-shrink-0">
                        <h6 class="text-uppercase text-end">advertisement</h6>
                        <img src="{{ asset('img/adv.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="comic_bottom">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="col">
                        <h4>Talent</h4>
                        <div class="artists d-flex align-items-baseline">
                            <div class="key">Art by:</div>
                            <div class="values">
                                @forelse ($comic['artists'] as $artist)
                                    <a href="#" class="value">{{ $artist }}</a>
                                @empty
                                    N/A
                                @endforelse
                            </div>
                        </div>
                        <div class="writers d-flex align-items-baseline">
                            <div class="key">Written by:</div>
                            <div class="values">
                                @forelse ($comic['writers'] as $writer)
                                    <a href="#" class="value">{{ $writer }}</a>
                                @empty
                                    N/A
                                @endforelse
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <h4>Specs</h4>
                        <div class="series d-flex align-items-center">
                            <div class="key">Series:</div>
                            <div class="values">
                                <a href="#" class="value text-uppercase">{{ $comic['series'] }}</a>
                            </div>
                        </div>
                        <div class="price d-flex align-items-center">
                            <div class="key">U.S. Price:</div>
                            <div class="values">
                                <span class="value">{{ $comic['price'] }}</span>
                            </div>
                        </div>
                        <div class="sale_date d-flex align-items-center">
                            <div class="key">Pn Sale Date:</div>
                            <div class="values">
                                <span
                                    class="value">{{ DateTime::createFromFormat('Y-d-m', $comic['sale_date'])->format('M d Y') }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </section>
    @include('partials.banner')
@endsection
