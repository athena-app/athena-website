@extends('spark::layouts.app')

@section('navigation')
<li class="nav-item">
    <a class="nav-link" href="/subjects">
        <i class="fa fa-nav fa-fw fa-btn fa-arrow-left"></i>
        All Subjects
    </a>
</li>
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            {{ $subject->name }}
        </div>
        <div class="pull-right">
            <a href="/subjects/{{ $subject->id }}/favorite">
                <i class="{{ $subject->favoritedBy()->contains(Auth::user()) ? 'fas' : 'far' }} fa-fw fa-star"></i> {{ $subject->favoritedBy()->contains(Auth::user()) ? 'Unfavorite' : 'Favorite' }}
            </a>
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($subject->topics as $topic)
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
@endsection
