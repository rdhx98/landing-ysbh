{{--
<x-announcement /> — banner dan popup pengumuman (rilis 85), diatur di CMS: Pengaturan > Pengumuman.
Taruh SATU kali di tata letak landing, tepat sesudah <body> (sebelum header), supaya banner berada di paling atas halaman:
    <body ...>
        <x-announcement />
        ...
Banner = pita di atas halaman (tampil sebagai HTML biasa, jadi terlihat bahkan tanpa JavaScript). Popup = jendela di tengah layar yang muncul
setelah jeda; butuh Alpine (sudah dimuat Livewire). Sebagian besar halaman tidak punya pengumuman: komponen ini lalu tidak mencetak apa pun.
Belum diatur / tabel belum ada / data rusak = tidak ada pengumuman; tidak pernah galat (PublicLookup::announcement).
Seberapa sering tampil (frekuensi) diingat di peramban pengunjung (sessionStorage / localStorage), kuncinya memuat sidik isi pengumuman:
mengubah teks / tautan / gambar memunculkannya lagi bagi yang pernah menutupnya. Banner dihitung saat DITUTUP; popup dihitung saat DITAMPILKAN.
Teks selalu dicetak lewat {{ }} (di-escape); tautan sudah lolos SiteFooter::safeHref di PublicLookup.
--}}
@php
  $annLocale = app()->getLocale() === 'id' ? 'id' : 'en';
  $ann = \App\Content\PublicLookup::announcement($annLocale, request()->routeIs('home', 'id.home'));
  $banner = $ann['banner'];
  $popup = $ann['popup'];
  $annClose = $annLocale === 'id' ? 'Tutup' : 'Close';
  $annLabel = $annLocale === 'id' ? 'Pengumuman' : 'Announcement';
@endphp
@if ($banner || $popup)
  <style>[x-cloak]{display:none!important}</style>
@endif

@if ($banner)
  <div
      x-data="{
          open: true,
          k: @js('ysbh.ann.' . $banner['key']),
          f: @js($banner['frequency']),
          store() { return this.f === 'session' ? sessionStorage : localStorage },
          seen() { try { const v = this.store().getItem(this.k); if (!v) return false; return this.f === 'day' ? (Date.now() - Number(v) < 86400000) : true } catch (e) { return false } },
          mark() { try { this.store().setItem(this.k, String(Date.now())) } catch (e) {} },
          init() { if (this.f !== 'always' && this.seen()) this.open = false },
          close() { this.open = false; this.mark() },
      }"
      x-show="open"
      role="region"
      aria-label="{{ $annLabel }}"
      data-announcement="banner"
      class="{{ $banner['class'] }} relative z-40 print:hidden"
      style="{{ $banner['style'] }}"
  >
      <div class="mx-auto flex max-w-7xl items-center gap-3 px-4 py-2.5 text-sm">
          <p class="flex-1 text-center font-medium md:text-left">{{ $banner['message'] }}</p>
          @if ($banner['href'] !== '')
              <a href="{{ $banner['href'] }}"@if ($banner['new_tab']) target="_blank" rel="noopener noreferrer"@endif class="shrink-0 rounded-md border border-current px-3 py-1 font-semibold transition-opacity hover:opacity-80">{{ $banner['button'] }}</a>
          @endif
          @if ($banner['frequency'] !== 'always')
              <button type="button" x-on:click="close()" aria-label="{{ $annClose }}" class="-mr-1 shrink-0 rounded p-1 transition-opacity hover:opacity-70 focus:outline-none focus-visible:ring-2 focus-visible:ring-current">
                  <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M5 5l10 10M15 5L5 15"/></svg>
              </button>
          @endif
      </div>
  </div>
@endif

