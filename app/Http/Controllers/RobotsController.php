<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

/**
 * GET /robots.txt  (rute 'robots'). Alamat peta situs mengikuti APP_URL, jadi tidak ada domain yang tertulis di berkas
 * (sebelumnya public/robots.txt menulis domain tetap, dan bisa salah). public/robots.txt HARUS tidak ada: berkas statis
 * dilayani server web lebih dulu dan menutupi rute ini (pemasang landing menghapusnya dengan cadangan).
 */
final class RobotsController
{
    public function __invoke(): Response
    {
        // Rilis 83: Pengaturan > Profil & SEO bisa melarang pengindeksan (dan di luar production selalu melarang). Gagal membaca = tidak melarang.
        try {
            $noindex = (bool) (\App\Content\PublicLookup::profile((string) app()->getLocale())['noindex'] ?? false);
        } catch (\Throwable) {
            $noindex = false;
        }

        return response(self::body(rtrim((string) config('app.url'), '/'), request()->getSchemeAndHttpHost(), $noindex), 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
            'Cache-Control' => $noindex ? 'no-cache' : 'public, max-age=3600',
        ]);
    }

    /** Rilis 83: $noindex = tutup seluruh situs ("Disallow: /", tanpa Sitemap). APP_URL bila berbentuk skema://host[:port] saja; selain itu alamat permintaan ini (sama seperti peta situs). Murni, dapat diuji. */
    public static function body(string $configured, string $requestBase, bool $noindex = false): string
    {
        if ($noindex) {
            return "User-agent: *\nDisallow: /\n";   // rilis 83: situs ditutup dari mesin pencari; tanpa baris Sitemap
        }

        $base = preg_match('#^https?://[A-Za-z0-9.-]+(?::\d{1,5})?$#D', $configured) ? $configured : $requestBase;
        $base = preg_match('#^https?://[A-Za-z0-9.-]+(?::\d{1,5})?$#D', $base) ? $base : '';

        return "User-agent: *\nDisallow:\n" . ($base !== '' ? "\nSitemap: {$base}/sitemap.xml\n" : '');
    }
}
