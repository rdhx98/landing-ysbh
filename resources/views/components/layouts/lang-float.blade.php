{{--
  Rilis 104: pil bahasa MELAYANG (menempel di tepi layar, ikut saat menggulir). Diatur di CMS (Pengaturan > Bahasa): nyala/mati, letak, kapan
  tampil (langsung atau setelah menggulir), gaya (kaca buram atau solid), dan apakah tampil juga di layar kecil. Dipasang SEKALI di
  header.blade.php, jadi ada di semua halaman tanpa mengubah tata letak. Pada layar kecil letak bawah naik di atas bilah navigasi bawah.
  Tanpa JavaScript pil tetap berupa tautan biasa (mode "setelah menggulir" memakai Alpine; tanpanya pil langsung tampil).
--}}
@php
    use App\Content\LanguageSwitch;

    $s = \App\Content\PublicLookup::languageSwitch();
    $after = LanguageSwitch::SCROLL_AFTER;
@endphp
@if ($s['floating'])
    @if (LanguageSwitch::showsAtOnce($s))
        <x-layouts.lang-pill :variant="$s['style']" :shell="LanguageSwitch::floatClasses($s)" data-lang-float />
    @else
        <x-layouts.lang-pill
            :variant="$s['style']"
            :shell="LanguageSwitch::floatClasses($s)"
            data-lang-float
            x-data="{ show: false }"
            x-init="show = window.scrollY > {{ $after }}"
            x-on:scroll.window.passive="show = window.scrollY > {{ $after }}"
            x-show="show"
            x-cloak
            x-transition.opacity.duration.200ms
        />
    @endif
@endif
