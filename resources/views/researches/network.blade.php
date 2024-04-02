<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pesquisas em andamento na rede') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                    @endif
                    <div class="overflow-x-auto">
                        <table class="w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Campo
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Título
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Autores
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Status
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Responsável
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Detalhes
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($researches as $research)
                                <tr>
                                    <td class="px-6 py-4 whitespace-normal break-all ">
                                        <div class="text-sm  text-gray-900">{{ $research->field }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-normal break-all">
                                        <div class="text-sm text-gray-500">{{ $research->title }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-normal break-all">
                                        <div class="text-sm text-gray-500">{{ $research->authors }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-normal break-all">
                                        <div class="text-sm text-gray-500">{{ $research->status->description }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-normal break-all">
                                        <div class="text-sm text-gray-500">{{ $research->user->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-normal text-center">
                                        <a href="{{ route('research.detail', $research->id) }}" class="text-indigo-600 hover:text-indigo-900">Ver detalhes</a>
                                    </td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $researches->links() }}
        </div>
    </div>
</x-app-layout>