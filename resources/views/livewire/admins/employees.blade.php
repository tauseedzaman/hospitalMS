<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Employees</h3>
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
                    
                    <hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('All  employees') }}</div>
                    <table class="table table-hover" style="" id="">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Gender</th>
                                <th>Job</th>
                                <th>Salary </th>
                                <th>Dated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td>{{ $employee->gender }}</td>
                                    <td>{{ $employee->job }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>{{ $employee->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $employee->id }})"
                                            class="btn btn-outline-info btn-rounded"><i
                                                class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $employee->id }})"
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
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
