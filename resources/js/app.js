// Dengarkan event navigasi dari Livewire
// OG f(n)
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


// v2
// document.addEventListener('livewire:navigated', () => {
//     const els = document.querySelectorAll('.reveal');
//     if (els.length === 0) return;

//     const hide = ['opacity-0', 'translate-y-6'];
//     const show = ['opacity-100', 'translate-y-0'];

//     els.forEach((el) => {
//         if (el.getBoundingClientRect().bottom < 0) {
//             // sudah terlewati di atas layar (mis. loncat lewat daftar isi): langsung tampil
//             el.classList.remove(...hide);
//             el.classList.add(...show);
//         } else {
//             // siap dianimasikan ulang saat halaman dikunjungi lagi
//             el.classList.add(...hide);
//             el.classList.remove(...show);
//         }
//     });

//     const io = new IntersectionObserver((entries, observer) => {
//         entries.forEach((e) => {
//             if (e.isIntersecting) {
//                 e.target.classList.remove(...hide);
//                 e.target.classList.add(...show);
//                 observer.unobserve(e.target);
//             }
//         });
//     }, { threshold: 0, rootMargin: '0px 0px -12% 0px' });

//     els.forEach((el) => io.observe(el));
// });