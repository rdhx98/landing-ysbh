{{--
  Rilis 104: pil bahasa. Satu bagian per bahasa: bahasa yang sedang dibuka = penanda (bukan tautan), bahasa lain = tautan BIASA ke versi
  halaman ini (sama dengan <x-layouts.lang-switch>: tanpa wire:navigate supaya <html lang> ikut berganti; tujuan dari $alternates, halaman yang
  belum diterjemahkan menuju beranda bahasa itu). Tidak tampil bila situs hanya punya satu bahasa.

  Props: variant = plain (header, garis tipis) | glass | solid (pil melayang); shell = kelas pembungkus (bawaan untuk plain: garis tipis hijau).
  Atribut lain (x-data, x-show, ...) diteruskan ke <nav>. Kelas Tailwind semuanya dari App\Content\LanguageSwitch (ditulis utuh di sana).
--}}
@props(['variant' => 'plain', 'shell' => null])
@php
    use App\Content\LanguageSwitch;

    $cfg = \App\Content\Languages::fromConfig();
    $locales = array_values($cfg['locales']);
    $currentLocale = app()->getLocale();
    $alts = is_array($alternates ?? null) ? $alternates : [];
    $languageNames = ['en' => 'English', 'id' => 'Bahasa Indonesia'];
    $shellClass = $shell ?? LanguageSwitch::headerClasses();
@endphp
@if (count($locales) > 1)
    <nav aria-label="{{ $currentLocale === 'id' ? 'Bahasa' : 'Language' }}" data-lang-pill="{{ $variant }}" {{ $attributes->merge(['class' => $shellClass]) }}>
        @foreach ($locales as $code)
            @if ($code === $currentLocale)
                <span aria-current="true" lang="{{ $code }}" title="{{ $languageNames[$code] ?? strtoupper($code) }}" class="{{ LanguageSwitch::segmentClasses($variant, true) }}">{{ strtoupper($code) }}</span>
            @else
                <a href="{{ $alts[$code] ?? \App\Content\Links\LinkResolver::homeAddress($code) ?? '/' }}" hreflang="{{ $code }}" lang="{{ $code }}" title="{{ $languageNames[$code] ?? strtoupper($code) }}" class="{{ LanguageSwitch::segmentClasses($variant, false) }}">{{ strtoupper($code) }}</a>
            @endif
        @endforeach
    </nav>
@endif
