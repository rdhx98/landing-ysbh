{{--
  Rilis 104: tautan bahasa di footer (selalu ada, tanpa pengaturan). Bahasa yang sedang dibuka = teks tebal (bukan tautan), bahasa lain = tautan BIASA
  ke versi halaman ini (aturan sama dengan <x-layouts.lang-pill>). Tidak tampil bila situs hanya punya satu bahasa.
--}}
@php
    $cfg = \App\Content\Languages::fromConfig();
    $locales = array_values($cfg['locales']);
    $currentLocale = app()->getLocale();
    $alts = is_array($alternates ?? null) ? $alternates : [];
    $languageNames = ['en' => 'English', 'id' => 'Bahasa Indonesia'];
@endphp
@if (count($locales) > 1)
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
