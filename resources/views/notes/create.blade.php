<div class="modal fade" id="create-note-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Note</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            {{ Form::open(array('url' => '/notes/create')) }}
                <div class="modal-body">
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', Input::old('name'), ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('text', 'Text') }}
                        {{ Form::textarea('text', Input::old('text'), ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{ Form::submit('Add Note', array('class' => 'btn btn-primary')) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
