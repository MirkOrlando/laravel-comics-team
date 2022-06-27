@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create a new Comic</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{-- {{ route('admin.comics.store') }} --}}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="@error('title') is-invalid @enderror form-control"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" class="@error('description') is-invalid @enderror form-control"
                    rows="4">
        {{ old('description') }}
        </textarea>

            </div>
            <div class="form-group">
                <label for="thumb">Thumb</label>
                <input type="text" name="thumb" id="thumb"
                    class="@error('thumb') is-invalid @enderror form-control" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" min="0" max="99.99" class="form-control" name="price" id="price"
                    aria-describedby="priceHelper" placeholder="12.99">
                <small id="priceHelper" class="form-text text-muted">Add Comic price (min 0 $ max 99.99$)</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="dateHelper"
                    placeholder="27/06/2022">
                <small id="dateHelper" class="form-text text-muted">Add Comic sale date</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label ">Type</label>
                <select class=" @error('type') is-invalid @enderror form-control " name="type" id="type">
                    <option value="">Seleziona una tipologia</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-danger mt-2 text-light">Add Post</button>
        </form>
    </div>
@endsection
