<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    public string $name = '';
    public string $recaptcha_token = '';
    public string $phone_number = '';
    public string $location = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    public function register(): void
    {
        $this->validate([
            'recaptcha_token' => 'required|string',
        ]);

        // ✅ reCAPTCHA Verification
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret'),
            'response' => $this->recaptcha_token,
        ]);

        if (! $response->json('success') || $response->json('score') < 0.5) {
            $this->addError('recaptcha_token', 'reCAPTCHA verification failed. Please try again.');
            return;
        }

        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'numeric', 'digits:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        event(new Registered($user));
        Auth::login($user);
        $this->redirect('/');
    }
};
?>
<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

    <x-auth-session-status class="text-center" :status="session('status')" />

    <form id="registerForm" class="flex flex-col gap-6" onsubmit="handleRegister(event)">
        <flux:input wire:model="name" label="Name" type="text" required autofocus autocomplete="name" placeholder="Full name" />
        @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <input type="hidden" id="recaptcha_token" wire:model.defer="recaptcha_token" />
        @error('recaptcha_token') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <flux:input wire:model="email" label="Email address" type="email" required autocomplete="email" placeholder="email@example.com" />
        @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <flux:input wire:model="location" label="Location address" type="text" required placeholder="Location" />
        @error('location') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <flux:input wire:model="phone_number" label="Phone Number" type="number" required placeholder="Phone Number" />
        @error('phone_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <flux:input wire:model="password" label="Password" type="password" required autocomplete="new-password" placeholder="Password" viewable />
        @error('password') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

        <flux:input wire:model="password_confirmation" label="Confirm password" type="password" required autocomplete="new-password" placeholder="Confirm password" viewable />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">{{ __('Create account') }}</flux:button>
        </div>
    </form>

    <div class="text-center text-sm text-zinc-600 dark:text-zinc-400">
        Already have an account?
        <flux:link :href="route('login')" wire:navigate>Log in</flux:link>
    </div>

    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
    <script>
        function handleRegister(e) {
            e.preventDefault();
            grecaptcha.ready(function () {
                grecaptcha.execute('{{ config('services.recaptcha.site_key') }}', {action: 'register'}).then(function (token) {
                    @this.set('recaptcha_token', token);
                    @this.call('register');
                });
            });
        }
    </script>
</div>
