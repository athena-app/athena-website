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
                <p>{{ empty($lesson->description) ? 'No description found.' : $lesson->description }}</p>
            </div>
        </div>
    </div>
</div>

@if (!empty($models))
    <div class="card card-default">
        <div class="card-header clearfix">
            <div class="pull-left">
                3D Models related to "{{ $lesson->keywords }}" from Thingiverse
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($models as $model)
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="{{ str_replace('medium', 'large', $model->thumbnail) }}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">{{ $model->name }}</h4>
                        <p class="card-text"><small class="text-muted">Uploaded by {{ $model->creator->name }}</small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
@stop
