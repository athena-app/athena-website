@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<div class="card card-default">
    <div class="card-header">Chat</div>

    <div class="card-body">
        <div id="tlkio" class="embed-responsive" style="height:50vh;" data-channel="{{ 'athena-team-' . Auth::user()->currentTeam->id }}" data-theme="theme--minimal"></div>
        <script async src="https://tlk.io/embed.js" type="text/javascript"></script>
    </div>
</div>
@endsection
