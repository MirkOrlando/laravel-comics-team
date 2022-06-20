@extends('layouts.app')

@section('content')
    <div class="hero"></div>
    <section>
        <img src="{{$character->thumb}}" alt="">
        <div class="text">
            <div><strong>Common Name: </strong>{{$character->common_name}}</div>
            <div><strong>Alterego: </strong>{{$character->alterego}}</div>
            <div><strong>Bio: </strong>{{$character->bio}}</div>
            <div><strong>Powers: </strong>{{$character->powers}}</div>
        </div>
        <!-- /.text -->
            
    </section>
@endsection
