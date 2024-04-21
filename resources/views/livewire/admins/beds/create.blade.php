<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Beds</h3>
            </div>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="box box-primary">
                <div class="box-body">
                    <div class="text-info" wire:loading>Loading..</div>
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_bed()">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                            {{ __('Add New Bed') }}</div>

                        <div class="form-group">
                            <label for="Room">Room</label>
                            <select name="Room" wire:model.lazy="room_id" class="form-control" required>
                                <option selected>Choose Room</option>
                                @forelse ($rooms as $room)
                                    <option value="{{ $room->id }}">room {{ $room->id }}</option>
                                @empty
                                    <option value="">Null</option>
                                @endforelse
                            </select>
                            @error('room_id')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="patient">Patient</label>
                            <select name="patient" wire:model.lazy="patient_id" class="form-control">
                                <option value="null" selected>Choose Patient</option>
                                @forelse ($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                @empty
                                    <option value="">Null</option>
                                @endforelse
                            </select>
                            @error('patient_id')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="a_time">Alloted Time</label>
                            <input type="datetime-local" name="a_time" wire:model.lazy="alloted_time"
                                class="form-control">
                            @error('alloted_time')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br>
                </div>
            </div>
        </div>
    </div>
</div>
