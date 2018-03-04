<li class="nav-item">
    <a class="nav-link {{ collect(Request::segments())->first() == 'favorites' ? 'active' : '' }}" href="/favorites">
        <i class="fa fa-nav fa-fw fa-btn fa-star"></i>
        My Favorites
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ collect(Request::segments())->first() == 'subjects' ? 'active' : '' }}" href="/subjects">
        <i class="fa fa-nav fa-fw fa-btn fa-book"></i>
        Subjects
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ collect(Request::segments())->first() == 'notes' ? 'active' : '' }}" href="/notes">
        <i class="fa fa-nav fa-fw fa-btn fa-sticky-note"></i>
        Notes
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ collect(Request::segments())->first() == 'chat' ? 'active' : '' }}" href="/chat">
        <i class="fa fa-nav fa-fw fa-btn fa-comment"></i>
        Chat
    </a>
</li>
