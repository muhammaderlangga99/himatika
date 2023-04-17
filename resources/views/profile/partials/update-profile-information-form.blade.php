<style>
    trix-toolabar [data-trix-button-group="file-tools"] {
        display: none !important;
    }
</style>
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="flex w-full">
            <div class="mb-3">
                <label for="formFile" class="form-label mb-2 text-gray-700">Foto profil</label>
                <input class="form-input w-full block bg-slate-50 rounded-lg" type="file" id="formFile"
                    name="profile">
                <x-input-error class="mt-2" :messages="$errors->get('profile')" />
            </div>
        </div>

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)"
                required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
                required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification"
                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div>
            <x-input-label for="instagram" :value="__('Instagram')" />
            <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" :value="old('instagram', $user->instagram)"
                required autocomplete="instagram" />
            <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
        </div>

        <div>
            <x-input-label for="Github" :value="__('Github')" />
            <x-text-input id="Github" name="github" type="text" class="mt-1 block w-full" :value="old('github', $user->github)"
                required autofocus autocomplete="github" />
            <x-input-error class="mt-2" :messages="$errors->get('github')" />
        </div>

        <div>
            <x-input-label for="intro" :value="__('Introduce Yourself')" class="mb-2" />
            <input id="intro" type="hidden" name="bio" value="{{ old('bio', $user->bio) }}">
            <trix-editor input="intro" placeholder="isi sebanyak-banyaknya tentangmu disini*"></trix-editor>
            <x-input-error class="mt-2" :messages="$errors->get('bio')" />
        </div>

        <div class="flex items-center gap-4 mt-2">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
