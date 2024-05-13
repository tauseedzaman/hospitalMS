<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Appointments</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_appointment()">
                        <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                            {{ __('Add New Appointment') }}</div>
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
                            <label for="Doctor">Select Doctor</label>
                            <select name="Doctor" wire:model.lazy="doctor" class="form-control" required>
                                @forelse ($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->employ->name }}</option>
                                @empty
                                    <option value="">No Doctor Found!</option>
                                @endforelse
                            </select>
                            @error('doctor')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="stime">Time</label>
                            <input type="datetime-local" name="stime" placeholder="Set Time Of Appointment"
                                wire:model.lazy="stime" class="form-control">
                            @error('address')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea wire:model.lazy="message" rows="4" id="message" class="form-control" placeholder="Message..."
                                spellcheck="false"></textarea>
                            @error('message')
                                <span class="text-red-500 text-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                    </form><br>
                </div>
            </div>
        </div>
