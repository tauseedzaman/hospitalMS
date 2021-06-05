<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }}  Blocks</h3>
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
                    <form accept-charset="utf-8" class="shadow rounded p-3" wire:submit.prevent="add_block()">
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ __("Add New block") }}</div>

                    <div class="form-group">
                        <label for="blockfloor">Black Name</label>
                        <input type="number" name="blockfloor" class="form-control" placeholder="Enter Block Name" wire:model.lazy="blockfloor">
                        @error('blockfloor') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="blockcode">Black Code</label>
                        <input type="number" name="blockcode" class="form-control" placeholder="Enter Block Code" wire:model.lazy="blockcode">
                        @error('blockcode') <span class="text-red-500 text-danger text-xs">{{ $message }}</span> @enderror
                    </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="{{ $button_text }}">
                        </div>
                    </form><br><hr>

                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded" >{{ _("All  Blocks") }}</div>
                    <table  class="table table-hover"  style="" id="">
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Block Floor</th>
                                    <th>Block Code</th>
                                    <th>Departments</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                        </thead>
                        <tbody>
                            @forelse ($blocks as $block)
                                <tr>
                                    <td>{{ $block->id }}</td>
                                    <td>{{ $block->blockfloor }}</td>
                                    <td>{{ $block->blockcode }}</td>
                                    <td>{{ $block->departments->count() }}</td>
                                    <td>{{ $block->created_at }}</td>
                                    <td class="text-right">
                                        <button wire:click="edit({{ $block->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></button>
                                        <button wire:click="delete({{ $block->id }})" onclick="return confirm('{{ __('Are You Sure ?')  }}')" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></button>
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
                    {{ $blocks->links() }}
                </div>
     </div>
</div>

