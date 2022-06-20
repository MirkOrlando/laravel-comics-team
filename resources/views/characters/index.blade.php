@extends('layouts.app')

@section('content')
    <div class="hero"></div>
    <section>
        <div class="container">
            <h2>All Characters - Admin</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Real Name</th>
                        <th>Alterego</th>
                        <th>First Appareance</th>
                        <th>Thumbnail</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($characters as $character)
                    <tr>
                        <td>{{$character->id}}</td>
                        <td>{{$character->common_name}}</td>
                        <td>{{$character->alterego}}</td>
                        <td>{{$character->first_appareance}}</td>
                        <td>
                            <img width="50px" src="{{$character->thumb}}" alt="">    
                        </td>
                        <td>
                            view - edit - delete
                        </td>
                    </tr>
                        
                    @empty
                        
                    <p>No characters to show yet!</p>

                    @endforelse
                </tbody>
            </table>
            
    </section>
@endsection
