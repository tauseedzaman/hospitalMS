<div class="wrapper">
    <div id="body" class="active">
        <div class="content">
            <div class="container">
                <div class="page-title">
                    <h2 class="p-3 shadow text-info bg-light">General Settings</h2>
                </div>
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="text-info" wire:loading>Loading..</div>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade active show" id="general" role="tabpanel" aria-labelledby="general-tab">
                                @if (session()->has('message'))
                                <div class="alert alert-success">{{ session('message') }}</div>
                                @endif

                                <form wire:submit.prevent="updateSettings" enctype="multipart/form-data">

                                    @foreach ($settings as $key => $value)
                                    <div class="form-group">
                                        <label for="{{ $key }}" class="form-control-label">{{ ucfirst($key) }}</label>
                                        @if ($key == 'logo' || $key == 'icon')
                                        <input type="file" wire:model="{{ $key }}" id="{{ $key }}" name="{{ $key }}" class="form-control-file">
                                        @if ($value)
                                        <p class="mt-2">Current {{ ucfirst($key) }}: <img src="{{ asset('storage/' . $value) }}" width="50" height="50" alt="{{ $key }}"></p>
                                        @endif
                                        @else
                                        <input type="text" wire:model="settings.{{ $key }}" id="{{ $key }}" name="{{ $key }}" class="form-control" placeholder="{{ ucfirst($key) }}">
                                        @endif
                                    </div>
                                    @endforeach

                                    <button type="submit" class="btn btn-primary">Save Settings</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
