@extends('spark::layouts.app')

@section('navigation')
    @include('notes.nav-items')
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            Notes
        </div>
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach ($notes as $note)
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
