@extends('spark::layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Subjects
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($subjects as $subject)
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
@stop
