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
                    @forelse ($characters as $item)
                    <tr>
                        <td>{{$characters->id}}</td>
                        <td>{{$characters->common_name}}</td>
                        <td>{{$characters->alterego}}</td>
                        <td>{{$characters->first_appareance}}</td>
                        <td>{{$characters->thumb}}</td>
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
