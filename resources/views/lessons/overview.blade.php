@extends('spark::layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Lessons
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($lessons as $lesson)
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
