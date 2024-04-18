<div x-data="{ open: false }">
    <div class="content">
        <div class="container">
            <div class="row page-title row">
                <div class="col">
                    <h3 class="text-info">{{ env('APP_NAME') }} Departments</h3>
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary" wire:click="show_create_form">Add New</button>
                </div>
            </div>
            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success" x-data=" open = false">
                        {{ session('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
            <div class="box box-primary" x-show="!open">
                <div class="box-body">
                    <div class="text-info" wire:loading>Loading..</div>
                    <hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">All
                        delpartments</div>
                    <table width="100%" class="table table-hover" id="">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Photo</th>
                                <th>HOD</th>
                                <th>Block</th>
                                <th>Created at</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($departments as $department)
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $department->name }}</td>
                                <td><img width="50px" height="50px" src="{{ $department->photo_path }}"
                                          alt=""></td>
                                <td>{{ $department->hod->doctor->employ->name }}</td>
                                <td>{{ $department->block->blockname }}</td>
                                <td>{{ $department->created_at }}</td>
                                <td class="text-right">
                                    <button class="btn btn-outline-info btn-rounded"
                                        wire:click.prevent="edit({{ $department->id }})"><i
                                            class="fas fa-pen"></i></button>
                                    <button class="btn btn-outline-danger btn-rounded"
                                        wire:click.prevent="delete({{ $department->id }})"><i
                                            class="fas fa-trash"></i></button>
                                </td>
                                </tr>
                            @empty
                                <tr>
                                    <td rowspan="4">
                                        <h1 class="text-danger">No Department Found!</h1>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                    {{ $departments->links() }}
                </div>
            </div>
        </div>
