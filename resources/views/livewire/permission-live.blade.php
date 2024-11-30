<div class="modal-body">
    <h4>{{$setRole->name}}</h4>
    @foreach($permissions as $permission)
        <div class="input-group mt-1">
            <div class="input-group-text">
                <input class="form-check-input mt-0" type="checkbox"
                       value="{{ $permission->id }}"
                       aria-label="Checkbox for permission"
                       @if($setRole->permissions->contains($permission->id)) checked @endif ></div>
            <input type="text" class="form-control" value="{{$permission->name}}"
                   aria-label="Text input with radio button" readonly>
        </div>
    @endforeach

    <div>
        {{ $permissions->links() }}
    </div>

</div>
