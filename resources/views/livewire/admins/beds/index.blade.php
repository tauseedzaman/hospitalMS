<div>
    <div class="content">
        <div class="container">
            <div class="row page-title row">
                <div class="col">
                    <h3 class="text-info">{{ env('APP_NAME') }} Beds</h3>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" wire:click="show_create_form">Add New</button>
                </div>
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
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('All Beds') }}</div>
                    <table class="table table-hover" style="" id="">
                        <thead>
                            <tr>
                                <th class="text-center">Bed No</th>
                                <th class="text-center">Room No</th>
                                <th class="text-center">Patient</th>
                                <th class="text-center">Alloted Time</th>
                                <th class="text-center">Descharge Time</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($beds as $bed)
                                <tr>
                                    <td class="text-center">{{ $bed->id }}</td>
                                    <td class="text-center">{{ $bed->room_id }}</td>
                                    <td class="text-center">{{ $bed->patient->name ?? 'Null' }}</td>
                                    <td class="text-center">{{ $bed->alloted_time ?? 'Null' }}</td>
                                    <td class="text-center">{{ $bed->discharge_time ?? '--' }}</td>
                                    <td class="text-center">
                                        <button wire:click="show_edit_form({{ $bed->id }})"
                                            class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $bed->id }})"
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
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $beds->links() }}
                </div>
            </div>
        </div>
