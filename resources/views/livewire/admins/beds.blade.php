<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  Beds</h3>
            </div>
            <div  >
                @if (session()->has('message'))
                <div class="alert alert-success"  >
                    {{ session('message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                </div>
                @endif
            </div>
            <div class="box box-primary" >
                <div class="box-body">
                    <div class="text-info" wire:loading>Loading..</div>
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_bed()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New Bed") }}</div>

                    <div class="form-group">
                        <label for="Department">Department</label>
                        <select name="Department" wire:model.lazy="department" class="form-control" required>
                            @forelse ($departments as $department)
                                <option value="{{ $department->id }}">{{ $room->department }}</option>
                            @empty
                                <option value="">Null</option>
                            @endforelse
                        </select>
                        @error('department') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="Room">Room</label>
                        <select name="Room" wire:model.lazy="room" class="form-control" required>
                            <option selected>Choose Room</option>
                            @forelse ($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->name }}</option>
                            @empty
                                <option value="">Null</option>
                            @endforelse
                        </select>
                        @error('room') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="patient">Patient</label>
                        <select name="patient" wire:model.lazy="patient" class="form-control" required>
                            <option selected>Choose Patient</option>
                            {{-- @forelse ($patients as $patient) --}}
                                {{-- <option value="{{ $patient->id }}">{{ $patient->name }}</option> --}}
                            {{-- @empty --}}
                                {{-- <option value="">Null</option> --}}
                            {{-- @endforelse --}}
                        </select>
                        @error('patient') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  beds") }}</div>
                    <table  class="table table-hover"  style="" id="">
                        <thead>
                                <tr>
                                    <th>Bed No</th>
                                    <th>Patient</th>
                                    <th>Alloted Time</th>
                                    <th>Descharge Time</th>
                                    <th>Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            @forelse ($beds as $bed)
                                <tr>
                                    <td>{{ $bed->id }}</td>
                                    <td>{{ $bed->patient->name }}</td>
                                    <td><img width="40px" height="40px" src="{{ env('APP_URL').'storage/'.$bed->patient->photo_path }}" alt="patient image"></td>
                                    <td>{{ $bed->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $bed->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $bed->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                        </tr>
                            @endforelse
                            </tbody>
                    </table>
                    {{ $beds->links() }}
                </div>
     </div>
</div>

