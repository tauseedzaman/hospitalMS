<div>
    <div class="content">
        <div class="container">
            <div class="row page-title row">
                <div class="col">
                    <h3 class="text-info">{{ env('APP_NAME') }} Operation Reports</h3>
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
                        {{ __('All  operationReports') }}</div>
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
                            @forelse ($reports as $operationReport)
                                <tr>
                                    <td>{{ $operationReport->id }}</td>
                                    <td>{{ $operationReport->patient->name }}</td>
                                    <td>{{ $operationReport->description }}</td>
                                    <td>{{ $operationReport->doctor->employ->name }}</td>
                                    <td>{{ ucfirst($operationReport->status) }}</td>
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
                    {{ $reports->links() }}
                </div>
            </div>
        </div>
