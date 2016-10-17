@extends('layouts.main')

@section('title', 'Create')

@section('content')
    <div class="page-header">
        <h1>Game Title <small> {{ $game->title }}</small></h1>
    </div>
    <div class="row">
        <div class="col-md-8">
            <small>Publisher:</small>
            <p class="lead">{{ $game->publisher }}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{ date('j M, Y H:i', strtotime($game->created_at)) }}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Update At:</dt>
                    <dd>{{ date('j M, Y H:i', strtotime($game->updated_at)) }}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{ route('games.update', $game->id) }}" class="btn btn-default btn-block">Edit</a>
                        {{--{!! Html::linkRoute('games.edit', 'EDIT', array($game->id), array('class' => 'btn btn-primary btn-block')) !!}--}}
                    </div>
                    <div class="col-md-6">
                        {!! Form::open(['route'=>['games.destroy', $game->id], 'method' =>'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {{--{!! Html::linkRoute('games.destroy', 'DELETE', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}--}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
            {{--end .well--}}
        </div>
        {{--end .col-md-4--}}
    </div>
@endsection
