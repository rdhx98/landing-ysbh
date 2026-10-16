{{--
  Rilis 55: isi footer diatur dari CMS (halaman Footer di Navigation builder, komponen content.footer-editor). TATA LETAK di berkas ini tetap sama
  dengan rilis 26; yang berubah hanya sumber isinya: App\Content\PublicLookup::footer($bahasa) membaca tabel site_settings (kunci "footer").
  OPSIONAL dan milik Anda: pemasang tidak menyentuhnya. Salin ke  resources/views/components/layouts/footer.blade.php  di landing.
  - Belum ada yang disimpan dari CMS, tabel belum dibuat, atau data rusak = isi bawaan yang SAMA dengan footer lama. Tidak pernah galat.
  - Bahasa mengikuti alamat (app()->getLocale()). Teks yang belum diterjemahkan memakai bahasa bawaan.
  - Tautan kolom diarahkan ke versi bahasa pembaca (aturan yang sama dengan menu); tanpa pemanggilan rute bernama (aman terhadap pemeriksaan rute hilang).
  - Hak cipta: "{year}" di teksnya diganti tahun berjalan.
  - Ikon kontak: hanya lucide-phone, lucide-map-pin, lucide-mail (telepon, alamat, email); jenis "sosial" memakai ikon teks (mis. "IG").
  - Kolom tanpa tautan atau tanpa kontak tidak ditampilkan; logo tetap berkas /ysbh.png dan nama yayasan tetap di sini (bukan dari CMS).
--}}
@php
    $loc = app()->getLocale() === 'id' ? 'id' : 'en';
    $footer = \App\Content\PublicLookup::footer($loc);
    $icons = ['phone' => 'lucide-phone', 'address' => 'lucide-map-pin', 'email' => 'lucide-mail'];
@endphp
<div class=" bg-forest text-white ">
    <div class="flex items-center justify-center">
        <div class="grid grid-cols-1 md:grid-cols-5 p-12 max-w-7xl">

            <div class="flex flex-col justify-center items-center text-center p-4 md:col-span-2">
                <div class="w-full flex flex-col justify-center md:items-start items-center text-left gap-2">
                    <img src="{{ asset('/ysbh.png') }}" alt="Logo YSBH" class="h-32 my-4">
                    <span class="font-black">Sinar Bhakti Husada</span>
                    @if ($footer['description'] !== '')
                        <span>{{ $footer['description'] }}</span>
                    @endif
                </div>
            </div>
            @foreach ($footer['columns'] as $column)
                <div class="flex flex-col justify-start items-start text-left p-4">
                    @if ($column['heading'] !== '')
                        <div class="text-2xl font-bold mb-3">
                            {{ $column['heading'] }}
                        </div>
                    @endif
                    <div class="flex flex-col justify-start items-start text-left gap-1">
                        @foreach ($column['links'] as $link)
                            <a href="{{ $link['href'] }}"@if ($link['new_tab']) target="_blank" rel="noopener noreferrer"@endif class="hover:opacity-80 transition-opacity cursor-pointer">
                                <span>{{ $link['label'] }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endforeach
            @if ($footer['contacts'] !== [])
                <div class="flex flex-col justify-start items-start text-left p-4">
                    @if ($footer['contact_heading'] !== '')
                        <div class="text-2xl font-bold mb-3">
                            {{ $footer['contact_heading'] }}
                        </div>
                    @endif
                    <div class="flex flex-col justify-start items-start text-left gap-2">
                        @foreach ($footer['contacts'] as $contact)
                            @if ($contact['href'] !== null)
                                <a href="{{ $contact['href'] }}"@if ($contact['external']) target="_blank" rel="noopener noreferrer"@endif class="flex items-center gap-2 hover:opacity-80 transition-opacity cursor-pointer">
                            @else
                                <div class="flex items-center gap-2">
                            @endif
                                @if ($contact['type'] === 'social')
                                    <div class="flex items-center justify-center w-7 h-7 bg-aurum rounded-full text-forest text-xs font-black">{{ $contact['badge'] }}</div>
                                @else
                                    <div class="flex items-center justify-center w-7 h-7 bg-aurum rounded-full">
                                        <x-dynamic-component :component="$icons[$contact['type']] ?? 'lucide-map-pin'" class="w-4 h-4 text-forest" stroke-width="2"/>
                                    </div>
                                @endif
                                <span>{{ $contact['text'] }}</span>
                            @if ($contact['href'] !== null)
                                </a>
                            @else
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
    <div class="border-t-2 border-aurum w-full flex justify-between items-center "></div>
    <div class="flex items-center justify-center">
        <div class="w-full py-4 px-16 flex md:flex-row flex-col justify-between items-center max-w-7xl ">
            <span>{{ $footer['copyright'] }}</span>
            <span>{{ $footer['tagline'] }}</span>
        </div>
    </div>
</div>
