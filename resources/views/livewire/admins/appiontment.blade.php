<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Appointments</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_appointment()">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                            {{ __('Add New appointment') }}</div>

                        <div class="form-group">
                            <label for="patient">Select Patient</label>
                            <select name="patient" wire:model.lazy="patient" class="form-control" required>
                                @forelse ($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                @empty
                                    <option value="">No Fatient Found!</option>
                                @endforelse
                            </select>
                            @error('patient')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Nurse">Select Nurse</label>
                            <select name="Nurse" wire:model.lazy="nurse" class="form-control" required>
                                @forelse ($nurses as $nurse)
                                    <option value="{{ $nurse->id }}">{{ $nurse->name }}</option>
                                @empty
                                    <option value="">No Nurse Found!</option>
                                @endforelse
                            </select>
                            @error('nurse')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label for="Doctor">Select Doctor</label>
                            <select name="Doctor" wire:model.lazy="doctor" class="form-control" required>
                                @forelse ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @empty
                                    <option value="">No Doctor Found!</option>
                                @endforelse
                            </select>
                            @error('doctor')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="end_time">Start Time Of Appointment</label>
                            <input type="datetime-local" name="end_time" class="form-control"
                                placeholder="Set End Time Of Appointment" wire:model.lazy="start_timeee" />
                            <p class="text-info">Current Value: {{ $start_timeee }}</p>
                            @error('start_timeee')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="end_time">End Time Of Appointment</label>
                            <input type="datetime-local" name="end_time" class="form-control"
                                placeholder="Set End Time Of Appointment" wire:model.lazy="endtime" />
                            <p class="text-info">Current Value: {{ $endtime }}</p>
                            @error('endtime')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br>
                    <hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('All  appointments') }}</div>
                    <table class="table table-hover" style="" id="">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Patient</th>
                                <th>Prep Nurse</th>
                                <th>Doctor</th>
                                <th>Start Schduled Time</th>
                                <th>End Time</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($appointments as $appointment)
                                <tr>
                                    <td>{{ $appointment->id }}</td>
                                    <td>{{ $appointment->patient_id }}</td>
                                    <td>{{ $appointment->nurse_id }}</td>
                                    <td>{{ $appointment->doctor_id }}</td>
                                    <td>{{ $appointment->intime }}</td>
                                    <td>{{ $appointment->outtime }}</td>
                                    <td>{{ $appointment->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $appointment->id }})"
                                            class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $appointment->id }})"
                                            onclick="return confirm('{{ __('Are You Sure ?') }}')"
                                            class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <td class="text-warning">{{ __('Null') }}</td>
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
                </div>
            </div>
        </div>
