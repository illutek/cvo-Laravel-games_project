@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="page-header">
        <h1>All Games
            <small>Gotta catch 'em all'</small>
        </h1>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="{{ route('games.create') }}" class="btn btn-primary">Create New Game</a>
        </div>
    </div>
        <table class="table table-striped">
            <thead>
            <thead>

            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Publisher</th>
                <th>Complete</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{ $game->id }}</td>
                    <td>{{ $game->title }}</td>
                    <td>{{ $game->publisher }}</td>
                    <td>{{ $game->complete ? 'Yes' : 'No' }}</td>
                    <td>
                        <a href="{{ route('games.show', $game->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('games.update', $game->id) }}" class="btn btn-default">Edit</a>
                </tr>
            @endforeach
            </tbody>
        </table>
    {{--Pagination tonen het aantal items wordt op de Controller page verzorgt--}}
    <div class="text-center">{!! $games->links() !!}</div>
@endsection
