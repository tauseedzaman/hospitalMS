<div>
    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_employee()">
        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
            {{ __('Add New employee') }}</div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" wire:model.lazy="name" placeholder="Enter Employee Name" class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('name')
        <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" name="Email" wire:model.lazy="email" placeholder="Enter Employee Email" class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('email')
        <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" max="1000000000000" name="phone" wire:model.lazy="phone" placeholder="Enter Employee Phone" class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('phone')
        <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="Address">Address</label>
            <input type="text" name="Address" wire:model.lazy="address" placeholder="Enter Employee Address" class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('address')
        <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="Gender">Gender</label>
            <select name="Gender" wire:model.lazy="gender" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

            @error('gender')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="Job">Job</label>
            <select name="Job" wire:model.lazy="job" class="form-control" required>
                <option value="">Choose Job</option>
                <option value="Doctor">Doctor</option>
                <option value="Nurse">Nurse</option>
                <option value="...">...</option>
            </select>
            @error('job')
            <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
            @enderror
        </div>


        <div class="form-group">
            <label for="Salary">Salary <small class="text-sm text-success">KPR</small></label>
            <input type="number" min="1" name="Salary" wire:model.lazy="salary" placeholder="Enter Employee Salary" class="form-control" required cols="30" rows="5"></textarea>
        </div>
        @error('salary')
        <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
        </div>
    </form><br>
</div>
