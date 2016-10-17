@extends('layouts.main')

@section('title', 'Create')

@section('content')
    <div class="page-header">
        <h1>Create Game
            <small>and someday finish it ...</small>
        </h1>
    </div>
    {{--games.store is de naam van de route zie bij web.php--}}
    {!! Form::open(['route'=>'games.store', 'method'=>'POST']) !!}
    @include('includes._form', ['btnText'=>'Save'])
    {!! Form::close() !!}
@endsection