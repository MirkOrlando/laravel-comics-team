@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="top d-flex justify-content-between align-items-center">
            <h1>All Comics</h1>
            <div class="action">
                <div class="btn btn-primary">New Comic</div>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-success mt-2">
                {{ session('message') }}
            </div>
        @endif
        <table class="table table-striped table-inverse">
            <thead class="thead-inverse">
                <tr>
                    <th>ID</th>
                    <th>title</th>
                    <th>Thumb</th>
                    <th>Price</th>
                    <th>Sale Date</th>
                    <th>Series</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td><img width="50px" src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td></td>
                        <td>
                            View - Edit - Delete
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td scope="row">Nothing to show</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
