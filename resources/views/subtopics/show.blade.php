@extends('spark::layouts.app')

@section('navigation')
<li class="nav-item">
    <a class="nav-link" href="/topics/{{ $subtopic->topic->id }}">
        <i class="fa fa-nav fa-fw fa-btn fa-arrow-left"></i>
        {{ $subtopic->topic->name }}
    </a>
</li>
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            {{ $subtopic->name }}
        </div>
        <div class="pull-right">
            <a href="/subtopics/{{ $subtopic->id }}/favorite">
                <i class="{{ $subtopic->favoritedBy()->contains(Auth::user()) ? 'fas' : 'far' }} fa-fw fa-star"></i> {{ $subtopic->favoritedBy()->contains(Auth::user()) ? "Unfavorite" : "Favorite" }}
            </a>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($subtopic->lessons as $lesson)
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
@stop
