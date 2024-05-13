<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Patients</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_patient()">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                            {{ __('Add New Patient') }}</div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" name="Name" wire:model.lazy="name" placeholder="Enter Name"
                                class="form-control" />
                            @error('name')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="Email" name="Email" wire:model.lazy="email" placeholder="Enter Email"
                                class="form-control" />
                            @error('email')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="number" min="0" max="10000000000000" name="Phone"
                                wire:model.lazy="phone" placeholder="Enter Phone" class="form-control" />
                            @error('phone')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" name="Address" wire:model.lazy="address" placeholder="Enter Address"
                                class="form-control" />
                            @error('address')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="Department">Gender</label>
                            <select name="Department" wire:model.lazy="gender" class="form-control">
                                <option value="Male" class="text-red">{{ __('Male') }}</option>
                                <option value="Female" class="text-red">{{ __('Female') }}</option>
                            </select>
                            @error('Gender')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="number" min="1" max="130" name="age" wire:model.lazy="age"
                                placeholder="Enter age" class="form-control" />
                            @error('age')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Blood">Blood Group</label>
                            <select name="Blood" wire:model.lazy="bloodgroup" class="form-control">
                                <option value="Null" class="text-red">Null</option>
                                <option value="A+" class="text-red">A+</option>
                                <option value="A-" class="text-red">A-</option>
                                <option value="B+" class="text-red">B+</option>
                                <option value="B-" class="text-red">B-</option>
                                <option value="AB-" class="text-red">AB-</option>
                                <option value="AB+" class="text-red">AB+</option>
                            </select>
                            @error('Gender')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label class="form-control-label">Photo</label>
                            <div class="custom-file">
                                <input type="file" name="Photo" wire:model.lazy="photo"
                                    class="custom-file-input ">
                                <label class="custom-file-label">{{ __('Choose Photo') }}</label>
                            </div>
                            @error('photo')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror <br>

                            <div x-show="isUploading" style="width: 100%">
                                <progress class="my-1 progress-bar" role="progressbar" max="100"
                                    x-bind:value="progress"></progress>
                            </div>
                            <small class="text-muted">{{ __('The photo must have 0x0 size') }}</small><br>
                            <br>
                            <div wire:loading wire:target="photo">{{ __('Uploading...') }}</div><br>

                            @if ($photo)
                                {{ __('Photo Preview:') }}<br>
                                <img width="20%" height="20%" src="{{ $photo->temporaryUrl() }}">
                            @endif
                            @if ($edit_photo)
                                <br>
                                {{ __('Old Photo Preview:') }}<br>
                                <img width="20%" height="20%"
                                    src="{{ env('APP_URL') . 'storage/' . $edit_photo }}">
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br>
                </div>
            </div>
        </div>
