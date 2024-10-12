<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Username -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Date of Birth -->
        <div class="mt-4">
            <x-input-label for="date_of_birth" :value="__('Date of Birth')" />
            <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date" name="date_of_birth" :value="old('date_of_birth')" required />
            <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
        </div>

        <!-- Currency Dropdown -->
        <div class="mt-4">
            <x-input-label for="currency" :value="__('Currency')" />
            <select id="currency" name="currency" class="block mt-1 w-full" required>
                <option value="pkr" {{ old('currency') == 'pkr' ? 'selected' : '' }}>PKR</option>
                <option value="usd" {{ old('currency') == 'usd' ? 'selected' : '' }}>USD</option>
                <option value="omr" {{ old('currency') == 'omr' ? 'selected' : '' }}>OMR</option>
                <option value="inr" {{ old('currency') == 'inr' ? 'selected' : '' }}>INR</option>
                <option value="eur" {{ old('currency') == 'eur' ? 'selected' : '' }}>EUR</option>
                <option value="gbp" {{ old('currency') == 'gbp' ? 'selected' : '' }}>GBP</option>
                <option value="aed" {{ old('currency') == 'aed' ? 'selected' : '' }}>AED</option>
                <option value="aud" {{ old('currency') == 'aud' ? 'selected' : '' }}>AUD</option>
                <option value="qar" {{ old('currency') == 'qar' ? 'selected' : '' }}>QAR</option>
                <option value="cad" {{ old('currency') == 'cad' ? 'selected' : '' }}>CAD</option>
            </select>
            <x-input-error :messages="$errors->get('currency')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                          type="password"
                          name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
