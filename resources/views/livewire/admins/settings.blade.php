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
                            <div class="tab-pane fade active show" id="general" role="tabpanel"
                                aria-labelledby="general-tab">
                                <form accept-charset="utf-8" class="shadow rounded p-3"
                                    wire:submit.prevent="add_general_settings()">

                                    <div class="col-md-8 m-2">
                                        <p class="text-muted">General settings such as, site title, site description,
                                            address and so on.</p>

                                        <div class="form-group">
                                            <label for="site-title" class="form-control-label">Site Title</label>
                                            <input type="text" wire:model.lazy="title" name="site_title"
                                                class="form-control" placeholder="site title">
                                            @error('title') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="description" class="form-control-label">Site Description</label>
                                            <textarea class="form-control" placeholder="Description"
                                                wire:model.lazy="description" name="description"></textarea>
                                            @error('description') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group" x-data="{ isUploading: false, progress: 0 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label class="form-control-label">Site Logo</label>
                                            <div class="custom-file">
                                                <input type="file" wire:model.lazy="logo" name="site_logo"
                                                    class="custom-file-input">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            @error('logo') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <div wire:loading wire:target="logo">{{ __('Uploading...') }}</div><br>
                                            <br>
                                            <div x-show="isUploading" style="width: 100%">
                                                <progress class="my-1 progress-bar" role="progressbar" max="100"
                                                    x-bind:value="progress"></progress>
                                            </div>
                                            @if ($logo)
                                                {{ __('Preview: ') }}<br>
                                                <img width="20%" height="20%" src="{{ $logo->temporaryUrl() }}">
                                            @endif

                                            @if ($c_logo)
                                                {{ __('Current Logo Preview: ') }}<br>
                                                <img width="20%" height="20%"
                                                    src="{{ env('APP_URL') . 'storage/' . $c_logo }}">
                                            @endif
                                        </div>
                                        <div class="form-group" x-data="{ isUploading: false, progress: 0 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label class="form-control-label">Favicon</label>
                                            <div class="custom-file">
                                                <input type="file" name="site_favicon" wire:model.lazy="favicon"
                                                    class="custom-file-input">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            @error('favicon') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <div wire:loading wire:target="favicon">{{ __('Uploading...') }}</div>
                                            <br>
                                            <div x-show="isUploading" style="width: 100%">
                                                <progress class="my-1 progress-bar" role="progressbar" max="100"
                                                    x-bind:value="progress"></progress>
                                            </div>
                                            @if ($favicon)
                                                {{ __('Preview: ') }}<br>
                                                <img width="20%" height="20%" src="{{ $favicon->temporaryUrl() }}">
                                            @endif
                                            @if ($c_favicon)
                                                {{ __('Current Favicon Preview: ') }}<br>
                                                <img width="20%" height="20%"
                                                    src="{{ env('APP_URL') . 'storage/' . $c_favicon }}">
                                            @endif
                                        </div>

                                        <div class="form-group" x-data="{ isUploading: false, progress: 0 }"
                                            x-on:livewire-upload-start="isUploading = true"
                                            x-on:livewire-upload-finish="isUploading = false"
                                            x-on:livewire-upload-error="isUploading = false"
                                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                                            <label class="form-control-label">Icon Logo</label>
                                            <div class="custom-file">
                                                <input type="file" wire:model.lazy="icon_logo" name="icon_logo"
                                                    class="custom-file-input">
                                                <label class="custom-file-label">Choose File</label>
                                            </div>
                                            @error('icon_logo') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                            <br>
                                            <div wire:loading wire:target="icon_logo">{{ __('Uploading...') }}</div>
                                            <br>
                                            <br>
                                            <div x-show="isUploading" style="width: 100%">
                                                <progress class="my-1 progress-bar" role="progressbar" max="100"
                                                    x-bind:value="progress"></progress>
                                            </div>
                                            @if ($icon_logo)
                                                {{ __('Preview: ') }}<br>
                                                <img width="20%" height="20%" src="{{ $icon_logo->temporaryUrl() }}">
                                            @endif

                                            @if ($c_icon_logo)
                                                {{ __('Current Logo Preview: ') }}<br>
                                                <img width="20%" height="20%"
                                                    src="{{ env('APP_URL') . 'storage/' . $c_icon_logo }}">
                                            @endif
                                        </div>

                                        <div class="form-group">
                                            <label for="email" class="form-control-label">Business Email</label>
                                            <input type="text" placeholder="example@test.com"
                                                wire:model.lazy="business_email" name="email" class="form-control"">
                                            @error('business_email') <span class=" text-red-500 text-danger
                                                text-xs">{{ $message }}</span> @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="business_phone" class="form-control-label">Business
                                                Phone</label>
                                            <input type="text" placeholder="+92..........."
                                                wire:model.lazy="business_phone" name="business_phone"
                                                class="form-control">
                                            @error('business_phone') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="form-control-label">Business Address</label>
                                            <input type="text" placeholder="Address" wire:model.lazy="address"
                                                name="address" class="form-control">
                                            @error('address') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="working_horse" class="form-control-label">Working Horse</label>
                                            <input type="text" placeholder="Working Horse"
                                                wire:model.lazy="working_horse" name="working_horse"
                                                class="form-control">
                                            <small class="text-small text-info">i.e: 7:00am - 8:00pm</small>
                                            @error('working_horse') <span
                                                    class="text-red-500 text-danger text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group text-right">
                                            <button class="btn btn-success" type="submit"><i class="fas fa-check"></i>
                                                {{ $btn_text }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
