@extends('spark::layouts.app')

@section('navigation')
<li class="nav-item">
    <a class="nav-link" href="/subjects/{{ $topic->subject->id }}">
        <i class="fa fa-nav fa-fw fa-btn fa-arrow-left"></i>
        {{ $topic->subject->name }}
    </a>
</li>
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            {{ $topic->name }}
        </div>
        <div class="pull-right">
            <a href="/topics/{{ $topic->id }}/favorite">
                <i class="{{ $topic->favoritedBy()->contains(Auth::user()) ? 'fas' : 'far' }} fa-fw fa-star"></i>
                {{ $topic->favoritedBy()->contains(Auth::user()) ? " Unfavorite" : " Favorite" }}
            </a>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($topic->subtopics as $subtopic)
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
