@extends('spark::layouts.app')

@section('content')
<home :user="user" inline-template>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">{{__('Dashboard')}}</div>

                <div class="card-body">
                    {{__('This is your dashboard, use it to keep track of notes, messages, and favorites!')}}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">{{__('Notes')}}</div>

                <div class="card-body">
                    <ul class="list-group" style="min-height: 25vh;">
                        @if (Auth::user()->currentTeam->notes->isEmpty())
                                No notes found!
                        @else
                            @foreach (Auth::user()->currentTeam->notes as $note)
                                <a href="/notes/{{ $note->id }}" class="list-group-item list-group-item-action clearfix">
                                    <div class="pull-left">
                                        {{ $note->name }}
                                    </div>
                                    <div class="pull-right">
                                        <i class="fa fa-fw fa-caret-right"></i>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">{{__('Chat')}}</div>

                <div class="card-body p-0">
                    <div id="tlkio" class="embed-responsive" style="height:385px;" data-channel="{{ 'athena-team-' . Auth::user()->currentTeam->id }}" data-theme="theme--minimal"></div>
                    <script async src="https://tlk.io/embed.js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">{{__('Favorites')}}</div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">{{__('Subjects')}}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @if (Auth::user()->favorite(\App\Subject::class)->isEmpty())
                                No subjects found!
                        @else
                        @foreach (Auth::user()->favorite(\App\Subject::class) as $subject)
                            <a href="/subjects/{{ $subject->id }}" class="list-group-item list-group-item-action clearfix">
                                <div class="pull-left">
                                    {{ $subject->name }}
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-fw fa-caret-right"></i>
                                </div>
                            </a>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">{{__('Topics')}}</div>
                <div class="card-body">
                    <ul class="list-group">
                        @if (Auth::user()->favorite(\App\Topic::class)->isEmpty())
                                No topics found!
                        @else
                        @foreach (Auth::user()->favorite(\App\Topic::class) as $topic)
                            <a href="/topics/{{ $topic->id }}" class="list-group-item list-group-item-action clearfix">
                                <div class="pull-left">
                                    {{ $topic->name }}
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-fw fa-caret-right"></i>
                                </div>
                            </a>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">{{__('Subtopics')}}</div>
                <div class="card-body">
                    <ul class="list-group">
                        @if (Auth::user()->favorite(\App\Subtopic::class)->isEmpty())
                                No subtopics found!
                        @else
                        @foreach (Auth::user()->favorite(\App\Subtopic::class) as $subtopic)
                            <a href="/subtopics/{{ $subtopic->id }}" class="list-group-item list-group-item-action clearfix">
                                <div class="pull-left">
                                    {{ $subtopic->name }}
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-fw fa-caret-right"></i>
                                </div>
                            </a>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">{{__('Lessons')}}</div>
                <div class="card-body">
                    <ul class="list-group">
                        @if (Auth::user()->favorite(\App\Lesson::class)->isEmpty())
                                No lessons found!
                        @else
                        @foreach (Auth::user()->favorite(\App\Lesson::class) as $lesson)
                            <a href="/lessons/{{ $lesson->id }}" class="list-group-item list-group-item-action clearfix">
                                <div class="pull-left">
                                    {{ $lesson->name }}
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-fw fa-caret-right"></i>
                                </div>
                            </a>
                        @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
