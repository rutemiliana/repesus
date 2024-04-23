<x-app-layout>
<div class="flex items-center justify-center min-h-screen">
        <div class="max-w-lg bg-white p-8 rounded-lg shadow-lg text-center">
            <h1 class="text-3xl font-bold text-gray-800 mb-4">Bem-Vindo(a) à Rede de Pesquisadores do SUS-DF!</h1>
            <p class="text-lg text-gray-700 mb-4">Olá, {{ Auth::user()->name }}!</p>
            <p class="text-lg text-gray-700 mb-4">É um prazer tê-lo de volta em nossa comunidade dedicada à pesquisa e inovação.</p>
            <p class="text-lg text-gray-700 mb-4">Esperamos que você aproveite ao máximo o seu tempo aqui, colaborando com outros pesquisadores, compartilhando conhecimento e explorando novas descobertas.</p>
            <a href="#" class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg">Explorar Projetos</a>
        </div>
    </div>
</x-app-layout>
