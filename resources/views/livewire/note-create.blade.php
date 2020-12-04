<div class="mb-4">
    <form wire:submit.prevent="createNote">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">留言</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="note-body" rows="3" wire:model.lazy="body"></textarea>
            @error('body')
                <span class="invalid-feedback">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <button type="submit" class="btn btn-danger">创建留言</button>
    </form>
</div>