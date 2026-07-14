
//   // Mobile nav toggle
//   const burger = document.getElementById('burgerBtn');
//   const navLinks = document.getElementById('navLinks');
//   burger.addEventListener('click', () => {
//     navLinks.classList.toggle('translate-x-full');
//     navLinks.classList.toggle('translate-x-0');
//   });
//   navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
//     navLinks.classList.add('translate-x-full');
//     navLinks.classList.remove('translate-x-0');
//   }));
// Dengarkan event navigasi dari Livewire
document.addEventListener('livewire:navigated', () => {
const revealEls = document.querySelectorAll('.reveal');

// Jika tidak ada elemen .reveal di halaman ini, hentikan eksekusi
if (revealEls.length === 0) return;

// Opsional: Reset class agar animasi dimainkan ulang saat user kembali ke halaman ini
revealEls.forEach(el => {
    el.classList.add('opacity-0', 'translate-y-6');
    el.classList.remove('opacity-100', 'translate-y-0');
});

const io = new IntersectionObserver((entries, observer) => {
    entries.forEach(e => {
    if (e.isIntersecting) {
        e.target.classList.remove('opacity-0', 'translate-y-6');
        e.target.classList.add('opacity-100', 'translate-y-0');

        // Hentikan pemantauan untuk elemen ini setelah berhasil muncul
        observer.unobserve(e.target);
    }
    });
}, { threshold: 0.15 });

// Mulai pantau semua elemen .reveal
revealEls.forEach(el => io.observe(el));
});

// window.addEventListener('scroll', () => {
//     console.log('Window Scroll Terdeteksi! Posisi:', window.scrollY);
// });

  // Scroll reveal
//   const revealEls = document.querySelectorAll('.reveal');
//   const io = new IntersectionObserver((entries) => {
//     entries.forEach(e => {
//       if (e.isIntersecting) {
//         e.target.classList.remove('opacity-0', 'translate-y-6');
//         e.target.classList.add('opacity-100', 'translate-y-0');
//         io.unobserve(e.target);
//       }
//     });
//   }, { threshold: 0.15 });
//   revealEls.forEach(el => io.observe(el));

//   // Copy account number
//   const copyBtn = document.getElementById('copyBtn');
//   copyBtn.addEventListener('click', () => {
//     navigator.clipboard.writeText('1234567890').then(() => {
//       const original = copyBtn.textContent;
//       copyBtn.textContent = 'Tersalin ✓';
//       setTimeout(() => copyBtn.textContent = original, 2000);
//     });
//   });
