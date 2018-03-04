@extends('spark::layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Your Favorites
        </div>
    </div>
</div>

<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Subjects
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user()->favorite(\App\Subject::class) as $subject)
                <a href="/subjects/{{ $subject->id }}" class="list-group-item list-group-item-action clearfix">
                    <div class="pull-left">
                        {{ $subtopic->name }}
                    </div>
                    <div class="pull-right">
                        <a href="/subjects/{{$subject->id}}/favorite">
                            
                        <i class="fa fa-fw fa-caret-right"></i>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>
</div>

<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Your Favorites
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user as $subtopic)
                <a href="/subtopics/{{ $subtopic->id }}" class="list-group-item list-group-item-action clearfix">
                    <div class="pull-left">
                        {{ $subtopic->name }}
                    </div>
                    <div class="pull-right">
                        <i class="fa fa-fw fa-caret-right"></i>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>
</div>

<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Your Favorites
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user as $subtopic)
                <a href="/subtopics/{{ $subtopic->id }}" class="list-group-item list-group-item-action clearfix">
                    <div class="pull-left">
                        {{ $subtopic->name }}
                    </div>
                    <div class="pull-right">
                        <i class="fa fa-fw fa-caret-right"></i>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>
</div>

<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Your Favorites
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user as $subtopic)
                <a href="/subtopics/{{ $subtopic->id }}" class="list-group-item list-group-item-action clearfix">
                    <div class="pull-left">
                        {{ $subtopic->name }}
                    </div>
                    <div class="pull-right">
                        <i class="fa fa-fw fa-caret-right"></i>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>
</div>
@stop
