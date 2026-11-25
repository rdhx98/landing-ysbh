{{--
  Rilis 104: tautan bahasa di footer. Rilis 112: diatur di CMS (Pengaturan > Bahasa): nyala/mati dan gaya, "Tautan teks" (bawaan, seperti rilis 104)
  atau "Pil" (ID | EN, garis tipis putih untuk latar hijau footer). Bahasa yang sedang dibuka = teks tebal / penanda (bukan tautan), bahasa lain = tautan
  BIASA ke versi halaman ini (aturan sama dengan <x-layouts.lang-pill>). Tidak tampil bila situs hanya punya satu bahasa. Belum pernah disimpan = bawaan
  (nyala, tautan teks), jadi footer lama tidak berubah.
--}}
@php
    $cfg = \App\Content\Languages::fromConfig();
    $locales = array_values($cfg['locales']);
    $currentLocale = app()->getLocale();
    $alts = is_array($alternates ?? null) ? $alternates : [];
    $languageNames = ['en' => 'English', 'id' => 'Bahasa Indonesia'];
    $footerLang = \App\Content\PublicLookup::languageSwitch();
@endphp
@if (count($locales) > 1 && $footerLang['footer'] && $footerLang['footer_style'] === 'pill')
    <x-layouts.lang-pill variant="footer" :shell="\App\Content\LanguageSwitch::footerClasses()" :class="$attributes->get('class')" data-lang-links="pill" />
@elseif (count($locales) > 1 && $footerLang['footer'])
    <nav aria-label="{{ $currentLocale === 'id' ? 'Bahasa' : 'Language' }}" data-lang-links {{ $attributes->merge(['class' => 'flex flex-wrap items-center gap-x-2 text-sm']) }}>
        <span class="opacity-80">{{ $currentLocale === 'id' ? 'Bahasa:' : 'Language:' }}</span>
        @foreach ($locales as $code)
            @if (! $loop->first)
                <span aria-hidden="true" class="opacity-50">·</span>
            @endif
            @if ($code === $currentLocale)
                <span aria-current="true" lang="{{ $code }}" class="font-bold">{{ $languageNames[$code] ?? strtoupper($code) }}</span>
            @else
                <a href="{{ $alts[$code] ?? \App\Content\Links\LinkResolver::homeAddress($code) ?? '/' }}" hreflang="{{ $code }}" lang="{{ $code }}" class="underline underline-offset-2 hover:opacity-80">{{ $languageNames[$code] ?? strtoupper($code) }}</a>
            @endif
        @endforeach
    </nav>
@endif
