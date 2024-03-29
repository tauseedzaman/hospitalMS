<div>
    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_hod()">
        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
            {{ __('Add New HOD') }}</div>
        <div class="form-group">
            <label for="hod">Choose Doctor</label>
            <select name="hod" wire:model.lazy="doctor" class="form-control">
                <option value="" class="text-red">{{ __(' -- Select Doctor --') }}</option>
                @forelse ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->employ->name }}</option>
                @empty
                    <option value="" class="text-red">{{ __('No Doctor Found!') }}</option>
                @endforelse
            </select>
            @error('doctor')
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
