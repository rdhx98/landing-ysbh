<!DOCTYPE html>
<html lang="id" class="scroll-smooth motion-reduce:scroll-auto">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Program TBC Terpadu — Yayasan Sinar Bhakti Husada</title>
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
<body class="bg-[#FBF7EA] text-[#12241C] font-['Plus_Jakarta_Sans',sans-serif] antialiased leading-[1.65] overflow-x-hidden">

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
      <a href="artikel-sinar-bhakti-husada.html" class="font-semibold text-[15px] text-[#4B5D53] hover:text-[#064F3B] transition">Artikel</a>
      <a href="sinar-bhakti-husada-landing.html#kontak" class="font-semibold text-[15px] text-[#4B5D53] hover:text-[#064F3B] transition">Kontak</a>
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

  <section class="pt-12 pb-10 sm:pt-[48px] sm:pb-[40px]">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8">
      <div class="flex items-center gap-2 text-[13.5px] text-[#4B5D53] mb-8 flex-wrap reveal">
        <a href="sinar-bhakti-husada-landing.html" class="font-semibold hover:text-[#064F3B]">Beranda</a><span class="opacity-50">/</span>
        <a href="sinar-bhakti-husada-landing.html#program" class="font-semibold hover:text-[#064F3B]">Program</a><span class="opacity-50">/</span>
        <span class="font-bold text-[#064F3B]">TBC</span>
      </div>

      <div class="inline-flex bg-white border border-[#064F3B]/15 rounded-full p-1 gap-0.5 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] mb-6 reveal">
        <button class="lang-btn-id bg-[#064F3B] text-white px-5 py-2 rounded-full font-bold text-[13.5px] transition-colors" onclick="setLang('id')">Bahasa Indonesia</button>
        <button class="lang-btn-en text-[#4B5D53] bg-transparent px-5 py-2 rounded-full font-bold text-[13.5px] transition-colors" onclick="setLang('en')">English</button>
      </div>

      <div class="reveal">
        <div class="w-[72px] h-[72px] rounded-[22px] bg-[#F7EBAF] text-[#064F3B] flex items-center justify-center mb-5.5">
          <svg class="w-[34px] h-[34px]" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6.5 6.5h11v11h-11z"/><path d="M12 2v4.5M12 17.5V22M2 12h4.5M17.5 12H22"/></svg>
        </div>
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Program Kesehatan · Tanah Papua
        </span>

        <h1 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(2rem,4vw,3rem)] font-semibold leading-[1.12] tracking-tight mt-4 mb-5 max-w-[820px] lang-id-content">Program TBC (Tuberculosis) Terpadu</h1>
        <h1 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(2rem,4vw,3rem)] font-semibold leading-[1.12] tracking-tight mt-4 mb-5 max-w-[820px] lang-en-content">Integrated Tuberculosis (TB) Program</h1>

        <p class="text-[18px] text-[#4B5D53] max-w-[760px] lang-id-content">Program TBC dukungan Yayasan Sinar Bhakti Husada (YSBH) telah mendukung pemerintah daerah untuk memastikan bahwa semua masyarakat — termasuk ibu hamil, bayi baru lahir, anak-anak, dan remaja di seluruh wilayah dukungan, termasuk daerah terpencil — memiliki akses ke layanan pemeriksaan TBC yang terintegrasi (terutama dengan program HIV dan KIA), adil dan berkualitas tinggi, terutama di wilayah kerja Puskesmas Model.</p>
        <p class="text-[18px] text-[#4B5D53] max-w-[760px] lang-en-content">The TB program supported by the Sinar Bhakti Husada Foundation (YSBH) has assisted local governments in ensuring that all community members — including pregnant women, newborns, children, and adolescents across supported areas, including remote locations — have access to integrated (particularly with HIV and Maternal and Child Health programs), equitable, and high-quality TB screening services, focused on the service areas of Model Primary Health Centers (Puskesmas).</p>

        <img src="images/tbc-hero.jpg" alt="Bimtek terpadu pencatatan pelaporan TB-HIV" class="w-full rounded-[28px] mt-10 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] object-cover max-h-[420px]">
        <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-id-content">Tim Bimtek terpadu dari YSBH, bekerja sama dengan Dinas Kesehatan Kabupaten Nabire dan Dinas Kesehatan Provinsi Papua Tengah melakukan OJT pencatatan pelaporan TB dan TB-HIV di Puskesmas Wanggar, Kabupaten Nabire. (foto: Yakobus@YSBH, 06 Agustus 2026)</p>
        <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-en-content">YSBH's integrated technical assistance team, in collaboration with the Nabire District Health Office and Central Papua Provincial Health Office, conducts OJT on TB and TB-HIV recording and reporting at Wanggar PHC, Nabire district. (picture: Yakobus@YSBH, 06 August 2026)</p>
      </div>
    </div>
  </section>

  <!-- KONTEKS -->
  <section class="py-14 sm:py-24 bg-[#E9F1EB]">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8 grid md:grid-cols-[0.9fr_1.1fr] gap-9 md:gap-16 items-start">
      <div class="reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Situasi TBC di Papua
        </span>
        <p class="font-['Fraunces',serif] text-[26px] font-medium text-[#064F3B] leading-[1.4] mt-4 lang-id-content">
          Prevalensi TBC tertinggi kedua di dunia — dan Papua adalah salah satu wilayah dengan beban tertinggi secara nasional.
        </p>
        <p class="font-['Fraunces',serif] text-[26px] font-medium text-[#064F3B] leading-[1.4] mt-4 lang-en-content">
          The world's second-highest TB prevalence — and Papua carries one of the nation's highest burdens.
        </p>
      </div>
      <div class="text-[#4B5D53] space-y-4 reveal">
        <p class="lang-id-content">Menurut data Survey Kesehatan Nasional 2014, prevalensi TB secara nasional sebesar 382/100.000 penduduk dengan kematian 94/100.000 penduduk. Laporan program TBC nasional terkini (2025) menunjukkan provinsi-provinsi di Tanah Papua termasuk yang tertinggi prevalensinya secara nasional — sementara prevalensi TBC Indonesia sendiri menduduki posisi kedua tertinggi di dunia setelah India (WHO Global Report 2024). Karena HIV telah menjadi epidemik meluas di Tanah Papua, hal ini secara tidak langsung mengindikasikan kasus TBC juga tinggi dan meluas.</p>
        <p class="lang-id-content">Target nasional 2030 adalah menurunkan insiden TB 80% dari baseline 326/100.000 menjadi 65/100.000 penduduk, serta menurunkan kematian 90% menjadi 6/100.000 penduduk. Program ini berkaitan erat dengan KIA (melalui PPIA dan MTBS) dan P2PM (integrasi TBC dengan HIV-IMS), kerja sama tiga bidang: P2P, Kesmas, dan Yankes.</p>

        <p class="lang-en-content">According to the 2014 National Health Survey, national TB prevalence stood at 382 per 100,000 population, with 94 deaths per 100,000. The latest national TB program report (2025) shows Papua's provinces among the highest in national prevalence — while Indonesia's overall TB prevalence ranks second highest globally after India (WHO Global Report 2024). As HIV has become a widespread epidemic across Papua, this indirectly indicates that TB cases are similarly high and widespread.</p>
        <p class="lang-en-content">The 2030 national target is to reduce TB incidence by 80% from a baseline of 326 to 65 per 100,000 population, and reduce deaths by 90% to 6 per 100,000. This program is closely tied to MCH (through PMTCT and IMCI) and CDC programs (TB integration with HIV/STI), a collaboration across three divisions: CDC, Public Health, and Health Services.</p>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-7">
          <div class="text-center bg-[#064F3B] rounded-[18px] py-5 px-3.5">
            <span class="block font-['Fraunces',serif] font-bold text-[clamp(1.3rem,2.4vw,1.7rem)] text-[#EBCC26]">#2</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-id-content">Prevalensi TBC tertinggi di dunia</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-en-content">Highest TB prevalence globally</span>
          </div>
          <div class="text-center bg-[#064F3B] rounded-[18px] py-5 px-3.5">
            <span class="block font-['Fraunces',serif] font-bold text-[clamp(1.3rem,2.4vw,1.7rem)] text-[#EBCC26]">80%</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-id-content">Target penurunan insiden 2030</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-en-content">2030 incidence reduction target</span>
          </div>
          <div class="text-center bg-[#064F3B] rounded-[18px] py-5 px-3.5">
            <span class="block font-['Fraunces',serif] font-bold text-[clamp(1.3rem,2.4vw,1.7rem)] text-[#EBCC26]">90%</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-id-content">Target penurunan kematian 2030</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-en-content">2030 mortality reduction target</span>
          </div>
          <div class="text-center bg-[#064F3B] rounded-[18px] py-5 px-3.5">
            <span class="block font-['Fraunces',serif] font-bold text-[clamp(1.3rem,2.4vw,1.7rem)] text-[#EBCC26]">1.170</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-id-content">Insiden per 100rb di Papua (estimasi)</span>
            <span class="block text-[11.5px] text-white/80 mt-1.5 leading-[1.4] lang-en-content">Est. incidence per 100k in Papua</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3 KOMPONEN -->
  <section class="py-14 sm:py-24" id="program">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8">
      <div class="max-w-[680px] mb-12 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Tiga Komponen Utama
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-id-content">Program TBC di Wilayah Dukungan YSBH</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-en-content">The TB Program in YSBH-Supported Areas</h2>
        <p class="text-[#4B5D53] text-[16px] mt-3.5 lang-id-content">Diimplementasikan di distrik-distrik terpilih dengan Puskesmas Model, menggunakan pendekatan yang disesuaikan konteks sosial-budaya Papua.</p>
        <p class="text-[#4B5D53] text-[16px] mt-3.5 lang-en-content">Implemented in selected districts with Model Puskesmas, using approaches tailored to Papua's socio-cultural context.</p>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
        <div class="bg-white rounded-[18px] py-[26px] px-[22px] border border-[#064F3B]/15 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
          <div class="font-['Fraunces',serif] font-bold text-[22px] text-[#EBCC26] mb-3">01</div>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[16.5px] font-semibold leading-[1.3] tracking-tight lang-id-content">Pemeriksaan (Skrining) di Populasi Umum</h3>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[16.5px] font-semibold leading-[1.3] tracking-tight lang-en-content">Screening in the General Population</h3>
        </div>
        <div class="bg-white rounded-[18px] py-[26px] px-[22px] border border-[#064F3B]/15 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
          <div class="font-['Fraunces',serif] font-bold text-[22px] text-[#EBCC26] mb-3">02</div>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[16.5px] font-semibold leading-[1.3] tracking-tight lang-id-content">Pemeriksaan (Skrining) di Populasi Kunci</h3>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[16.5px] font-semibold leading-[1.3] tracking-tight lang-en-content">Screening in Key Populations</h3>
        </div>
        <div class="bg-white rounded-[18px] py-[26px] px-[22px] border border-[#064F3B]/15 shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
          <div class="font-['Fraunces',serif] font-bold text-[22px] text-[#EBCC26] mb-3">03</div>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[16.5px] font-semibold leading-[1.3] tracking-tight lang-id-content">Pemeriksaan &amp; Pengobatan pada Ibu dan Anak</h3>
          <h3 class="font-['Fraunces',serif] text-[#064F3B] text-[16.5px] font-semibold leading-[1.3] tracking-tight lang-en-content">Screening &amp; Treatment for Mothers and Children</h3>
        </div>
      </div>
    </div>
  </section>

  <!-- WILAYAH -->
  <section class="py-14 sm:py-24 bg-[#E9F1EB]">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8">
      <div class="max-w-[680px] mb-12 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Wilayah Dampingan
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-id-content">Tersebar di Tanah Papua</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-en-content">Across the Land of Papua</h2>
      </div>
      <div class="rounded-[28px] p-8 border border-[#064F3B]/15 bg-white shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] reveal">
        <div class="inline-flex items-center gap-2 text-[12.5px] font-bold tracking-[0.08em] uppercase px-3.5 py-1.5 rounded-full mb-4.5 bg-[#F7EBAF] text-[#064F3B] lang-id-content">3 Provinsi · 9 Kabupaten</div>
        <div class="inline-flex items-center gap-2 text-[12.5px] font-bold tracking-[0.08em] uppercase px-3.5 py-1.5 rounded-full mb-4.5 bg-[#F7EBAF] text-[#064F3B] lang-en-content">3 Provinces · 9 Regencies</div>
        
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

  <!-- DEEP DIVE 1 -->
  <section class="py-14 sm:py-24">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8">
      <div class="max-w-[680px] mb-12 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Komponen 01 &amp; 02
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-id-content">Pemeriksaan &amp; Pengobatan di Populasi Umum dan Kunci</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-en-content">Screening &amp; Treatment in General and Key Populations</h2>
      </div>

      <div class="grid md:grid-cols-[0.85fr_1.15fr] gap-12 items-start reveal">
        <div class="w-full">
          <img src="images/tbc-population-1.jpg" alt="Verifikasi kartu TB01" class="rounded-[18px] shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] w-full object-cover">
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-id-content">Verifikasi langsung kartu pengobatan pasien (TB01), sekaligus OJT di klinik TB Puskesmas Wanggar, Kabupaten Nabire. (foto: Yakobus@YSBH, 06 Agustus 2026)</p>
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-en-content">Directly verifying patient treatment record card (TB01), while conducting OJT at the TB clinic of Wanggar PHC, Nabire district. (picture: Yakobus@YSBH, 06 August 2026)</p>
        </div>
        <div class="text-[#4B5D53] space-y-4">
          <p class="lang-id-content">Pemeriksaan (skrining) TBC seringkali dilakukan bersamaan dengan skrining HIV melalui pendekatan <em>One Stop Services</em> — setiap orang yang diskrining TBC sekaligus diskrining HIV, dan sebaliknya. Pada ibu hamil, skrining terpadu HIV, Sifilis, Hepatitis B, TBC dan Malaria merupakan skrining rutin wajib saat pemeriksaan kehamilan pertama (ANC1/K1), untuk menekan kesakitan ibu dan mencegah penularan ke janin.</p>
          <p class="lang-id-content">Data nasional 2025 melaporkan insiden TBC di populasi umum Tanah Papua sebesar 1.170/100.000 penduduk (hasil modeling UI dan WHO), jauh di atas cakupan program yang ternotifikasi. Cakupan Investigasi Kontak (IK) serumah dan pemberian TPT (Terapi Pencegahan TBC) masih sangat rendah, terutama bagi kelompok rentan seperti balita dan ODHIV — membuat risiko paparan TBC tetap tinggi di populasi umum maupun kunci.</p>

          <p class="lang-en-content">TB screening is often conducted alongside HIV screening through a "One-Stop Services" approach — anyone screened for TB is simultaneously screened for HIV, and vice versa. For pregnant women, integrated screening for HIV, syphilis, hepatitis B, TB and malaria is a mandatory routine procedure during the first antenatal visit (ANC1/K1), to reduce maternal morbidity and prevent transmission to the fetus.</p>
          <p class="lang-en-content">2025 national data reports a TB incidence of 1,170 per 100,000 population in the general population of Papua (UI and WHO modeling), far above the number of officially notified cases. Coverage of household Contact Investigation (CI) and TB Preventive Therapy (TPT) provision remains very low, especially for vulnerable groups such as toddlers and PLHIV — keeping TB exposure risk high in both general and key populations.</p>
        </div>
      </div>

      <div class="grid md:grid-cols-[0.85fr_1.15fr] gap-12 items-start mt-8 reveal">
        <div class="w-full order-last md:order-last">
          <img src="images/tbc-population-2.jpg" alt="Mesin TCM pemeriksaan TBC" class="rounded-[18px] shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] w-full object-cover">
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-id-content">Mesin TCM untuk pemeriksaan TBC, Viral Load HIV dan Hepatitis di layanan Puskesmas Model. Puskesmas Wanggar masih merujuk sampel ke Puskesmas Kalibumi sebagai laboratorium rujukan. (foto: Yakobus@YSBH, 05 Agustus 2026)</p>
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-en-content">TCM machine for TB, HIV viral load, and Hepatitis testing at Model Puskesmas services. Wanggar PHC still refers samples to Kalibumi PHC as the reference laboratory. (picture: Yakobus@YSBH, 05 August 2026)</p>
        </div>
        <div class="text-[#4B5D53] space-y-4">
          <p class="lang-id-content">Pemeriksaan sesuai standar terutama menggunakan TCM (Tes Cepat Molekular) di fasilitas yang memilikinya. Karena belum semua FKTP/FKTL punya alat TCM, pilihan lain seperti BTA (mikroskop), Rontgen dada, dan Tes Tuberkulin (Mantoux) tetap digunakan. Panduan nasional sudah lama disosialisasikan Kemenkes, namun keterbatasan pelatihan praktis di tempat kerja (<em>on-site training</em>) sering membuat tenaga kesehatan kurang percaya diri melaksanakannya mandiri — sehingga YSBH memperkenalkan penguatan kapasitas lewat pendekatan OJT di Puskesmas Model.</p>
          <p class="lang-en-content">Standard-compliant testing primarily uses TCM (Rapid Molecular Test) at facilities equipped with the device. Since not all primary and referral facilities have TCM, alternatives such as AFB microscopy, chest X-ray, and the Tuberculin Skin Test (Mantoux) remain in use. National guidelines have long been disseminated by the MoH, but limited on-site practical training often leaves health workers lacking confidence to perform screening independently — which is why YSBH introduced capacity strengthening through an OJT approach at Model Puskesmas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DEEP DIVE 2 -->
  <section class="py-14 sm:py-24 bg-[#E9F1EB]">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8">
      <div class="max-w-[680px] mb-12 reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Komponen 03
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-id-content">Pemeriksaan &amp; Pengobatan TBC di Kelompok Rentan</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-en-content">TB Screening &amp; Treatment for Vulnerable Groups</h2>
      </div>

      <div class="grid md:grid-cols-[0.85fr_1.15fr] gap-12 items-start reveal">
        <div class="w-full">
          <img src="images/tbc-population-3.jpg" alt="Presentasi hasil asesmen awal" class="rounded-[18px] shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] w-full object-cover">
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-id-content">Presentasi hasil asesmen awal Puskesmas Wanggar oleh Senior MCH Officer YSBH kepada Dinkes Kabupaten Nabire dan staf Puskesmas Wanggar. (foto: Yakobus@YSBH, 05 Agustus 2026)</p>
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-en-content">Presentation of the initial assessment results for Wanggar PHC by the Senior MCH Officer from YSBH to Nabire DHO and Wanggar PHC staff. (picture: Yakobus@YSBH, 05 August 2026)</p>
        </div>
        <div class="text-[#4B5D53] space-y-4">
          <p class="lang-id-content">Ibu, anak, dan remaja sangat berisiko terpapar kuman TBC dari orang dewasa di lingkungan terdekat. Sayangnya, deteksi TBC pada pemeriksaan kehamilan rutin maupun pemeriksaan anak-remaja belum konsisten dilaksanakan — skrining TBC belum sekaligus dilakukan pada kunjungan ANC1, layanan MTBS, maupun penerimaan siswa baru, padahal kebijakan nasional mewajibkan skrining HIV-TBC berjalan beriringan.</p>
          <p class="lang-id-content">YSBH membantu pendampingan teknis peningkatan kapasitas tenaga kesehatan primer agar mampu memberikan dukungan memadai bagi penderita TBC ibu hamil dan anak-remaja — terutama di Puskesmas Model yang kemudian berfungsi sebagai Puskesmas OJT Center, sehingga Puskesmas lain dapat belajar dari sana.</p>

          <p class="lang-en-content">Mothers, children, and adolescents face high risk of TB exposure from adults in their immediate environment. Unfortunately, TB detection during routine prenatal and child-adolescent check-ups has not been consistently implemented — TB screening is not yet integrated into ANC1 visits, IMCI services, or new student admissions, despite national policy mandating concurrent HIV-TB screening.</p>
          <p class="lang-en-content">YSBH provides technical assistance to build primary healthcare workers' capacity to adequately support pregnant women and children/adolescents with TB — particularly at Model Puskesmas, which then serve as OJT Centers so other health centers can learn from them.</p>
        </div>
      </div>

      <div class="grid md:grid-cols-[0.85fr_1.15fr] gap-12 items-start mt-8 reveal">
        <div class="w-full order-last md:order-last">
          <img src="images/tbc-vulnerable-1.jpg" alt="Kroscek data SITB dan SIHA" class="rounded-[18px] shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] w-full object-cover">
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-id-content">YSBH melakukan kroscek data manual dan laporan data elektronik di SITB dan SIHA Puskesmas Wanggar. (foto: Yakobus@YSBH, 05 Agustus 2026)</p>
          <p class="text-[12.5px] text-[#4B5D53] italic mt-2.5 leading-[1.5] lang-en-content">YSBH conducts a cross-check of manual data and electronic reports in SITB and SIHA at Wanggar PHC. (picture: Yakobus@YSBH, 05 August 2026)</p>
        </div>
        <div class="text-[#4B5D53]">
          <img src="images/tbc-vulnerable-2.jpg" alt="Monitoring stok obat TB-HIV" class="rounded-[18px] shadow-[0_20px_50px_-25px_rgba(6,45,35,0.35)] mb-4 max-w-[220px]">
          <p class="text-[12.5px] text-[#4B5D53] italic -mt-2 mb-4 leading-[1.5] lang-id-content">Memantau ketersediaan logistik TB dan HIV, berdiskusi dengan apoteker RSUD Paniai soal kebutuhan mendesak permintaan ulang obat TB yang stoknya kedaluwarsa Agustus 2026. (foto: Yakobus@YSBH, Enarotali, 10 Juli 2026)</p>
          <p class="text-[12.5px] text-[#4B5D53] italic -mt-2 mb-4 leading-[1.5] lang-en-content">Monitoring the availability of TB and HIV supplies, discussing with Paniai district hospital's pharmacist on the urgent need to request replenishment of TB medication stock expiring August 2026. (picture: Yakobus@YSBH, Enarotali, 10 July 2026)</p>
        </div>
      </div>
    </div>
  </section>

  <!-- DONATION CTA -->
  <section class="py-14 sm:py-24 bg-[#E42326] text-white relative overflow-hidden" id="donasi">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8 grid md:grid-cols-[1.2fr_0.8fr] gap-12 items-center relative z-10">
      <div class="reveal">
        <h2 class="font-['Fraunces',serif] text-white text-[clamp(1.9rem,3.4vw,2.5rem)] font-semibold leading-[1.15] lang-id-content">Dukung Eliminasi TBC di Tanah Papua</h2>
        <h2 class="font-['Fraunces',serif] text-white text-[clamp(1.9rem,3.4vw,2.5rem)] font-semibold leading-[1.15] lang-en-content">Support TB Elimination in the Land of Papua</h2>
        <p class="text-white/90 text-[16.5px] mt-4 mb-7 max-w-[460px] lang-id-content">Bantuan Anda mendukung pendampingan teknis, penguatan Puskesmas Model, dan pelatihan tenaga kesehatan untuk skrining TBC terpadu.</p>
        <p class="text-white/90 text-[16.5px] mt-4 mb-7 max-w-[460px] lang-en-content">Your support funds technical assistance, Model Puskesmas strengthening, and health worker training for integrated TB screening.</p>
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
  <section class="py-14 sm:py-24" id="kontak">
    <div class="max-w-[1180px] mx-auto px-5 sm:px-8 mb-12">
      <div class="max-w-[680px] reveal">
        <span class="inline-flex items-center gap-2.5 text-[13px] font-bold tracking-[0.16em] uppercase text-[#BE1417]">
          <svg class="w-4 h-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 3v2M12 19v2M3 12h2M19 12h2"/></svg>
          Hubungi Kami
        </span>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-id-content">Mari Berdiskusi Soal Kemitraan Program</h2>
        <h2 class="font-['Fraunces',serif] text-[#064F3B] text-[clamp(1.8rem,3vw,2.4rem)] font-semibold mt-3.5 leading-[1.15] tracking-tight lang-en-content">Let's Talk About Program Partnership</h2>
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
        <li><a href="tbc-program-sinar-bhakti-husada.html" class="text-[14.5px] hover:text-[#EBCC26] transition-colors">TBC Terpadu</a></li>
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