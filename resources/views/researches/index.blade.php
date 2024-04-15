<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Minhas pesquisas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('research.create') }}" class="text-blue-600 underline hover:text-blue-900">
                        {{ __('Registrar pesquisa') }}
                    </a>
                </div>
            </div>

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
                                        Editar
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Deletar
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
                                    <td class="px-6 py-4 whitespace-normal text-center">
                                        @if($research->status_id ==1) {{--Enviado para análise--}}
                                        <a href="{{ route('research.edit', $research->id) }}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-normal text-center">
                                        @if($research->status_id ==1) {{--Enviado para análise--}}
                                        <a href="{{ route('research.destroy', $research->id)}}" class="text-red-600 hover:text-red-900">Deletar</a>
                                        @endif
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