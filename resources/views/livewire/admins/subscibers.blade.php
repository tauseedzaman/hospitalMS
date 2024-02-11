<div>
    <div class="content">
        <div class="container">
            <div class="page-title">
                <h3 class="text-info">{{ env('APP_NAME') }} Subscribers</h3>
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
                    <br>
                    <hr>
                    <div class="text-capitalize bg-dark p-2 shadow mb-3 text-center text-lg text-light rounded">
                        {{ __('News Later Subscribers') }}</div>
                    <table class="table table-hover" style="" id="">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Dated</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($subscribers as $subscriber)
                                <tr>
                                    <td class="text-center">{{ $subscriber->id }}</td>
                                    <td class="text-center">{{ $subscriber->email }}</td>
                                    <td class="text-center">{{ $subscriber->created_at }}</td>
                                    <td class="text-center">
                                        <button wire:click="delete({{ $subscriber->id }})" title="delete this"
                                            onclick="return confirm('{{ __('Are You Sure ?') }}')"
                                            class="btn btn-outline-danger btn-rounded"><i
                                                class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                <td class="text-warning">{{ __('Null') }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $subscribers->links() }}
                </div>
            </div>
        </div>
