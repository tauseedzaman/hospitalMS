<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Birth Reports</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_birthreport()">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                            {{ __('Add New BirthReport') }}</div>


                        <div class="form-group">
                            <label for="patient">Patient</label>
                            <select name="patient" wire:model.lazy="patient" class="form-control" required>
                                <option value="" selected>Choose Patient</option>
                                @forelse ($patients as $patient)
                                    <option value="{{ $patient->name }}">{{ $patient->name }}</option>
                                @empty
                                    <option value="" class="text-warning">No Patient Found!</option>
                                @endforelse

                            </select>
                            @error('patient') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Details">Details</label>
                            <textarea name="Details" id="Details" wire:model.lazy="details"
                                placeholder="Enter Birth Details" class="form-control" required cols="30"
                                rows="5"></textarea>
                        </div>
                        @error('details') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="Docter">Docter</label>
                            <select name="Docter" class="form-control" wire:model.lazy="doctor" required>
                                <option value="" selected>Choose Doctor</option>
                                @forelse ($doctors as $doctor)
                                    <option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
                                @empty
                                    <option value="" class="text-warning">No Doctor Found!</option>
                                @endforelse
                            </select>
                            @error('doctor') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br>
                    <hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ _('All  BirthReports') }}</div>
                    <table width="100%" class="table table-hover" id="">
                        <thead>
                            <tr>
                                <th>BirthReport</th>
                                <th>Patient</th>
                                <th>Details</th>
                                <th>Doctor</th>
                                <th>Dated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($BirthReports as $BirthReport)
                                <tr>
                                    <td>{{ $BirthReport->id }}</td>
                                    <td>{{ $BirthReport->patient }}</td>
                                    <td>{{ $BirthReport->description }}</td>
                                    <td>{{ $BirthReport->doctor }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $BirthReport->id }})"
                                            class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $BirthReport->id }})"
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
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $BirthReports->links() }}
                </div>
            </div>
        </div>
