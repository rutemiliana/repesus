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

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" readonly disabled/>
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Cpf -->
        <div>
            <x-input-label for="cpf" :value="__('CPF')" />
            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf', $user->cpf)" required autofocus autocomplete="cpf" maxlength="11" readonly disabled />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <!-- Data de nascimento -->
        <div>
            <x-input-label for="dateOfBirth" :value="__('Data de nascimento')" />
            <x-text-input id="dateOfBirth" class="block mt-1 w-full" type="date" name="dateOfBirth" :value="old('dateOfBirth', $user->dateOfBirth)" required autofocus autocomplete="dateOfBirth" readonly disabled/>
            <x-input-error :messages="$errors->get('dateOfBirth')" class="mt-2" />
        </div>
        <!-- Email -->

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            <!-- @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif -->
        </div>

        <!-- Lattes -->
        <div>
            <x-input-label for="lattes" :value="__('Lattes')" />
            <x-text-input id="lattes" class="block mt-1 w-full" type="text" name="lattes" :value="old('lattes', $user->lattes)" required autofocus autocomplete="lattes" />
            <x-input-error :messages="$errors->get('lattes')" class="mt-2" />
        </div>

        <!-- ORCID -->
        <div>
            <x-input-label for="orcid" :value="__('ORCID')" />
            <x-text-input id="orcid" class="block mt-1 w-full" type="text" name="orcid" :value="old('orcid', $user->orcid)" required autofocus autocomplete="orcid" maxlength="16"/>
            <x-input-error :messages="$errors->get('orcid')" class="mt-2" />
        </div>

        <!-- Vinculo -->
        <div>
            <x-input-label for="affiliationId" :value="__('Vinculo com a RePeSUS')" />
            <select id="affiliationId" class="block mt-1 w-full" name="affiliationId" required autofocus autocomplete="selecao">
                <option value="">Selecione...</option>
                @foreach ($affiliations as $affiliation)
                    <option value="{{ $affiliation->id }}" {{ old('affiliationId', $user->affiliation_id) == $affiliation->id ? 'selected' : '' }}>{{ $affiliation->description }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('affiliationId')" class="mt-2" />
        </div>


        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
