<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  Employees</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_employee()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New employee") }}</div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" wire:model.lazy="name" placeholder="Enter Employee Name" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="Email" wire:model.lazy="email" placeholder="Enter Employee Email" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('email') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" max="1000000000000" name="phone" wire:model.lazy="phone" placeholder="Enter Employee Phone" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('phone') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" name="Address" wire:model.lazy="address" placeholder="Enter Employee Address" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('address') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    <div class="form-group">
                        <label for="Gender">Gender</label>
                        <select name="Gender" wire:model.lazy="gender" class="form-control" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        @error('gender') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="Job">Job</label>
                        <select name="Job" wire:model.lazy="job" class="form-control" required>
                            <option value="">Choose Job</option>
                            <option value="Doctor">Doctor</option>
                            <option value="Nurse">Nurse</option>
                            <option value="...">...</option>
                        </select>
                        @error('job') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>


                    <div class="form-group">
                        <label for="Salary">Salary <small class="text-sm text-success">KPR</small></label>
                        <input type="number" min="1" name="Salary" wire:model.lazy="salary" placeholder="Enter Employee Salary" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('salary') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  employees") }}</div>
                    <table  class="table table-hover"  style="" id="">
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
                                        <button wire:click="edit({{ $employee->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $employee->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
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
