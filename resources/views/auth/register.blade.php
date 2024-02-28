<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        {{--dd($affiliations)--}}
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nome')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Cpf -->
        <div>
            <x-input-label for="cpf" :value="__('Cpf')" />
            <x-text-input id="cpf" class="block mt-1 w-full" type="text" name="cpf" :value="old('cpf')" required autofocus autocomplete="cpf" maxlength="11" />
            <x-input-error :messages="$errors->get('cpf')" class="mt-2" />
        </div>

        <!-- Data de nascimento -->
        <div>
            <x-input-label for="dateOfBirth" :value="__('Data de nascimento')" />
            <x-text-input id="dateOfBirth" class="block mt-1 w-full" type="date" name="dateOfBirth" :value="old('dateOfBirth')" required autofocus autocomplete="dateOfBirth" />
            <x-input-error :messages="$errors->get('dateOfBirth')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Lattes -->
        <div>
            <x-input-label for="lattes" :value="__('Lattes')" />
            <x-text-input id="lattes" class="block mt-1 w-full" type="text" name="lattes" :value="old('lattes')" required autofocus autocomplete="lattes" />
            <x-input-error :messages="$errors->get('lattes')" class="mt-2" />
        </div>

        <!-- ORCID -->
        <div>
            <x-input-label for="orcid" :value="__('ORCID')" />
            <x-text-input id="orcid" class="block mt-1 w-full" type="text" name="orcid" :value="old('orcid')" required autofocus autocomplete="orcid" maxlength="16"/>
            <x-input-error :messages="$errors->get('orcid')" class="mt-2" />
        </div>

        <!-- Vinculo -->
        <div>
            <x-input-label for="affiliationId" :value="__('Vinculo com a RePeSUS')" />
            <select id="affiliationId" class="block mt-1 w-full" name="affiliationId" required autofocus autocomplete="selecao">
                <option value="">Selecione...</option>
                @foreach ($affiliations as $affiliation)
                    <option value="{{ $affiliation->id }}" {{ old('affiliationId') == $affiliation->id ? 'selected' : '' }}>{{ $affiliation->description }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('affiliationId')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Já possui registro?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
