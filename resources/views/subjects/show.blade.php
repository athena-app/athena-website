@extends('spark::layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            {{ $subject->name }}
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($subject->topics as $topic)
                <a href="/topics/{{ $topic->id }}" class="list-group-item list-group-item-action">{{ $topic->name }}</a>
            @endforeach
        </ul>
    </div>
</div>
@stop
