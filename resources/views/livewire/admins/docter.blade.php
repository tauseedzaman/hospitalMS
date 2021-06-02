<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Doctors</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_doctor()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New Doctor") }}</div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" wire:model.lazy="name"  placeholder="Enter Name" class="form-control"   />
                        @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="Email" name="Email" wire:model.lazy="Email"  placeholder="Enter Email" class="form-control"   />
                        @error('Email') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="Password" name="Password" wire:model.lazy="Password"  placeholder="{{ __('Create New Password ')}}" class="form-control"   />
                        @error('Password') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" name="Address" wire:model.lazy="Address"  placeholder="Enter Address" class="form-control"   />
                        @error('Address') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="number" min="0" max="10000000000000" name="Phone" wire:model.lazy="Phone"  placeholder="Enter Phone" class="form-control"   />
                        @error('Phone') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    {{-- <div class="form-group">
                        <label for="Department">Departments</label>
                        <select name="Department" wire:model.lazy="department" class="form-control"  >
                            @forelse ($departments as $department)
                                <option value="{{ $department->name }}">{{ $department->name }}</option>
                            @empty
                            <option value="" class="text-red">{{ __("No Department Found!") }}</option>
                            @endforelse
                        </select>
                        @error('Phone') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div> --}}
                    <div class="form-group">
                        <label for="Specialization">Specialization</label>
                        <input type="text" name="Specialization" wire:model.lazy="Specialization"  placeholder="Enter Specialization" class="form-control"   />
                        @error('Specialization') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"  x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label class="form-control-label">Photo</label>
                            <div class="custom-file">
                                <input type="file" name="Photo" wire:model.lazy="Photo" class="custom-file-input ">
                                <label class="custom-file-label">{{ __('Choose Photo') }}</label>
                            </div>
                            @error('Photo') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror <br>

                            <div x-show="isUploading" style="width: 100%">
                                <progress class="my-1 progress-bar" role="progressbar" max="100" x-bind:value="progress"></progress>
                            </div>
                            <small class="text-muted">{{ __('The photo must have 0x0 size') }}</small><br>
                            @if ($Photo)
                            {{ __('Photo Preview:') }}<br>
                                <img width="20%" height="20%" src="{{ $Photo->temporaryUrl() }}">
                            @endif
                            @if ($edit_photo)
                            <br>
                            {{ __('Old Photo Preview:') }}<br>
                                <img width="20%" height="20%" src="{{ env('APP_URL').'storage/'.$edit_photo }}">
                            @endif

                            <br>
                            <div wire:loading wire:target="photo">{{ __('Uploading...') }}</div><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All Doctors") }}</div>
                    <table width="100%" class="table table-hover" id="">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Phone</th>
                                {{-- <th>Department</th> --}}
                                <th>Specialization</th>
                                <th>Photo</th>
                                    <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($doctors as $doctor)
                                <tr>
                                    <td>{{ $doctor->id }}</td>
                                    <td>{{ $doctor->name }}</td>
                                    <td>{{ $doctor->email }}</td>
                                    <td>{{ $doctor->address }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    {{-- <td>{{ $doctor->department }}</td> --}}
                                    <td>{{ $doctor->specialization }}</td>
                                    <td><img width="100%" height="70px" src="{{ $doctor->photo_path }}" alt=""></td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $doctor->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $doctor->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
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
                        </tr>
                            @endforelse
                                                    </tbody>
                    </table>
                    {{ $doctors->links() }}
                </div>
     </div>
</div>
