@extends('layouts.main')

@section('title', 'Create')

@section('content')
    <div class="page-header">
        <h1>Edit game <small>and someday finish it ...</small>
        </h1>
    </div>
    {{--games.store is de naam van de route zie bij web.php--}}
    {!! Form::model($game, ['route'=>['games.update', $game->id], 'method'=>'POST']) !!}
    @include('includes._form', ['btnText'=>'Edit'])
    {!! Form::close() !!}
@endsection