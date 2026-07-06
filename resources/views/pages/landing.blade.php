<x-layouts.app>
    <x-slot:title>
        Halaman Beranda
    </x-slot>

    <div class="bg-coral-muted">
        landing bitch
        <div x-data="{ count: 0 }" class="p-5">
            <button @click="count++" class="px-4 py-2 bg-blue-500 text-white rounded">
                Klik Saya
            </button>
            <p class="mt-2 text-lg">Tombol diklik: <span x-text="count" class="font-bold"></span> kali</p>
        </div>

        {{-- <livewire:test-counter /> --}}

        <hr style="margin: 20px 0;">

        <div x-data="{ count: 0 }" style="padding: 20px;">
            <button @click="count++" style="padding: 10px; background: blue; color: white;">
                Klik Alpine
            </button>
            <p>Tombol diklik: <span x-text="count"></span> kali</p>
        </div><!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
        landing bitch
        <div x-data="{ count: 0 }" class="p-5">
            <button @click="count++" class="px-4 py-2 bg-blue-500 text-white rounded">
                Klik Saya
            </button>
            <p class="mt-2 text-lg">Tombol diklik: <span x-text="count" class="font-bold"></span> kali</p>
        </div>

        {{-- <livewire:test-counter /> --}}

        <hr style="margin: 20px 0;">

        <div x-data="{ count: 0 }" style="padding: 20px;">
            <button @click="count++" style="padding: 10px; background: blue; color: white;">
                Klik Alpine
            </button>
            <p>Tombol diklik: <span x-text="count"></span> kali</p>
        </div><!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
        landing bitch
        <div x-data="{ count: 0 }" class="p-5">
            <button @click="count++" class="px-4 py-2 bg-blue-500 text-white rounded">
                Klik Saya
            </button>
            <p class="mt-2 text-lg">Tombol diklik: <span x-text="count" class="font-bold"></span> kali</p>
        </div>

        {{-- <livewire:test-counter /> --}}

        <hr style="margin: 20px 0;">

        <div x-data="{ count: 0 }" style="padding: 20px;">
            <button @click="count++" style="padding: 10px; background: blue; color: white;">
                Klik Alpine
            </button>
            <p>Tombol diklik: <span x-text="count"></span> kali</p>
        </div><!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    </div>

</x-layouts.app>
