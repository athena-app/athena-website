@extends('spark::layouts.app')

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            {{ $lesson->name }}
        </div>
    </div>
    <div class="card-body">
        <div class="row pb-2">
            <div class="embed-responsive embed-responsive-16by9">
                <video controls>
                    <source src="{{ $lesson->video_url }}" type="video/mp4">
                    Oh no! Upgrade your browser to enjoy all of our wonderful content!
                </video>
            </div>
        </div>
        <div class="container">
            <div class="row mx-2">
                <h4 class="my-3 lead d-block">Description</h4>
            </div>
            <div class="row mx-2">
                <p>{{ $lesson->description }}</p>
            </div>
        </div>
        <div class="container">
            <div class="row mx-2">
                <h4 class="my-3 lead d-block">3D Models related to "{{ $lesson->keywords }}"</h4>
            </div>
            <div class="row mx-2">
                <p>//TODO</p>
            </div>
        </div>
    </div>
</div>
@stop
