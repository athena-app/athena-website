@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<div class="card card-default">
    <div class="card-header">{{__('Dashboard')}}</div>

    <div class="card-body">
        {{__('Your application\'s dashboard.')}}
    </div>
</div>
@endsection
