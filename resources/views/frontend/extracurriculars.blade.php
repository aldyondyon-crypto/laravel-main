@extends('layouts.app')

@section('title', 'Ekstrakurikuler')

@section('content')

    <!-- INNER PAGE HEADER (Smooth Glow & Responsive Breadcrumbs) -->
    <section class="relative py-16 sm:py-24 overflow-hidden border-b border-slate-800/80">
        <div class="absolute inset-0 bg-gradient-to-b from-blue-950/20 via-slate-950 to-[#030712]"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-600/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
            
            <!-- Breadcrumbs -->
            <nav class="flex items-center justify-center space-x-2 text-xs text-slate-400">
                <a href="{{ route('home') }}" class="hover:text-blue-400 transition">Beranda</a>
                <span>/</span>
                <span class="text-blue-400 font-medium">Ekstrakurikuler</span>
            </nav>

            <span data-aos="fade-down" data-aos-duration="600" class="inline-block px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-semibold uppercase tracking-wider">
                Pengembangan Minat & Bakat
            </span>
            <h1 data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight">
                Ekstrakurikuler & Organisasi
            </h1>
            <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="200" class="text-slate-400 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                Wadah bagi peserta didik untuk mengasah jiwa kepemimpinan, kreativitas, kebugaran fisik, serta keterampilan abad 21 di luar jam pembelajaran akademik.
            </p>
        </div>
    </section>

    <!-- MAIN EXTRACURRICULAR CONTENT -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 space-y-12">

        <!-- SEARCH & FILTER BAR (Instant Responsive Real-time Filter) -->
        <div data-aos="fade-up" data-aos-duration="600" class="max-w-xl mx-auto">
            <div class="relative">
                <input type="text" 
                       id="ekskul-search" 
                       placeholder="Cari ekstrakurikuler (contoh: Robotik, Pramuka, Futsal)..." 
                       class="w-full px-5 py-3.5 pl-12 rounded-2xl bg-slate-900/90 border border-slate-700/80 text-white placeholder-slate-500 text-sm focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 backdrop-blur-md transition-all shadow-xl">
                <div class="absolute left-4 top-1/2 -translate-y-1/2 text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
        </div>

        <!-- EXTRACURRICULAR CARDS GRID -->
        <div id="ekskul-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            @forelse($extracurriculars as $index => $ekskul)
                <div data-aos="fade-up" data-aos-duration="700" data-aos-delay="{{ ($index % 3) * 100 }}"
                     class="ekskul-card glass-panel glass-panel-hover rounded-3xl p-6 sm:p-8 flex flex-col justify-between space-y-6 group">
                    
                    <div class="space-y-4">
                        <!-- Icon Header -->
                        <div class="flex items-center justify-between">
                            <div class="w-14 h-14 rounded-2xl bg-blue-600/20 border border-blue-500/30 text-blue-400 flex items-center justify-center shadow-inner group-hover:scale-110 group-hover:rotate-3 transition-transform duration-300">
                                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-slate-900 border border-slate-800 text-slate-400 text-xs font-medium">
                                Aktif
                            </span>
                        </div>

                        <!-- Title & Description -->
                        <div class="space-y-2">
                            <h3 class="ekskul-name text-xl font-bold text-white group-hover:text-blue-400 transition leading-snug">
                                {{ $ekskul->name }}
                            </h3>
                            <p class="ekskul-desc text-slate-400 text-xs sm:text-sm leading-relaxed">
                                {{ $ekskul->description }}
                            </p>
                        </div>
                    </div>

                    <!-- Meta Information: Schedule, Instructor & Location -->
                    <div class="pt-4 border-t border-slate-800/80 space-y-2.5 text-xs text-slate-300">
                        @if($ekskul->schedule)
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span class="text-slate-400">Jadwal:</span>
                                <span class="font-medium text-white">{{ $ekskul->schedule }}</span>
                            </div>
                        @endif

                        @if($ekskul->instructor)
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                                <span class="text-slate-400">Pembina:</span>
                                <span class="font-medium text-white">{{ $ekskul->instructor }}</span>
                            </div>
                        @endif

                        @if($ekskul->location)
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4 text-sky-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span class="text-slate-400">Lokasi:</span>
                                <span class="font-medium text-white">{{ $ekskul->location }}</span>
                            </div>
                        @endif
                    </div>

                    <a href="{{ route('contact') }}" class="w-full py-2.5 rounded-xl bg-slate-900 hover:bg-blue-600 text-slate-300 hover:text-white border border-slate-800 hover:border-blue-500 font-semibold text-xs text-center transition-all duration-300">
                        Konsultasi Pendaftaran →
                    </a>

                </div>
            @empty
                <div class="col-span-full glass-panel rounded-2xl p-12 text-center text-slate-500">
                    Belum ada data ekstrakurikuler yang tersedia.
                </div>
            @endforelse
        </div>

        <div id="no-ekskul-msg" class="hidden glass-panel rounded-2xl p-12 text-center text-slate-400 space-y-2">
            <svg class="w-8 h-8 text-slate-400 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            <h4 class="text-base font-bold text-white">Tidak Ada Ekstrakurikuler yang Sesuai</h4>
            <p class="text-xs text-slate-500">Coba gunakan kata kunci pencarian yang lain.</p>
        </div>

        <!-- JOIN EKSEKUTIF / OSIS PROMOTION -->
        <section data-aos="fade-up" data-aos-duration="800" class="glass-panel rounded-3xl p-8 sm:p-12 text-center bg-gradient-to-r from-blue-950/40 via-slate-900 to-indigo-950/40 border border-blue-500/30 space-y-4">
            <div class="w-14 h-14 rounded-2xl bg-blue-600/20 border border-blue-500/30 text-blue-400 flex items-center justify-center mx-auto">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
            </div>
            <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Ingin Menjadi Pengurus OSIS & MPK?</h3>
            <p class="text-slate-300 text-xs sm:text-sm max-w-xl mx-auto leading-relaxed">
                Organisasi Siswa Intra Sekolah (OSIS) membuka kesempatan bagi setiap siswa berdedikasi untuk melatih kepemimpinan dan mengelola event sekolah.
            </p>
            <div class="pt-2">
                <a href="{{ route('contact') }}" class="inline-flex items-center space-x-2 px-8 py-3.5 rounded-full bg-blue-600 hover:bg-blue-500 text-white font-semibold text-sm shadow-xl shadow-blue-600/30 glow-hover transition-all">
                    <span>Informasi Seleksi Pengurus</span>
                    <span>→</span>
                </a>
            </div>
        </section>

    </main>

@endsection

@push('scripts')
<script>
    // Live Search Filter for Extracurriculars
    const searchInput = document.getElementById('ekskul-search');
    const ekskulCards = document.querySelectorAll('.ekskul-card');
    const noMsg = document.getElementById('no-ekskul-msg');

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const query = e.target.value.toLowerCase().trim();
            let visibleCount = 0;

            ekskulCards.forEach(card => {
                const name = card.querySelector('.ekskul-name')?.textContent.toLowerCase() || '';
                const desc = card.querySelector('.ekskul-desc')?.textContent.toLowerCase() || '';

                if (name.includes(query) || desc.includes(query)) {
                    card.style.display = 'flex';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            if (visibleCount === 0 && query !== '') {
                noMsg.classList.remove('hidden');
            } else {
                noMsg.classList.add('hidden');
            }
        });
    }
</script>
@endpush