@if ($popup)
  <div
      x-data="{
          open: false,
          t: null,
          back: null,
          k: @js('ysbh.ann.' . $popup['key']),
          f: @js($popup['frequency']),
          d: @js($popup['delay'] * 1000),
          store() { return this.f === 'session' ? sessionStorage : localStorage },
          seen() { try { const v = this.store().getItem(this.k); if (!v) return false; return this.f === 'day' ? (Date.now() - Number(v) < 86400000) : true } catch (e) { return false } },
          mark() { try { this.store().setItem(this.k, String(Date.now())) } catch (e) {} },
          init() {
              if (this.f !== 'always' && this.seen()) return;
              this.t = setTimeout(() => this.show(), this.d);
          },
          show() {
              this.back = document.activeElement;
              this.open = true;
              document.documentElement.classList.add('overflow-hidden');
              if (this.f !== 'always') this.mark();
              this.$nextTick(() => this.$refs.close && this.$refs.close.focus());
          },
          close() {
              if (!this.open) return;
              this.open = false;
              document.documentElement.classList.remove('overflow-hidden');
              if (this.back && this.back.focus) this.back.focus();
          },
          trap(e) {
              const f = [...this.$refs.dialog.querySelectorAll('a[href],button:not([disabled])')];
              if (!f.length) return;
              const a = f[0], z = f[f.length - 1];
              if (e.shiftKey && document.activeElement === a) { e.preventDefault(); z.focus() }
              else if (!e.shiftKey && document.activeElement === z) { e.preventDefault(); a.focus() }
          },
          destroy() { clearTimeout(this.t); document.documentElement.classList.remove('overflow-hidden') },
      }"
      x-show="open"
      x-cloak
      x-on:keydown.escape.window="close()"
      x-transition:enter="transition ease-out duration-200 motion-reduce:duration-0"
      x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100"
      x-transition:leave="transition ease-in duration-150 motion-reduce:duration-0"
      x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0"
      x-on:click.self="close()"
      data-announcement="popup"
      class="fixed inset-0 z-[100] flex items-center justify-center bg-charcoal/60 p-4 print:hidden"
  >
      <div
          x-ref="dialog"
          x-on:keydown.tab="trap($event)"
          role="dialog"
          aria-modal="true"
          @if ($popup['title'] !== '') aria-labelledby="ann-popup-title" @else aria-label="{{ $annLabel }}" @endif
          class="relative flex max-h-full w-full max-w-lg flex-col overflow-hidden rounded-2xl bg-paper text-charcoal shadow-2xl"
      >
          <div class="{{ $popup['class'] }} h-1.5 shrink-0" style="{{ $popup['style'] }}"></div>
          <button type="button" x-ref="close" x-on:click="close()" aria-label="{{ $annClose }}" class="absolute right-3 top-4 z-10 rounded-full bg-paper/90 p-1.5 text-charcoal shadow transition-opacity hover:opacity-80 focus:outline-none focus-visible:ring-2 focus-visible:ring-forest">
              <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M5 5l10 10M15 5L5 15"/></svg>
          </button>
          <div class="overflow-y-auto">
              @if ($popup['image'] !== '')
                  <img src="{{ $popup['image'] }}" alt="" class="max-h-56 w-full object-cover">
              @endif
              <div class="flex flex-col gap-3 p-6">
                  @if ($popup['title'] !== '')
                      <h2 id="ann-popup-title" class="font-fraunces text-2xl font-bold leading-tight text-forest">{{ $popup['title'] }}</h2>
                  @endif
                  <p class="whitespace-pre-line text-base text-ink-soft">{{ $popup['message'] }}</p>
                  @if ($popup['href'] !== '')
                      <div class="pt-1">
                          <a href="{{ $popup['href'] }}"@if ($popup['new_tab']) target="_blank" rel="noopener noreferrer"@endif x-on:click="close()" style="{{ $popup['style'] }}" class="{{ $popup['class'] }} inline-flex items-center rounded-lg px-5 py-2.5 text-sm font-semibold transition-opacity hover:opacity-90">{{ $popup['button'] }}</a>
                      </div>
                  @endif
              </div>
          </div>
      </div>
  </div>
@endif
