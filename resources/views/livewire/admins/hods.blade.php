<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  Heads Of Departments</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_hod()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New hod") }}</div>

                    <div class="form-group">
                        <label for="hod">Choose Doctor</label>
                        <select name="hod" wire:model.lazy="doctor" class="form-control"  >
                            @forelse ($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                            @empty
                            <option value="" class="text-red">{{ __("No Doctor Found!") }}</option>
                            @endforelse
                        </select>
                        @error('doctor') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  HOD's") }}</div>
                    <table  class="table table-all table-hover"  style="" id="">
                        <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Doctor id</th>
                                    <th class="text-center">Dated</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            @forelse ($hods as $hod)
                                <tr>
                                    <td class="text-center">{{ $hod->id }}</td>
                                    <td class="text-center">{{ $hod->doctor_id }}</td>
                                    <td class="text-center">{{ $hod->created_at }}</td>
                                    <td class="text-center">
                                        <button wire:click="edit({{ $hod->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $hod->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                        </tr>
                            @endforelse
                            </tbody>
                    </table>
                    {{ $hods->links() }}
                </div>
     </div>
</div>

