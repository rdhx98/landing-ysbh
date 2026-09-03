<!DOCTYPE html>
<html lang="id" class="scroll-smooth motion-reduce:scroll-auto">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Program HIV Terpadu — Yayasan Sinar Bhakti Husada</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,500;1,9..144,600&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  /* Sisa CSS Khusus untuk logika bahasa dan animasi scroll */
  .lang-en-content { display: none; }
  body.lang-en .lang-en-content { display: block; }
  body.lang-en .lang-id-content { display: none; }
  
  body.lang-en .lang-btn-id { background: transparent; color: #4B5D53; }
  body.lang-en .lang-btn-en { background: #064F3B; color: #FFFFFF; }

  .reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .reveal.in { opacity: 1; transform: translateY(0); }
</style>
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#FBF7EA] text-[#12241C] font-['Plus_Jakarta_Sans',sans-serif] antialiased leading-relaxed overflow-x-hidden">

<header class="sticky top-0 z-[100] bg-[#FBF7EA]/90 backdrop-blur-md border-b border-[#064F3B]/15">
  <div class="flex items-center justify-between py-4 px-5 sm:px-8 max-w-[1180px] mx-auto">
    <a href="sinar-bhakti-husada-landing.html" class="flex items-center gap-3 w-fit hover:opacity-90 transition">
      <svg class="w-10 h-10 sm:w-[42px] sm:h-[42px]" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="30" cy="30" r="29" fill="#EBCC26"/>
        <path d="M30 46C30 46 14 36.8 14 25.6C14 19.2 19 15 24 15C27 15 29 16.6 30 18.6C31 16.6 33 15 36 15C41 15 46 19.2 46 25.6C46 36.8 30 46 30 46Z" fill="#064F3B"/>
        <rect x="26.5" y="21" width="7" height="17" rx="1.5" fill="white"/>
        <rect x="21.5" y="26" width="17" height="7" rx="1.5" fill="white"/>
      </svg>
      <div class="font-['Fraunces',serif] font-bold text-[17px] text-[#064F3B] leading-tight">
        Sinar Bhakti Husada<span class="block font-['Plus_Jakarta_Sans',sans-serif] font-semibold text-[10.5px] tracking-[0.14em] text-[#E42326] uppercase mt-0.5">Yayasan Kesehatan</span>
      </div>
    </a>
    <nav class="hidden lg:flex items-center gap-8" id="navLinks">
      <a href="sinar-bhakti-husada-landing.html#tentang" class="font-semibold text-[15px] text-[#4B5D53] hover:text-[#064F3B] transition">Tentang</a>
      <a href="sinar-bhakti-husada-landing.html#program" class="font-semibold text-[15px] text-[#4B5D53] hover:text-[#064F3B] transition">Program</a>
      <a href="sinar-bhakti-husada-landing.html#dampak" class="font-semibold text-[15px] text-[#4B5D53] hover:text-[#064F3B] transition">Dampak</a>
      <a href="sinar-bhakti-husada-landing.html#cerita" class="font-semibold text-[15px] text-[#4B5D53] hover:text-[#064F3B] transition">Cerita</a>
      <a href="#kontak" class="font-semibold text-[15px] text-[#4B5D53] hover:text-[#064F3B] transition">Kontak</a>
    </nav>
    <div class="flex items-center gap-4">
      <a href="#kontak" class="hidden lg:inline-flex items-center justify-center gap-2 font-bold text-[14px] px-5 py-2.5 rounded-full border-2 border-[#064F3B] text-[#064F3B] bg-transparent hover:bg-[#064F3B] hover:text-white hover:-translate-y-0.5 transition-all">Hubungi Kami</a>
      <a href="#donasi" class="inline-flex items-center justify-center gap-2 font-bold text-[14px] px-5 py-2.5 rounded-full border-2 border-transparent bg-[#E42326] text-white hover:bg-[#BE1417] hover:-translate-y-0.5 hover:shadow-[0_14px_28px_-14px_rgba(228,35,38,0.55)] transition-all">Donasi Sekarang</a>
      <button class="lg:hidden p-1.5 focus:outline-none" id="burgerBtn" aria-label="Buka menu">
        <span class="block w-6 h-[2.5px] bg-[#064F3B] my-1.5 rounded-sm"></span>
        <span class="block w-6 h-[2.5px] bg-[#064F3B] my-1.5 rounded-sm"></span>
        <span class="block w-6 h-[2.5px] bg-[#064F3B] my-1.5 rounded-sm"></span>
      </button>
    </div>
  </div>
</header>

<main>
  <!-- HERO -->
  <section class="pt-12 pb-8 sm:py-[72px]">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8">
      <div class="flex items-center gap-2 text-[13.5px] text-[#4B5D53] mb-8 flex-wrap reveal">
        <a href="sinar-bhakti-husada-landing.html" class="font-semibold hover:text-[#064F3B]">Beranda</a><span class="opacity-50">/</span>
        <a href="sinar-bhakti-husada-landing.html#program" class="font-semibold hover:text-[#064F3B]">Program</a><span class="opacity-50">/</span>
        <span class="font-bold text-[#064F3B]">HIV Terpadu</span>
      </div>

      <div class="inline-flex bg-white border border-[#064F3B]/15 rounded-full p-1 gap-0.5 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] mb-6 reveal">
        <button class="lang-btn-id bg-[#064F3B] text-white px-5 py-2 rounded-full font-bold text-[13.5px] transition-colors" onclick="setLang('id')">Bahasa Indonesia</button>
        <button class="lang-btn-en text-[#4B5D53] bg-transparent px-5 py-2 rounded-full font-bold text-[13.5px] transition-colors" onclick="setLang('en')">English</button>
      </div>

      <div class="reveal">
        <div class="w-[72px] h-[72px] rounded-[22px] bg-[#FBE6E6] text-[#E42326] flex items-center justify-center mb-5">
          <svg class="w-[34px] h-[34px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/><path d="m9 12 2 2 4-4"/></svg>
        </div>
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Program Kesehatan · Tanah Papua
        </span>

        <h1 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(2rem,4vw,3rem)] font-semibold leading-[1.12] tracking-tight my-4 lang-id-content">Program HIV Terpadu</h1>
        <h1 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(2rem,4vw,3rem)] font-semibold leading-[1.12] tracking-tight my-4 lang-en-content">Integrated HIV Program</h1>

        <p class="text-[18px] text-[#4B5D53] lang-id-content">Program HIV-IMS dan PPIA dukungan Yayasan Sinar Bhakti Husada telah mendukung pemerintah daerah untuk memastikan bahwa semua masyarakat — termasuk ibu hamil, bayi baru lahir, anak-anak, dan remaja di seluruh wilayah dukungan termasuk daerah terpencil — memiliki akses ke layanan Perawatan, Dukungan dan Pengobatan (PDP) yang terintegrasi, adil, dan berkualitas tinggi, terutama di wilayah kerja Puskesmas Model.</p>
        <p class="text-[18px] text-[#4B5D53] lang-en-content">The HIV program supported by the Sinar Bhakti Husada Foundation (YSBH) has assisted local governments in ensuring that all community members — including pregnant women, newborns, children, and adolescents across the supported areas, including remote locations — have access to integrated, equitable, and high-quality Care, Support and Treatment (CST) services, particularly within the service areas of "model" Primary Health Centers (Puskesmas).</p>
      </div>
    </div>
  </section>

  <!-- KONTEKS -->
  <section class="py-12 sm:py-[72px] bg-[#E9F1EB]">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8">
      <div class="text-[16px] text-[#4B5D53] space-y-4 mb-8 reveal">
        <p class="lang-id-content">Menurut hasil Survei Terpadu Biologis dan Perilaku (STBP) di Tanah Papua tahun 2025, prevalensi HIV sebesar 1,4% mengindikasikan bahwa HIV masih menjadi penyakit epidemik meluas di Tanah Papua — walaupun angka ini sudah menurun dibanding STBP tahun 2013 sebesar 2,3% — sehingga tidak ada daerah di Tanah Papua yang benar-benar bebas dari kasus HIV. Sementara itu, insiden Sifilis dan Hepatitis B terus meningkat dari tahun ke tahun, termasuk di kalangan ibu hamil dan bayi baru lahir.</p>
        <p class="lang-en-content">According to the 2025 Integrated Biological and Behavioral Survey (STBP) in the Land of Papua, an HIV prevalence of 1.4% indicates that HIV remains a widespread epidemic disease in the region — although this figure has declined from 2.3% recorded in the 2013 STBP — meaning no area in the Land of Papua is entirely free from HIV cases. Meanwhile, the incidence of syphilis and hepatitis B continues to rise year after year, including among pregnant women and newborns.</p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 my-8 reveal">
        <div class="text-center bg-[#064F3B] rounded-[18px] px-4 py-[26px]">
          <span class="block font-['Fraunces',serif] font-bold text-[clamp(1.6rem,3vw,2.1rem)] text-[#EBCC26]">1,4%</span>
          <span class="block text-[12.5px] text-white/80 mt-1.5 leading-[1.4] lang-id-content">Prevalensi HIV Papua, STBP 2025</span>
          <span class="block text-[12.5px] text-white/80 mt-1.5 leading-[1.4] lang-en-content">HIV prevalence in Papua, 2025 STBP</span>
        </div>
        <div class="text-center bg-[#064F3B] rounded-[18px] px-4 py-[26px]">
          <span class="block font-['Fraunces',serif] font-bold text-[clamp(1.6rem,3vw,2.1rem)] text-[#EBCC26]">2,3% → 1,4%</span>
          <span class="block text-[12.5px] text-white/80 mt-1.5 leading-[1.4] lang-id-content">Penurunan prevalensi sejak STBP 2013</span>
          <span class="block text-[12.5px] text-white/80 mt-1.5 leading-[1.4] lang-en-content">Prevalence decline since 2013 STBP</span>
        </div>
        <div class="text-center bg-[#064F3B] rounded-[18px] px-4 py-[26px]">
          <span class="block font-['Fraunces',serif] font-bold text-[clamp(1.6rem,3vw,2.1rem)] text-[#EBCC26]">2030</span>
          <span class="block text-[12.5px] text-white/80 mt-1.5 leading-[1.4] lang-id-content">Target nasional triple eliminasi</span>
          <span class="block text-[12.5px] text-white/80 mt-1.5 leading-[1.4] lang-en-content">National triple elimination target</span>
        </div>
      </div>

      <div class="text-[16px] text-[#4B5D53] space-y-4 reveal">
        <p class="lang-id-content">Tantangan geografis yang unik di berbagai wilayah dukungan YSBH — yang tersebar di Provinsi Papua, Papua Pegunungan, dan Papua Tengah — dijawab dengan memperkuat kapasitas tenaga medis lokal dan kader posyandu di wilayah kerja Puskesmas Model. Penguatan ini bertujuan untuk merencanakan, melaksanakan, memantau, mengedukasi, dan memberikan layanan PDP komprehensif dan terpadu, termasuk bagi ibu dan bayi baru lahir yang menjadi kelompok paling rentan.</p>
        <p class="lang-id-content">Dukungan YSBH difokuskan pada pencegahan, pengendalian, dan pengeliminasian HIV, Sifilis, dan Hepatitis B — program prioritas nasional yang dikenal sebagai <em>triple eliminasi</em>, ditargetkan tercapai pada 2030. Program ini berkaitan erat dengan Kesehatan Ibu dan Anak melalui Pencegahan Penularan dari Ibu ke Anak (PPIA), serta Penanggulangan dan Pencegahan Penyakit Menular (P2PM) — hasil kerja sama tiga bidang: P2P, Kesmas, dan Yankes.</p>

        <p class="lang-en-content">The unique geographical challenges across YSBH's supported areas — spanning the provinces of Papua, Highland Papua, and Central Papua — are addressed by strengthening the capacity of local medical personnel and posyandu volunteers within the service areas of "model" Puskesmas. This capacity building aims to enable the planning, implementation, monitoring, education, and provision of comprehensive, integrated CST services, including for mothers and newborns as the most vulnerable groups.</p>
        <p class="lang-en-content">YSBH's support focuses on the prevention, control, and elimination of HIV, syphilis, and hepatitis B — a national priority program known as "triple elimination," targeted for 2030. This initiative is closely linked to Maternal and Child Health through the Prevention of Mother-to-Child Transmission (PMTCT) program, and Communicable Disease Prevention and Control — a collaboration across three divisions: Disease Prevention and Control, Public Health, and Health Services.</p>
      </div>
    </div>
  </section>

  <!-- 3 KOMPONEN -->
  <section class="py-12 sm:py-[72px]" id="program">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8">
      <div class="mb-5 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Tiga Komponen Utama
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-id-content">Program HIV-PPIA di Wilayah Dukungan</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-en-content">The HIV-PMTCT Program in Supported Areas</h2>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 mt-2">
        <div class="bg-white rounded-[18px] py-[26px] px-6 border border-[#064F3B]/15 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
          <div class="font-['Fraunces',serif] font-bold text-[22px] text-[#EBCC26] mb-2.5">01</div>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[17px] font-semibold leading-[1.3] mb-2 tracking-tight lang-id-content">Pemeriksaan (Skrining)</h3>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[17px] font-semibold leading-[1.3] mb-2 tracking-tight lang-en-content">Screening</h3>
          <p class="text-[13.5px] text-[#4B5D53] lang-id-content">HIV, Sifilis, Hepatitis B, serta skrining TBC.</p>
          <p class="text-[13.5px] text-[#4B5D53] lang-en-content">HIV, syphilis, hepatitis B, and TB screening.</p>
        </div>
        <div class="bg-white rounded-[18px] py-[26px] px-6 border border-[#064F3B]/15 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
          <div class="font-['Fraunces',serif] font-bold text-[22px] text-[#EBCC26] mb-2.5">02</div>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[17px] font-semibold leading-[1.3] mb-2 tracking-tight lang-id-content">Dukungan</h3>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[17px] font-semibold leading-[1.3] mb-2 tracking-tight lang-en-content">Support</h3>
          <p class="text-[13.5px] text-[#4B5D53] lang-id-content">Bagi pasien dengan hasil skrining positif.</p>
          <p class="text-[13.5px] text-[#4B5D53] lang-en-content">For patients with positive screening results.</p>
        </div>
        <div class="bg-white rounded-[18px] py-[26px] px-6 border border-[#064F3B]/15 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
          <div class="font-['Fraunces',serif] font-bold text-[22px] text-[#EBCC26] mb-2.5">03</div>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[17px] font-semibold leading-[1.3] mb-2 tracking-tight lang-id-content">Pengobatan</h3>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[17px] font-semibold leading-[1.3] mb-2 tracking-tight lang-en-content">Treatment</h3>
          <p class="text-[13.5px] text-[#4B5D53] lang-id-content">Rutin dan berkelanjutan, termasuk bagi ibu hamil.</p>
          <p class="text-[13.5px] text-[#4B5D53] lang-en-content">Routine and ongoing, including for pregnant women.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WILAYAH -->
  <section class="py-12 sm:py-[72px] bg-[#E9F1EB]">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8">
      <div class="mb-5 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Wilayah Dampingan
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-id-content">Tersebar di Tanah Papua</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-en-content">Across the Land of Papua</h2>
      </div>
      <div class="rounded-[28px] p-7 border border-[#064F3B]/15 bg-white shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
        <div class="inline-flex items-center gap-2 text-[12.5px] font-bold tracking-[0.08em] uppercase px-3.5 py-1.5 rounded-full mb-4.5 bg-[#FBE6E6] text-[#BE1417] lang-id-content">3 Provinsi · 9 Kabupaten</div>
        <div class="inline-flex items-center gap-2 text-[12.5px] font-bold tracking-[0.08em] uppercase px-3.5 py-1.5 rounded-full mb-4.5 bg-[#FBE6E6] text-[#BE1417] lang-en-content">3 Provinces · 9 Regencies</div>
        
        <div class="text-[13px] font-bold text-[#4B5D53] uppercase tracking-[0.06em] mt-1 mb-2.5">Papua</div>
        <div class="flex flex-wrap gap-2"><span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Sarmi</span></div>
        
        <div class="text-[13px] font-bold text-[#4B5D53] uppercase tracking-[0.06em] mt-4.5 mb-2.5">Papua Pegunungan</div>
        <div class="flex flex-wrap gap-2">
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Pegunungan Bintang</span>
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Yahukimo</span>
        </div>
        
        <div class="text-[13px] font-bold text-[#4B5D53] uppercase tracking-[0.06em] mt-4.5 mb-2.5">Papua Tengah</div>
        <div class="flex flex-wrap gap-2">
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Nabire</span>
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Mimika</span>
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Paniai</span>
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Deiyai</span>
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Dogiyai</span>
          <span class="bg-[#E9F1EB] text-[#064F3B] font-semibold text-[13.5px] px-3.5 py-1.5 rounded-full">Puncak Jaya</span>
        </div>
      </div>
    </div>
  </section>

  <!-- DEEP DIVE 1: SKRINING -->
  <section class="py-12 sm:py-[72px]">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8">
      <div class="mb-5 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Komponen 01
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-id-content">Pemeriksaan (Skrining) HIV-Sifilis-Hepatitis B serta TBC</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-en-content">Screening for HIV, Syphilis, Hepatitis B and TB</h2>
      </div>

      <div class="text-[16px] text-[#4B5D53] space-y-4 reveal">
        <p class="lang-id-content">Pemeriksaan (skrining) HIV seringkali dilakukan bersamaan dengan skrining Tuberkulosis (TBC), karena menjadi bagian dari program nasional dengan pendekatan <em>One Stop Service</em> — setiap orang yang menjalani skrining HIV akan sekaligus menjalani skrining TBC, dan sebaliknya. Sedangkan pada kelompok ibu hamil, skrining terpadu HIV, Sifilis, Hepatitis B, TBC, dan Malaria merupakan pemeriksaan rutin dan wajib pada kunjungan pemeriksaan kehamilan pertama (ANC 1/K1), bertujuan menekan angka kesakitan pada ibu hamil dan mencegah penularan kepada janin maupun saat bayi dilahirkan.</p>

        <div class="bg-[#F7EBAF] rounded-[18px] px-7 py-6 my-6 reveal">
          <p class="font-['Fraunces',serif] italic text-[17px] text-[#064F3B] leading-relaxed m-0 lang-id-content">Provinsi-provinsi di Tanah Papua masih menjadi wilayah dengan prevalensi triple eliminasi (HIV-Sifilis-Hepatitis B) tertinggi, sekaligus insiden Malaria tertinggi secara nasional.</p>
          <p class="font-['Fraunces',serif] italic text-[17px] text-[#064F3B] leading-relaxed m-0 lang-en-content">Provinces in the Papua region continue to record the nation's highest prevalence of the "triple elimination" diseases (HIV, syphilis, hepatitis B) alongside the highest incidence of malaria.</p>
        </div>

        <p class="lang-id-content">Pemeriksaan yang baik, benar, dan tepat waktu sesuai standar sangat menentukan langkah selanjutnya di bawah komponen dukungan dan pengobatan. Pemeriksaan ini dapat dilaksanakan melalui <em>Rapid Diagnostic Test</em> (RDT) yang relatif mudah dilakukan oleh tenaga kesehatan terlatih, bahkan di daerah dengan fasilitas pendukung sangat terbatas. Meski panduan nasionalnya sudah tersedia, pelatihan praktis di tempat kerja (<em>on-site training</em>) masih terbatas, sehingga kerap menghambat rasa percaya diri tenaga kesehatan untuk melaksanakannya secara mandiri — celah inilah yang coba dijembatani YSBH melalui pendekatan <em>on the job training</em> di Puskesmas Model, termasuk evaluasi berkala pelaksanaan mentoring klinis layanan PDP.</p>

        <p class="lang-en-content">Standard-compliant testing — conducted properly and in a timely manner — is crucial for determining subsequent steps within the support and treatment components. Such testing can be performed using Rapid Diagnostic Tests (RDTs), which are relatively easy for trained health workers to administer, even in areas with limited supporting facilities. Although national guidelines exist, a lack of practical on-site training has often left health workers hesitant to perform testing independently — a gap YSBH addresses through an On-the-Job Training approach at "model" Puskesmas, including regular evaluation of clinical mentoring for CST services.</p>
      </div>
    </div>
  </section>

  <!-- DEEP DIVE 2: DUKUNGAN -->
  <section class="py-12 sm:py-[72px] bg-[#E9F1EB]">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8">
      <div class="mb-5 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Komponen 02
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-id-content">Dukungan Bagi Penderita HIV/AIDS</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-en-content">Support for People Living with HIV/AIDS</h2>
      </div>

      <div class="text-[16px] text-[#4B5D53] space-y-4 reveal">
        <p class="lang-id-content">Orang dengan HIV (ODHIV), termasuk ibu hamil, yang dinyatakan positif melalui skrining di layanan PDP berhak mendapat dukungan komprehensif dari tenaga kesehatan terlatih — mulai dari dukungan mental lewat konseling oleh konselor terlatih, dukungan berjejaring dengan sesama ODHIV, hingga rujukan ke lembaga lain sesuai kebutuhan masing-masing.</p>
        <p class="lang-id-content">Agar dukungan ini efektif, tenaga kesehatan di layanan PDP perlu mendapat pelatihan atau peningkatan kapasitas dari fasilitator terlatih. YSBH membantu pendampingan teknis untuk peningkatan kapasitas ini, terutama di Puskesmas Model yang kemudian berfungsi juga sebagai Puskesmas OJT Center — sehingga Puskesmas lain di sekitarnya dapat belajar langsung dari sana.</p>

        <p class="lang-en-content">Individuals living with HIV/AIDS — including pregnant women — whose test results are positive through screening at CST services are entitled to comprehensive support from trained healthcare personnel, encompassing mental health assistance through counselling, networking opportunities with other people living with HIV/AIDS, and referrals to other institutions based on individual needs.</p>
        <p class="lang-en-content">For this support to be effective, healthcare workers at CST services must receive training or capacity building from qualified facilitators. YSBH provides technical assistance to build this capacity, primarily at "model" Puskesmas, which subsequently serve as On-the-Job-Training centers — allowing other health centers to learn directly from these model facilities.</p>

        <div class="bg-[#E9F1EB] border-l-4 border-[#064F3B] rounded-r-[10px] px-5 py-4 my-5 reveal">
          <div class="text-[11.5px] font-extrabold uppercase tracking-[0.06em] text-[#0E6A4F] mb-1.5 lang-id-content">Contoh dari Lapangan</div>
          <div class="text-[11.5px] font-extrabold uppercase tracking-[0.06em] text-[#0E6A4F] mb-1.5 lang-en-content">Field Example</div>
          <p class="text-[14.5px] text-[#4B5D53] m-0 lang-id-content">Pengaktifan layanan PDP dan PPIA di Puskesmas Enarotali, Kabupaten Paniai, sebagai Puskesmas Model baru — hasil kerja sama YSBH, Dinas Kesehatan Provinsi Papua Tengah, Dinas Kesehatan Kabupaten Paniai, dan Technical Officer Global Fund-AIDS.</p>
          <p class="text-[14.5px] text-[#4B5D53] m-0 lang-en-content">Activation of CST and PMTCT services at Enarotali PHC, Paniai district, as a new "model" Puskesmas — a joint effort by YSBH, Central Papua PHO, Paniai DHO, and the Global Fund-AIDS Technical Officer.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DEEP DIVE 3: PENGOBATAN -->
  <section class="py-12 sm:py-[72px]">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8">
      <div class="mb-5 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Komponen 03
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-id-content">Pengobatan Bagi Penderita HIV/AIDS</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-en-content">Treatment for People Living with HIV/AIDS</h2>
      </div>

      <div class="text-[16px] text-[#4B5D53] space-y-4 reveal">
        <p class="lang-id-content">Selain dukungan mental dan konseling, penderita HIV positif juga harus mendapat pengobatan rutin seumur hidup agar kualitas hidupnya terjaga — termasuk ibu hamil dan bayinya yang positif. Seluruh proses ini tercatat dalam sistem pelaporan berbasis aplikasi bernama SIHA (Sistem Informasi HIV/AIDS), yang juga digunakan untuk pencatatan Infeksi Menular Seksual termasuk Sifilis. Ibu hamil dengan HIV positif perlu segera mendapat pengobatan sejak terdiagnosa, minimal 6 bulan selama kehamilan, agar dapat bersalin normal di Puskesmas — sejalan dengan tujuan program PPIA untuk mencegah penularan HIV dari ibu ke bayinya. Pengobatan HIV harus disertai pengobatan TBC bila hasil skrining TBC juga positif.</p>

        <div class="bg-[#E9F1EB] border-l-4 border-[#064F3B] rounded-r-[10px] px-5 py-4 my-5 reveal">
          <div class="text-[11.5px] font-extrabold uppercase tracking-[0.06em] text-[#0E6A4F] mb-1.5 lang-id-content">Contoh dari Lapangan</div>
          <div class="text-[11.5px] font-extrabold uppercase tracking-[0.06em] text-[#0E6A4F] mb-1.5 lang-en-content">Field Example</div>
          <p class="text-[14.5px] text-[#4B5D53] m-0 lang-id-content">Sekitar <b>150 ODHIV</b> tercatat mulai mendapatkan pengobatan ARV di layanan PDP Puskesmas Model Enarotali, berhasil diinput ke dalam sistem SIHA 2.1 selama kegiatan pendampingan dan OJT bersama fasilitator GF-ATM AIDS.</p>
          <p class="text-[14.5px] text-[#4B5D53] m-0 lang-en-content">Approximately <b>150 people living with HIV</b> began receiving ARV treatment at Enarotali Model PHC's CST services, successfully recorded in the SIHA 2.1 system during technical assistance and OJT activities with GF-ATM AIDS facilitators.</p>
        </div>

        <p class="lang-id-content">Program PPIA tidak hanya menyasar ibu hamil dengan HIV, tetapi juga ibu hamil dengan Sifilis dan Hepatitis B. Semua ibu hamil dengan kedua penyakit ini juga harus mendapat pengobatan selama kehamilan dan setelah persalinan, sementara bayi yang dilahirkan perlu mendapat pengobatan Sifilis dan vaksinasi Hepatitis B untuk mencegah penularan saat proses persalinan. Hasil pengobatan ini dicatat melalui sistem SIHEPI (Sistem Informasi Hepatitis). Untuk memastikan setiap layanan PDP mampu menginisiasi pengobatan rutin secara konsisten, YSBH bekerja sama dengan Dinas Kesehatan Provinsi dan Kabupaten memberikan pendampingan teknis di Puskesmas Model — termasuk memastikan ketersediaan logistik obat, bahan, dan alat diagnostik yang memadai.</p>

        <p class="lang-en-content">The PMTCT program targets not only pregnant women with HIV, but also those with syphilis and hepatitis B. All pregnant women with these conditions must receive treatment during pregnancy and after delivery, while infants born to them require syphilis treatment and the hepatitis B vaccine to prevent transmission during childbirth. Treatment outcomes are recorded via the SIHEPI (Hepatitis Information System). To ensure every CST service can consistently initiate routine treatment, YSBH collaborates with provincial and district health offices to provide technical assistance at "model" Puskesmas — including ensuring consistent, adequate logistics for medicines, materials, and diagnostic equipment.</p>
      </div>
    </div>
  </section>

  <!-- DONATION CTA -->
  <section class="py-12 sm:py-[72px] bg-[#E42326] text-white relative overflow-hidden" id="donasi">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8 grid md:grid-cols-[1.2fr_0.8fr] gap-12 items-center relative z-10">
      <div class="reveal">
        <h2 class="font-['Fraunces',serif] text-white text-[clamp(1.9rem,3.4vw,2.5rem)] font-semibold leading-[1.15] lang-id-content">Dukung Layanan PDP di Tanah Papua</h2>
        <h2 class="font-['Fraunces',serif] text-white text-[clamp(1.9rem,3.4vw,2.5rem)] font-semibold leading-[1.15] lang-en-content">Support CST Services in the Land of Papua</h2>
        <p class="text-white/90 text-[16.5px] mt-4 mb-7 max-w-[460px] lang-id-content">Bantuan Anda mendukung pendampingan teknis, penguatan Puskesmas Model, dan ketersediaan logistik untuk layanan HIV, Sifilis, dan Hepatitis B di wilayah dampingan.</p>
        <p class="text-white/90 text-[16.5px] mt-4 mb-7 max-w-[460px] lang-en-content">Your support funds technical assistance, Model Puskesmas strengthening, and logistics for HIV, syphilis, and hepatitis B services across our assisted areas.</p>
        <div class="flex flex-wrap gap-4">
          <a href="#kontak" class="inline-flex items-center justify-center gap-2 font-bold text-[15.5px] px-7 py-3.5 rounded-full border-2 border-transparent bg-white text-[#064F3B] hover:-translate-y-0.5 hover:shadow-[0_14px_28px_-14px_rgba(0,0,0,0.35)] transition-all lang-id-content">Donasi via Transfer</a>
          <a href="#kontak" class="inline-flex items-center justify-center gap-2 font-bold text-[15.5px] px-7 py-3.5 rounded-full border-2 border-transparent bg-white text-[#064F3B] hover:-translate-y-0.5 hover:shadow-[0_14px_28px_-14px_rgba(0,0,0,0.35)] transition-all lang-en-content">Donate via Bank Transfer</a>
          <a href="#kontak" class="inline-flex items-center justify-center gap-2 font-bold text-[15.5px] px-7 py-3.5 rounded-full border-2 border-white/60 bg-transparent text-white hover:bg-white/10 hover:border-white transition-all lang-id-content">Jadi Mitra Program</a>
          <a href="#kontak" class="inline-flex items-center justify-center gap-2 font-bold text-[15.5px] px-7 py-3.5 rounded-full border-2 border-white/60 bg-transparent text-white hover:bg-white/10 hover:border-white transition-all lang-en-content">Become a Program Partner</a>
        </div>
      </div>
      <div class="bg-white/10 border border-white/30 rounded-[18px] p-7 backdrop-blur-sm reveal">
        <div class="text-[12px] tracking-[0.1em] uppercase text-white/75 mb-2">Transfer Bank</div>
        <div class="font-['Fraunces',serif] text-[22px] font-semibold mb-1">BCA · 123 4567 890</div>
        <div class="text-[14px] text-white/85 mb-4">a.n. Yayasan Sinar Bhakti Husada</div>
        <button class="bg-white text-[#E42326] border-none rounded-full px-4.5 py-2 font-bold text-[13.5px] cursor-pointer" id="copyBtn">Salin Nomor Rekening</button>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="py-12 sm:py-[72px]" id="kontak">
    <div class="max-w-[960px] mx-auto px-5 sm:px-8 mb-6">
      <div class="mb-5 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Hubungi Kami
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-id-content">Mari Berdiskusi Soal Kemitraan Program</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.6rem,2.8vw,2.1rem)] font-semibold mt-3 leading-[1.2] tracking-tight lang-en-content">Let's Talk About Program Partnership</h2>
      </div>
    </div>
    <div class="grid md:grid-cols-2 gap-9 md:gap-14 max-w-[1180px] mx-auto px-5 sm:px-8">
      <div class="reveal">
        <div class="flex gap-4 mb-6">
          <div class="w-11 h-11 rounded-[14px] bg-white border border-[#064F3B]/15 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-[#064F3B]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2Z"/><path d="m22 6-10 7L2 6"/></svg>
          </div>
          <div><div class="font-bold text-[14.5px] text-[#064F3B] mb-1">Email</div><div class="text-[14.5px] text-[#4B5D53]">kontak@sinarbhaktihusada.org</div></div>
        </div>
        <div class="flex gap-4 mb-6">
          <div class="w-11 h-11 rounded-[14px] bg-white border border-[#064F3B]/15 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-[#064F3B]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.9.6 2.8a2 2 0 0 1-.5 2.1L7.9 9.9a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.5c.9.3 1.8.5 2.8.6a2 2 0 0 1 1.7 2Z"/></svg>
          </div>
          <div><div class="font-bold text-[14.5px] text-[#064F3B] mb-1">Telepon / WhatsApp</div><div class="text-[14.5px] text-[#4B5D53]">+62 812-3456-7890</div></div>
        </div>
        <div class="flex gap-4 mb-6">
          <div class="w-11 h-11 rounded-[14px] bg-white border border-[#064F3B]/15 flex items-center justify-center shrink-0">
            <svg class="w-5 h-5 text-[#064F3B]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div><div class="font-bold text-[14.5px] text-[#064F3B] mb-1 lang-id-content">Kantor Sekretariat</div><div class="font-bold text-[14.5px] text-[#064F3B] mb-1 lang-en-content">Secretariat Office</div><div class="text-[14.5px] text-[#4B5D53]">Jl. Melati No. 21, Kupang, Nusa Tenggara Timur</div></div>
        </div>
      </div>
      <div class="rounded-[18px] overflow-hidden border border-[#064F3B]/15 h-full min-h-[280px] bg-[#F3ECD6] flex items-center justify-center text-[#4B5D53] text-[14px] reveal lang-id-content">Peta lokasi kantor dapat ditambahkan di sini</div>
      <div class="rounded-[18px] overflow-hidden border border-[#064F3B]/15 h-full min-h-[280px] bg-[#F3ECD6] flex items-center justify-center text-[#4B5D53] text-[14px] reveal lang-en-content">Office location map can be added here</div>
    </div>
  </section>
</main>

<footer class="bg-[#043328] text-white/75 pt-16 pb-7">
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-[1.4fr_1fr_1fr_1fr] gap-10 max-w-[1180px] mx-auto px-5 sm:px-8 mb-12">
    <div>
      <div class="flex items-center gap-2.5 mb-3.5">
        <svg class="w-9 h-9" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="30" cy="30" r="29" fill="#EBCC26"/>
          <path d="M30 46C30 46 14 36.8 14 25.6C14 19.2 19 15 24 15C27 15 29 16.6 30 18.6C31 16.6 33 15 36 15C41 15 46 19.2 46 25.6C46 36.8 30 46 30 46Z" fill="#064F3B"/>
          <rect x="26.5" y="21" width="7" height="17" rx="1.5" fill="white"/>
          <rect x="21.5" y="26" width="17" height="7" rx="1.5" fill="white"/>
        </svg>
        <span class="font-['Fraunces',serif] font-bold text-white text-[16px]">Sinar Bhakti Husada</span>
      </div>
      <p class="text-[14px] max-w-[280px]">Yayasan kesehatan yang mendampingi ibu, anak, dan komunitas di wilayah terpencil Indonesia sejak 2014.</p>
    </div>
    <div>
      <h4 class="text-white text-[13.5px] tracking-[0.08em] uppercase mb-4.5 font-bold">Program</h4>
      <ul class="list-none p-0 m-0 space-y-3">
        <li><a href="kia-program-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Kesehatan Ibu &amp; Anak</a></li>
        <li><a href="imunisasi-program-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Imunisasi</a></li>
        <li><a href="malaria-program-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Penanganan Malaria</a></li>
        <li><a href="hiv-program-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">HIV Terpadu</a></li>
      </ul>
    </div>
    <div>
      <h4 class="text-white text-[13.5px] tracking-[0.08em] uppercase mb-4.5 font-bold">Yayasan</h4>
      <ul class="list-none p-0 m-0 space-y-3">
        <li><a href="tim-pengurus-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Tim &amp; Pengurus</a></li>
        <li><a href="transparansi-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Transparansi</a></li>
        <li><a href="kredibilitas-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Kredibilitas</a></li>
      </ul>
    </div>
    <div>
      <h4 class="text-white text-[13.5px] tracking-[0.08em] uppercase mb-4.5 font-bold">Ambil Bagian</h4>
      <ul class="list-none p-0 m-0 space-y-3">
        <li><a href="#donasi" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Donasi</a></li>
        <li><a href="#kontak" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Jadi Relawan</a></li>
        <li><a href="#kontak" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">Kerja Sama Program</a></li>
      </ul>
    </div>
  </div>
  <div class="border-t border-white/10 pt-6 flex justify-between flex-wrap gap-3 text-[13px] max-w-[1180px] mx-auto px-5 sm:px-8">
    <span>© 2026 Yayasan Sinar Bhakti Husada. Seluruh hak cipta dilindungi.</span>
    <span>Dibuat dengan bhakti, untuk sinar yang terus menyala.</span>
  </div>
</footer>

<script>
  // Mobile Nav Toggle
  const burger = document.getElementById('burgerBtn');
  const navLinks = document.getElementById('navLinks');
  burger.addEventListener('click', () => {
    navLinks.classList.toggle('hidden');
    navLinks.classList.toggle('flex');
    navLinks.classList.toggle('flex-col');
    navLinks.classList.toggle('absolute');
    navLinks.classList.toggle('top-full');
    navLinks.classList.toggle('left-0');
    navLinks.classList.toggle('w-full');
    navLinks.classList.toggle('bg-[#FBF7EA]');
    navLinks.classList.toggle('border-t');
    navLinks.classList.toggle('border-[#064F3B]/15');
    navLinks.classList.toggle('p-6');
  });

  // Reveal Animation on Scroll
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver((entries) => {
    entries.forEach(e => { if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  }, { threshold: 0.15 });
  revealEls.forEach(el => io.observe(el));

  // Copy to Clipboard
  const copyBtn = document.getElementById('copyBtn');
  copyBtn.addEventListener('click', () => {
    navigator.clipboard.writeText('1234567890').then(() => {
      const original = copyBtn.textContent;
      copyBtn.textContent = 'Tersalin ✓';
      setTimeout(() => copyBtn.textContent = original, 2000);
    });
  });

  // Language Toggle
  function setLang(lang) {
    document.body.classList.toggle('lang-en', lang === 'en');
    document.querySelectorAll('.lang-btn-id, .lang-btn-en').forEach(b => b.classList.remove('bg-[#064F3B]', 'text-white', 'bg-transparent', 'text-[#4B5D53]'));
    
    if(lang === 'id') {
      document.querySelector('.lang-btn-id').classList.add('bg-[#064F3B]', 'text-white');
      document.querySelector('.lang-btn-en').classList.add('bg-transparent', 'text-[#4B5D53]');
    } else {
      document.querySelector('.lang-btn-en').classList.add('bg-[#064F3B]', 'text-white');
      document.querySelector('.lang-btn-id').classList.add('bg-transparent', 'text-[#4B5D53]');
    }
  }
</script>

</body>
</html>