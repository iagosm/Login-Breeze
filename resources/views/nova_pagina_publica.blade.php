<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            Nova Página Publica
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   {{-- Apresentar dados usuario logado --}}
                   @auth
                    <p>Estou logado</p>
                    <p>Usuário: <strong>{{Auth::user()->name}}</strong></p>
                    <p>E-mail: <strong>{{Auth::user()->email}}</strong></p>
                    <p><a href="{{route('main_logout')}}">Logout</a></p>
                   @else
                    <p>não está logado</p>
                    <p>Clique <a href="{{ route('login') }}">aqui</a> para fazer login</p>
                   @endauth
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
