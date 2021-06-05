<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  Medicines Store</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_medicine()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New medicine") }}</div>
                    <div class="form-group">
                        <label for="Price">Medicine Price</label>
                        <input type="number" name="Price" id="" wire:model.lazy="price" placeholder="Enter Medicine Price" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('price') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    <div class="form-group">
                        <label for="quantity">Medicine Quantity</label>
                        <input type="number" name="quantity" wire:model.lazy="quantity" placeholder="Enter Medicine Quantity" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('quantity') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                    <div class="form-group">
                        <label for="code">Medicine Code</label>
                        <input type="text"  name="code" wire:model.lazy="code" placeholder="Enter Medicine Code" class="form-control" required cols="30" rows="5"></textarea>
                    </div>
                    @error('code') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  medicine") }}</div>
                    <table  class="table table-hover"  style="" id="">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Code</th>
                                <th>Dated</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($medicines as $medicine)
                                <tr>
                                    <td>{{ $medicine->id }}</td>
                                    <td>{{ $medicine->price }}</td>
                                    <td>{{ $medicine->quantity }}</td>
                                    <td>{{ $medicine->code }}</td>
                                    <td>{{ $medicine->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $medicine->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $medicine->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
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
                    {{ $medicines->links() }}
                </div>
     </div>
</div>
