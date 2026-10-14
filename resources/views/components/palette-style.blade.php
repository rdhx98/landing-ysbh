{{--
  <x-palette-style /> — palet warna situs (rilis 57). Taruh SATU kali di <head> tata letak landing (sesudah @vite / berkas CSS):
      <x-palette-style />
  Mencetak ":root{--pal-forest:#064F3B; --pal-forest-on:#FFFFFF; ...}" dari pengaturan Palet di CMS (tabel site_settings, kunci "palette").
  Blok @theme di CSS Tailwind (php tools/palette-theme.php) mengarahkan kelas lama (bg-forest, text-coral, ...) ke variabel ini.
  Belum diatur / tabel belum ada / data rusak = warna bawaan; tidak pernah galat. Hanya hex sah yang dicetak, jadi aman dicetak mentah.
--}}
<style data-palette>{!! \App\Content\PublicLookup::paletteCss() !!}</style>
