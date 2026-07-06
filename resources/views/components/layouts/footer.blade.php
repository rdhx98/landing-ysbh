<div class=" bg-forest text-white ">
    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-5 p-12 max-w-7xl">
            <div class="flex flex-col justify-center items-center text-center p-4 col-span-3">
                <div class="w-full flex flex-col justify-center items-start text-left gap-2">
                    <img src="{{ asset('/ysbh.png') }}" alt="Logo YSBH" class="h-32 my-4">
                    <span>Yayasan Sinar Bhakti Husada</span>
                    <span>Berdedikasi untuk meningkatkan akses dan kualitas layanan kesehatan bagi masyarakat di seluruh Indonesia melalui bimbingan teknis dan program komprehensif</span>
    
    
                </div>
            </div>
            <div class="flex flex-col justify-start items-start text-left p-4">
                <div class="text-2xl font-bold mb-3">
                    Kartu Program
                </div>
                <div class="flex flex-col justify-start items-start text-left gap-1">
                    <a href="#"  class="hover:opacity-80 transition-opacity cursor-pointer">
                        <span>Kesehatan Ibu & Anak</span>
                    </a>
                    <span>Malaria</span>
                    <span>Kesehatan Ibu & Anak</span>
                    <span>Imunisasi</span>
                </div>
            </div>
            <div class="flex flex-col justify-start items-start text-left p-4">
                <div class="text-2xl font-bold mb-3">
                    Info Kontak
                </div>
                <div class="flex flex-col justify-start items-start text-left gap-2">
                    <a href="tel:+628124811372" class="flex items-center gap-2 hover:opacity-80 transition-opacity cursor-pointer">
                        <div class="flex items-center justify-center w-7 h-7 bg-aurum rounded-full">
                            <x-dynamic-component :component="'lucide-phone'" class="w-4 h-4 text-forest" stroke-width="2"/>
                        </div>
                        <span>+62 812 4811 372</span>
                    </a>
                    <a href="https://maps.app.goo.gl/QvyfusAt7pUGczqP8" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 hover:opacity-80 transition-opacity cursor-pointer">
                        <div class="flex items-center justify-center w-7 h-7 bg-aurum rounded-full">
                            <x-dynamic-component :component="'lucide-map-pin'" class="w-4 h-4 text-forest" stroke-width="2"/>
                        </div>
                        
                        <span>
                            BTN Umum Blok I No. 155
                            {{-- , Awiyo, Kec. Abepura, Kota Jayapura, Papua 99225, Indonesia --}}
                        </span>
                    </a>
                    <a href="mailto:+6281234567890" class="flex items-center gap-2 hover:opacity-80 transition-opacity cursor-pointer">
                        <div class="flex items-center justify-center w-7 h-7 bg-aurum rounded-full">
                            <x-dynamic-component :component="'lucide-mail'" class="w-4 h-4 text-forest" stroke-width="2"/>
                        </div>
                        <span>contact@ysbh.org</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="border-t-2 border-aurum w-full flex justify-between items-center "></div>
    <div class="flex items-center justify-center">
        <div class="w-full py-4 px-16 flex justify-between items-center max-w-7xl ">
            <span>Yayasan Sinar Bhakti Husada </span>
            <span>&copy; {{ date('Y') }}</span>
        </div>
    </div>
</div>