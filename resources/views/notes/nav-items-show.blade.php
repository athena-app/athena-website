<li class="nav-item ">
    <a class="nav-link" href="/notes">
        <i class="fa fa-nav fa-fw fa-btn fa-arrow-left"></i>
        All Notes
    </a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#create-note-modal">
        <i class="fa fa-nav fa-fw fa-btn fa-plus"></i>
        {{__('Add Note')}}
    </a>
</li>
<li class="nav-item ">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#edit-note-modal">
        <i class="fa fa-nav fa-fw fa-btn fa-edit"></i>
        {{__('Edit Note')}}
    </a>
</li>

@include('notes.create')
@include('notes.edit')
