<div x-data="{ open: false }">
<div class="content">
    <div class="container">
        <div class="page-title">
            <h3 class="text-info">{{ env('APP_NAME') }} Departments</h3>
        </div>
        <div  >
            @if (session()->has('message'))
            <div class="alert alert-success"  x-data=" open= false ">
                {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
            @endif
        </div>
        <div class="box box-primary"   x-show="!open">
            <div class="box-body">
                <div class="text-info" wire:loading>Loading..</div>
                <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_department()">
                <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >Add New Department</div>
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="Name" wire:model="name"  placeholder="Enter Name" class="form-control" required />
                        @error('name') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" wire:model.lazy="descriptions"  placeholder="Enter Description" class="form-control" required />
                    </div>
                    @error('descriptions') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    <div class="form-group"  x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true" x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"  x-on:livewire-upload-progress="progress = $event.detail.progress">
                        <label class="form-control-label">Photo</label>
                        <div class="custom-file">
                            <input type="file" name="Photo" wire:model.lazy="photo" class="custom-file-input ">
                            <label class="custom-file-label">Choose Photo</label>
                        </div>
                        <div x-show="isUploading" style="width: 100%">
                            <progress class="progress-bar" role="progressbar" max="100" aria-valuenow="progress" x-bind:value="progress"></progress>
                        </div>
                        <small class="text-muted">The photo must have 0x0 size</small><br>
                        @if ($photo)
                        Photo Preview:<br>
                            <img width="20%" height="20%" src="{{ $photo->temporaryUrl() }}">
                        @endif
                        @if ($edit_photo)
                        <br>
                        Old Photo Preview:<br>
                            <img width="20%" height="20%" src="{{ env('APP_URL').'storage/'.$edit_photo }}">
                        @endif

                        <br>
                        <div wire:loading wire:target="photo">Uploading...</div><br>
                        @error('photo') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                    </div>
                </form><br><hr>
                <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >All delpartments</div>
                <table width="100%" class="table table-hover" id="">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Photo</th>
                            <th>Created at</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($departments as $department)
                        <tr>
                            <td>{{ $department->name }}</td>
                            <td>{{ $department->description }}</td>
                            <td><img width="50px" height="50px" src="http://127.0.0.1:8000/storage/{{ $department->photo_path }}" alt=""></td>
                            <td>{{ $department->created_at }}</td>
                            <td class="text-right">
                                <button class="btn btn-outline-info btn-rounded" wire:click.prevent="edit({{ $department->id }})"><i class="fas fa-pen"></i></button>
                                <button class="btn btn-outline-danger btn-rounded" wire:click.prevent="delete({{ $department->id }})"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td rowspan="4"><h1 class="text-danger">No Department Found!</h1></td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
 </div>
</div>
