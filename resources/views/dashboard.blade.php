<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white p-6 rounded shadow">
                <h3 class="text-lg font-bold mb-4">Menu Utama</h3>

                <a href="{{ route('lagu.index') }}"
                   class="bg-blue-600 text-white px-4 py-2 rounded">
                    Kelola Data Lagu
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
