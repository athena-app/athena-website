@if (collect(Request::segments())->last() != "home")
<aside class="mb-2">
    <div class="spark-settings-tabs">
        <h3 class="nav-heading">
            {{__('Navigation')}}
        </h3>
    </div>
    <ul class="nav flex-column">
        @if (collect(Request::segments())->last() != "home")
            <li class="nav-item">
                <a class="nav-link" href="/home">
                    <i class="fa fa-nav fa-fw fa-btn fa-home"></i>
                    Dashboard
                </a>
            </li>
        @endif
        @hasSection('navigation')
            @yield('navigation')
        @endif
    </ul>
</aside>
@endif
<aside class="mb-2">
    <div class="spark-settings-tabs">
        <h3 class="nav-heading">
            {{__('Explore')}}
        </h3>
    </div>
    <ul class="nav flex-column">
        @include('constant-nav-items')
    </ul>
</aside>

<aside class="mb-2">
    <div class="spark-settings-tabs">
        <h3 class="nav-heading">
            {{__('Teams')}}
        </h3>
    </div>
    <ul class="nav flex-column">
        @if(Auth::user()->teams->isEmpty())
            <li class="list-group-item">No teams found!</li>
        @else
            @foreach(Auth::user()->teams as $team)
                <li class="nav-item">
                    <a class="nav-link" href="/locations/{{ $team->id }}">
                        <i class="fa fa-nav fa-fw fa-btn fa-location-arrow"></i>
                        {{ $team->name }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
</aside>

