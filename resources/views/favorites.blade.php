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
                        {{ $subject->name }}
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
            Topics
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user()->favorite(\App\Topic::class) as $topic)
                <a href="/topics/{{ $topic->id }}" class="list-group-item list-group-item-action clearfix">
                    <div class="pull-left">
                        {{ $topic->name }}
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
            Subtopics
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user()->favorite(\App\Subtopic::class) as $subtopic)
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
            Lessons
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user()->favorite(\App\Lesson::class) as $lesson)
                <a href="/lessons/{{ $lesson->id }}" class="list-group-item list-group-item-action clearfix">
                    <div class="pull-left">
                        {{ $lesson->name }}
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
            Notes
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach (Auth::user()->favorite(\App\Note::class) as $note)
                <a href="/notes/{{ $note->id }}" class="list-group-item list-group-item-action clearfix">
                    <div class="pull-left">
                        {{ $note->name }}
                    </div>
                    <div class="pull-right">
                        <i class="fa fa-fw fa-caret-right"></i>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>
</div>
@endsection
