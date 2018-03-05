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
        <div class="pull-right">
            <a href="/notes/{{ $note->id }}/favorite">
                <i class="{{ $note->favoritedBy()->contains(Auth::user()) ? 'fas' : 'far' }} fa-fw fa-star"></i> {{ $note->favoritedBy()->contains(Auth::user()) ? "Unfavorite" : "Favorite" }}
            </a>
        </div>
    </div>
    <div class="card-body">
        <pre style="white-space: pre-wrap; white-space: -moz-pre-wrap; white-space: -pre-wrap; white-space: -o-pre-wrap; word-wrap: break-word;">{{ $note->text }}</pre>
    </div>
</div>
@endsection
