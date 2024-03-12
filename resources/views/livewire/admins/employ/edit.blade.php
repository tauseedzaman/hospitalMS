<div>
    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="update_employee()">
        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
            {{ __('Edit employee') }}</div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" wire:model.lazy="name" placeholder="Enter Employee Name"
                class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('name')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" wire:model.lazy="email" placeholder="Enter Employee Email"
                class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('email')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" wire:model.lazy="image" class="form-control" >
        </div>
        @error('image')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror
        @if ($existing_image)
            <img src="{{ asset('storage/' . $existing_image) }}" width="100" height="100" />
        @endif
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" max="1000000000000" name="phone" wire:model.lazy="phone"
                placeholder="Enter Employee Phone" class="form-control" required cols="30"
                rows="5"></textarea>
        </div>
        @error('phone')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" name="Address" wire:model.lazy="address" placeholder="Enter Employee Address"
                class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('address')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="Status">Status</label>
            <select name="Status" wire:model.lazy="status" class="form-control" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
            @error('status')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Qualification">Qualification</label>
            <input type="text" name="Qualification" wire:model.lazy="qualification"
                placeholder="Enter Employee Qualification" class="form-control" required cols="30"
                rows="5"></textarea>
        </div>
        @error('qualification')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror


        <div class="form-group">
            <label for="Job">Position</label>
            <select name="Job" wire:model.lazy="position" class="form-control" required>
                <option value="">Choose Job</option>
                @foreach ($positions as $position)
                    <option value="{{ $position }}">{{ ucfirst($position) }}</option>
                @endforeach
            </select>
            @error('position')
                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            <label for="Salary">Salary <small class="text-sm text-success">USD</small></label>
            <input type="number" min="1" name="Salary" wire:model.lazy="salary"
                placeholder="Enter Employee Salary" class="form-control" required cols="30"
                rows="5"></textarea>
        </div>
        @error('salary')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <center>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </center>
        <center>
            <div class="form-group">
                <a wire:click="show_index" href="#">Cancel</a>
            </div>
        </center>
    </form><br>
</div>
