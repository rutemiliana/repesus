<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar pesquisa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('research.update', $research) }}">
                        @csrf
                        @method('patch')


                        <!-- Field -->
                        <div>
                            <x-input-label for="field" :value="__('Campo')" />
                            <textarea id="field" name="field" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('field', $research->field) }}</textarea>
                            <x-input-error :messages="$errors->get('field')" class="mt-4" />
                        </div>

                        <!-- Title -->
                        <div>
                            <x-input-label for="title" :value="__('Título')" />
                            <textarea id="title" name="title" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('title', $research->title) }}</textarea>
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <!-- Authors -->
                        <div>
                            <x-input-label for="authors" :value="__('Autores')" />
                            <textarea id="authors" name="authors" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('authors', $research->authors) }}</textarea>
                            <x-input-error :messages="$errors->get('authors')" class="mt-2" />
                        </div>

                        <!-- Introduction -->
                        <div>
                            <x-input-label for="introduction" :value="__('Introdução')" />
                            <textarea id="introduction" name="introduction" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('introduction', $research->introduction) }}</textarea>
                            <x-input-error :messages="$errors->get('introduction')" class="mt-2" />
                        </div>

                        <!-- Justification -->
                        <div>
                            <x-input-label for="justification" :value="__('Justificativa')" />
                            <textarea id="justification" name="justification" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('justification', $research->justification) }}</textarea>
                            <x-input-error :messages="$errors->get('justification')" class="mt-2" />
                        </div>

                        <!-- Objective -->
                        <div>
                            <x-input-label for="objective" :value="__('Objetivo')" />
                            <textarea id="objective" name="objective" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('objective', $research->objective) }}</textarea>
                            <x-input-error :messages="$errors->get('objective')" class="mt-2" />
                        </div>

                        <!-- Method -->
                        <div>
                            <x-input-label for="method" :value="__('Método')" />
                            <textarea id="method" name="method" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('method', $research->method) }}</textarea>
                            <x-input-error :messages="$errors->get('method')" class="mt-2" />
                        </div>

                        <!-- Schedule -->
                        <div>
                            <x-input-label for="schedule" :value="__('Cronograma')" />
                            <textarea id="schedule" name="schedule" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('schedule', $research->schedule) }}</textarea>
                            <x-input-error :messages="$errors->get('schedule')" class="mt-2" />
                        </div>

                        <!-- feedback -->
                        <div>
                            <x-input-label for="budget" :value="__('Orçamento')" />
                            <textarea id="budget" name="budget" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('budget', $research->budget) }}</textarea>
                            <x-input-error :messages="$errors->get('budget')" class="mt-2" />
                        </div>

                         <!-- Parecer -->
                         @if($research->feedback!= NULL)
                         <div>
                            <x-input-label  class="mt-20" for="feedback" :value="__('Parecer')" />
                            <textarea disabled id="feedback" name="feedback" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>{{ old('feedback', $research->feedback) }}</textarea>
                        </div>
                        @endif
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Salvar') }}
                            </x-primary-button>
                    </form>

                    <x-primary-button class="ms-4 bg-red-500 hover:bg-red-600">
                        <a href="{{ route('research.index') }}">
                            {{ __('Cancelar') }}
                        </a> </x-primary-button>
                </div>
            </div>
        </div>
    </div>
    </div>

</x-app-layout>