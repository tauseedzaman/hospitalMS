<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Operation Reports</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_operationreport()">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                            {{ __('Add New operationReport') }}</div>


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
                                placeholder="Enter operation Details" class="form-control" required cols="30"
                                rows="5"></textarea>
                        </div>
                        @error('details') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="Docter">Docter</label>
                            <select name="Docter" class="form-control" wire:model.lazy="doctor">
                                <option>Choose Doctor</option>
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
                            <label for="time">Time</label>
                            <input type="time" name="time" id="time" wire:model.lazy="time"
                                placeholder="Enter operation time" class="form-control" required />
                        </div>
                        @error('time') <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br>
                    <hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ _('All  operationReports') }}</div>
                    <table class="table table-hover" style="" id="">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Patient</th>
                                <th scope="col">Details</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Dated</th>
                                <th scope="col">Created_at</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($OperationReports as $operationReport)
                                <tr>
                                    <td>{{ $operationReport->id }}</td>
                                    <td>{{ $operationReport->patient }}</td>
                                    <td>{{ $operationReport->description }}</td>
                                    <td>{{ $operationReport->doctor }}</td>
                                    <td>{{ $operationReport->time }}</td>
                                    <td>{{ $operationReport->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $operationReport->id }})"
                                            class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $operationReport->id }})"
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
                    {{ $OperationReports->links() }}
                </div>
            </div>
        </div>
