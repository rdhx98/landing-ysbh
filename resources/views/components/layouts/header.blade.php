<aside>
    <div x-data="{ isSticky: false }" 
        @scroll.window="isSticky = (window.scrollY >= $refs.contentStart.offsetTop)" 
        class="relative w-full">
        <div class="flex flex-col w-full">
            <header class="shrink-0">
                <div class="bg-white">
                    <div class="flex flex-row justify-between items-stretch">
                        <div class="mx-4 text-forest text-2xl flex items-center py-4">
                            <img src="{{ asset('/ysbh.png') }}" alt="Logo YSBH" class="h-18 mr-8">
                            <span class="text-forest font-bold text-5xl">Yayasan Sinar Bhakti Husada</span>
                        </div>
                        <div class="mx-4 text-forest flex items-center">
                            <button 
                                x-data="{ lang: 'ID' }"
                                @click="lang = lang === 'ID' ? 'EN' : 'ID'; console.log('Bahasa saat ini:', lang);"
                                type="button" class="flex items-center border border-forest rounded-lg p-2 cursor-pointer hover:bg-forest hover:text-white transition-colors">    
                                <x-dynamic-component :component="'lucide-globe'" class="w-4 h-4 mr-2" stroke-width="2"/>
                                <span x-text="lang"></span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="min-h-8 bg-white border-b-2 border-forest">
                    <div class="flex flex-row justify-between items-stretch">
                        <div class="mx-4 text-forest text-lg flex items-center py-1.5">
                            {{-- <img src="{{ asset('/ysbh.png') }}" alt="Logo YSBH" class="h-8 mr-4">
                            <span class="text-forest font-bold">Yayasan Sinar Bhakti Husada</span> --}}
                        </div>
                        <div class="mx-4 text-forest flex items-stretch">
                            @foreach ($navLinks as $link)
                                <a wire:navigate href="{{ route($link['route']) }}" class="flex items-center border-y-4 mr-4 {{ request()->routeIs($link['route']) ? 'text-forest border-b-forest border-t-white' : 'text-forest hover:text-forest border-white' }}">{{ $link['label'] }}</a>
                                
                            @endforeach
                        </div>
                    </div>
                </div>
            </header>
        </div>

        <div x-cloak 
            x-show="isSticky" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="-translate-y-full"
            x-transition:enter-end="translate-y-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-y-0"
            x-transition:leave-end="-translate-y-full"
            class="fixed top-0 inset-x-0 z-50 shadow-lg bg-white">
            <div class="min-h-8 bg-white border-b-2 border-forest">
                <div class="flex flex-row justify-between items-stretch">
                    <div class="mx-4 text-forest text-lg flex items-center py-1.5">
                        <img src="{{ asset('/ysbh.png') }}" alt="Logo YSBH" class="h-8 mr-4">
                        <span class="text-forest font-bold">Yayasan Sinar Bhakti Husada</span>
                    </div>
                    <div class="mx-4 text-forest flex items-stretch">
                        @foreach ($navLinks as $link)
                                <a wire:navigate href="{{ route($link['route']) }}" class="flex items-center border-y-4 mr-4 {{ request()->routeIs($link['route']) ? 'text-forest border-b-forest border-t-white' : 'text-forest hover:text-forest border-white' }}">{{ $link['label'] }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>
