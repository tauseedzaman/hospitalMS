<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  Bill's</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_bill()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New Bill") }}</div>

                    <div class="form-group">
                        <label for="pat">Patient ID</label>
                        <select name="pat" wire:model.lazy="patients_id" class="form-control" required>
                            <option selected>Choose Patient</option>
                            @forelse ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @empty
                                <option value="null">Null</option>
                            @endforelse
                        </select>
                        @error('patients_id') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" placeholder="Enter Amount KPR" name="amount" wire:model.lazy="amount" class="form-control" >
                        @error('amount') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="payed">Payed</label>
                        <input type="checkbox" name="payed" wire:model.lazy="payed" class="form-control" >
                        @error('payed') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  Beds") }}</div>
                    <table  class="table table-hover"  style="" id="">
                        <thead>
                                <tr>
                                    <th class="text-center">Bill ID</th>
                                    <th class="text-center">Patient</th>
                                    <th class="text-center">Bill Amount <small class="text-warning">KPR</small></th>
                                    <th class="text-center">Payed</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            @forelse ($bills as $bill)
                                <tr @if($bill->payed == 1) class="bg-success" @endif>
                                    <td class="text-center">{{ $bill->id }}</td>
                                    <td class="text-center">{{ $bill->patients_id ? :'Null'}}</td>
                                    <td class="text-center">{{ $bill->amount ? :'Null'}}</td>
                                    <td class="text-center">{{ $bill->payed ? 'payed':'not payed' }}</td>
                                    <td class="text-center">
                                        <button wire:click="edit({{ $bill->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $bill->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                            <td class="text-warning">{{ __('Null') }}</td>
                        </tr>
                            @endforelse
                            </tbody>
                    </table>
                    {{ $bills->links() }}
                </div>
     </div>
</div>

