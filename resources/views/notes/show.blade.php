@extends('spark::layouts.app')

@section('navigation')
    @include('notes.nav-items-show')
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            {{ $note->name }}
        </div>
    </div>
    <div class="card-body">
        {{ $note->text }}
    </div>
</div>
@endsection
