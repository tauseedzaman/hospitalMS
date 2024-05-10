<div>
    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_operationreport()">
        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
            {{ __('Add New operationReport') }}</div>


        <div class="form-group">
            <label for="patient">Patient</label>
            <select name="patient" wire:model.lazy="patient" class="form-control" required>
                <option value="" selected>Choose Patient</option>
                @forelse ($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @empty
                    <option value="" class="text-warning">No Patient Found!</option>
                @endforelse

            </select>
            @error('patient')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Details">Details</label>
            <textarea name="Details" id="Details" wire:model.lazy="details" placeholder="Enter operation Details"
                class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('details')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="Docter">Docter</label>
            <select name="Docter" class="form-control" wire:model.lazy="doctor">
                <option>Choose Doctor</option>
                @forelse ($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->employ->name }}</option>
                @empty
                    <option value="" class="text-warning">No Doctor Found!</option>
                @endforelse
            </select>
            @error('doctor')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <select name="status" class="form-control" wire:model.lazy="status">
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
            @error('status')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Save">
        </div>
    </form>

</div>
