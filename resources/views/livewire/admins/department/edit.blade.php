<div x-data="{ open: false }">
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Departments</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_department()" enctype="multipart/form-data">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">EditDepartment</div>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" name="Name" wire:model="name" placeholder="Enter Name"
                                class="form-control" required />
                            @error('name')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" wire:model.lazy="descriptions"
                                placeholder="Enter Description" class="form-control" required />
                        </div>
                        @error('descriptions')
                            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                        @enderror
                        <div class="form-group" x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <label class="form-control-label">Photo</label>
                            <div class="custom-file">
                                <input type="file" name="Photo" wire:model.lazy="photo" class="custom-file-input ">
                                <label class="custom-file-label">Choose Photo</label>
                            </div>
                            <div x-show="isUploading" style="width: 100%">
                                <progress class="progress-bar" role="progressbar" max="100"
                                    aria-valuenow="progress" x-bind:value="progress"></progress>
                            </div>
                            <small class="text-muted">The photo must have 0x0 size</small>
                            @if ($photo)
                                <br>Photo Preview:<br>
                                <img width="20%" height="20%" src="{{ $photo->temporaryUrl() }}">
                            @endif
                            @if ($edit_photo)
                                <br>Old Photo Preview:<br>
                                <img width="20%" height="20%"
                                    src="{{ $edit_photo }}">
                            @endif

                            <div wire:loading wire:target="photo">Uploading...</div><br>
                            @error('photo')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="hod">Head Of Department</label>
                            <select name="hod" wire:model.lazy="head" class="form-control" required>
                                <option selected>Choose Head</option>
                                @forelse ($hods as $hod)
                                    <option value="{{ $hod->id }}">{{ $hod->doctor->employ->name }}</option>
                                @empty
                                    <option value="" class="text-warning">No head Found!</option>
                                @endforelse

                            </select>
                            @error('head')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="block">Department Block</label>
                            <select name="block" wire:model.lazy="block" aria-placeholder="Selct Block"
                                class="form-control" required>
                                <option selected>Choose block</option>
                                @forelse ($blocks as $block)
                                    <option value="{{ $block->id }}">{{ $block->blockname }}</option>
                                @empty
                                    <option class="text-warning">No Block Found!</option>
                                @endforelse

                            </select>
                            @error('block')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br>
                </div>
            </div>
        </div>
