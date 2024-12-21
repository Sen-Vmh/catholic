<div>
    <div class="mb-4 text-sm text-gray-600">
        Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we
        just emailed to you?
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new verification link has been sent.
        </div>
    @endif

    <button wire:click="resend">
        Resend Verification Email
    </button>
</div>
