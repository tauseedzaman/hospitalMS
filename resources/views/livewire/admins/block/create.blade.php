<div>
    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_item()">
        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
            {{ __('Add New block') }}</div>

        <div class="form-group">
            <label for="blockname">Black Name</label>
            <input type="text" name="blockname" class="form-control" placeholder="Enter Block Name"
                wire:model.lazy="blockname">
            @error('blockname')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="blockcode">Black Code</label>
            <input type="text" name="blockcode" class="form-control" placeholder="Enter Block Code"
                wire:model.lazy="blockcode">
            @error('blockcode')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>
        <center>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
            </div>
        </center>
        <center>
            <div class="form-group">
                <a wire:click="show_index" href="#">Cancel</a>
            </div>
        </center>
    </form>
</div>
