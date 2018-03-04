@extends('spark::layouts.app')

@section('navigation')
<li class="nav-item">
    <a class="nav-link" href="/subtopics/{{ $lesson->subtopic->id }}">
        <i class="fa fa-nav fa-fw fa-btn fa-arrow-left"></i>
        {{ $lesson->subtopic->name }}
    </a>
</li>
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header clearfix">
        <div class="pull-left">
            {{ $lesson->name }}
        </div>
        <div class="pull-right">
            <a href="/lessons/{{ $lesson->id }}/favorite">
                <i class="{{ $lesson->favoritedBy()->contains(Auth::user()) ? 'fas' : 'far' }} fa-fw fa-star"></i> {{ $lesson->favoritedBy()->contains(Auth::user()) ? 'Unfavorite' : 'Favorite' }}
            </a>
        </div>
    </div>
    <div class="card-body py-0 px-3">
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

@if (!empty($models) && !empty($lesson->keywords))
    <div class="card card-default">
        <div class="card-header clearfix">
            <div class="pull-left">
                3D Models related to "{{ $lesson->keywords }}" from SketchFab
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($models as $model)
            <div class="col-md-3">
                <div class="card">
                    <a href="#" data-toggle="modal" data-target="#viewerModal{{ $model->uid }}">
                        <img class="card-img-top" src="{{ $model->thumbnails->images[2]->url }}" alt="Card image cap">
                    </a>
                    <div class="card-block p-3">
                        <h4 class="card-title">{{ $model->name }}</h4>
                        <p class="card-text"><small class="text-muted">Uploaded by {{ $model->user->username }}</small></p>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="viewerModal{{ $model->uid }}" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $model->name }}</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="sketchfab-embed-wrapper embed-responsive embed-responsive-16by9">
                                <iframe src="https://sketchfab.com/models/{{ $model->uid }}/embed" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
                                <p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
                                    <a href="https://sketchfab.com/models/{{ $model->uid }}?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">{{ $model->name }}</a> by <a href="https://sketchfab.com/{{ $model->user->uid }}?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">{{ $model->user->username }}</a> on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
                                </p>
                            </div>
                            <div class="row p-3">
                                {{ $model->description }}
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
@stop
