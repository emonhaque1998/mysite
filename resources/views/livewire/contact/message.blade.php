<form id="contactForm" class="contactForm" wire:submit="sendMessage">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" wire:model.live="name" class="form-control" value="" placeholder="Richard D. Hammond" required data-error="Please enter your Name">
                <label for="name" class="for-icon"><i class="far fa-user"></i></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" wire:model.live="email" class="form-control" value="" placeholder="support@gmail.com" required data-error="Please enter your Email">
                <label for="email" class="for-icon"><i class="far fa-envelope"></i></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" wire:model.live="phone_number" class="form-control" value="" placeholder="+880 (123) 456 88" required data-error="Please enter your Phone Number">
                <label for="phone_number" class="for-icon"><i class="far fa-phone"></i></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" wire:model.live="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                <label for="subject" class="for-icon"><i class="far fa-text"></i></label>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="message">Message</label>
                <textarea wire:model.live="message" id="message" class="form-control" rows="4" placeholder="write message" required data-error="Please enter your Message"></textarea>
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group mb-0">
                <button type="submit" class="theme-btn">Send Us Message <i class="far fa-angle-right"></i></button>
                    <div wire:loading wire:target="sendMessage" class="spinner-border spinner-border-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>
                  <div wire:loading wire:target="sendMessage" class="spinner-grow spinner-grow-sm" role="status">
                    <span class="visually-hidden">Loading...</span>
                  </div>

                <div id="msgSubmit" class="hidden"></div>
            </div>
        </div>
    </div>
</form>
