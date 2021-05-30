<div class="col-md-4">
    <div class="subcriber-info">
        <h3>SUBSCRIBE</h3>
        <p>Get healthy news, tip and solutions to your problems from our experts.</p>
        <div class="subcriber-box">
            <form id="mc-form" class="mc-form" wire:submit.prevent="add_subscriber">
                <div class="newsletter-form">
                    <input type="email" wire:model.lazy="email" autocomplete="off" id="mc-email" placeholder="Email address"
                        class="form-control" name="email">
                    <button class="mc-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                    <div class="clearfix"></div>
                    <div class="mailchimp-alerts">
                        <div class="mailchimp-submitting"></div>
                        <div class="mailchimp-success text-success">@if (session()->has('message')) {{ session('message') }} @endif</div>
                        <div class="mailchimp-error text-danger" >@error('email'){{ $message }}@enderror</div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
