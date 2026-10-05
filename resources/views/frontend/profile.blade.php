@extends('layouts.app')

@section('title', 'Profil Sekolah')

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
                <span class="text-blue-400 font-medium">Profil Sekolah</span>
            </nav>

            <span data-aos="fade-down" data-aos-duration="600" class="inline-block px-3.5 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/30 text-blue-400 text-xs font-semibold uppercase tracking-wider">
                Mengenal Lebih Dekat
            </span>
            <h1 data-aos="fade-up" data-aos-duration="700" data-aos-delay="100" class="text-3xl sm:text-5xl md:text-6xl font-extrabold text-white tracking-tight">
                Profil & Sejarah Sekolah
            </h1>
            <p data-aos="fade-up" data-aos-duration="700" data-aos-delay="200" class="text-slate-400 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                Komitmen kami dalam melahirkan generasi pembelajar yang berkarakter, berdaya saing global, dan siap menjadi pelopor di era transformasi digital.
            </p>
        </div>
    </section>

    <!-- MAIN PROFILE CONTENT -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 space-y-20">

        <!-- SEJARAH SINGKAT SEKOLAH -->
        <section data-aos="fade-up" data-aos-duration="800" class="glass-panel rounded-3xl p-6 sm:p-10 md:p-12 relative overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <div class="inline-flex items-center space-x-2 text-xs font-bold text-blue-400 uppercase tracking-widest">
                        <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <span>Rekam Jejak Institusi</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">
                        Dedikasi Puluhan Tahun Membangun Generasi Unggul
                    </h2>
                    <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                        Didirikan dengan komitmen kuat terhadap pemerataan pendidikan bermutu, sekolah kami terus bertransformasi menjawab tuntutan zaman. Dari awal berdirinya hingga saat ini, ribuan alumni telah berhasil menembus perguruan tinggi bergengsi dan diserap oleh dunia usaha serta industri multinasional.
                    </p>
                    <p class="text-slate-400 text-sm sm:text-base leading-relaxed">
                        Kami memadukan penguatan pondasi spiritual-moral dengan ketangkasan teknologi (STEM), kepemimpinan, dan kemandirian wirausaha agar setiap lulusan memiliki mentalitas juara.
                    </p>
                </div>
                <div class="lg:col-span-5">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="glass-panel p-5 rounded-2xl text-center space-y-2">
                            <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 text-amber-400 flex items-center justify-center mx-auto">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"/></svg>
                            </div>
                            <div class="text-xl sm:text-2xl font-black text-white">Akreditasi A</div>
                            <p class="text-xs text-slate-400">Standar Nasional Unggul</p>
                        </div>
                        <div class="glass-panel p-5 rounded-2xl text-center space-y-2">
                            <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 flex items-center justify-center mx-auto">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                            </div>
                            <div class="text-xl sm:text-2xl font-black text-white">Adiwiyata</div>
                            <p class="text-xs text-slate-400">Sekolah Ramah Lingkungan</p>
                        </div>
                        <div class="glass-panel p-5 rounded-2xl text-center space-y-2">
                            <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/20 text-blue-400 flex items-center justify-center mx-auto">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
                            </div>
                            <div class="text-xl sm:text-2xl font-black text-white">Digital School</div>
                            <p class="text-xs text-slate-400">LMS & Smart Classroom</p>
                        </div>
                        <div class="glass-panel p-5 rounded-2xl text-center space-y-2">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-indigo-400 flex items-center justify-center mx-auto">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div class="text-xl sm:text-2xl font-black text-white">50+ Mitra</div>
                            <p class="text-xs text-slate-400">Industri & Kampus</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISI & MISI SEKOLAH -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-8">
            
            <!-- Visi Card -->
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" class="glass-panel glass-panel-hover rounded-3xl p-8 sm:p-10 space-y-5 border-t-2 border-t-blue-500">
                <div class="w-14 h-14 rounded-2xl bg-blue-600/20 border border-blue-500/30 text-blue-400 flex items-center justify-center shadow-lg shadow-blue-600/20">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white tracking-tight">Visi Sekolah</h3>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed italic">
                    "Menjadi institusi pendidikan pelopor yang berakhlak mulia, berwawasan lingkungan hidup, dan berdaya saing global melalui penguasaan teknologi terdepan."
                </p>
            </div>

            <!-- Misi Card -->
            <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" class="glass-panel glass-panel-hover rounded-3xl p-8 sm:p-10 space-y-5 border-t-2 border-t-indigo-500">
                <div class="w-14 h-14 rounded-2xl bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 flex items-center justify-center shadow-lg shadow-indigo-600/20">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-2xl font-bold text-white tracking-tight">Misi Sekolah</h3>
                <ul class="text-slate-300 text-xs sm:text-sm space-y-3 leading-relaxed">
                    <li class="flex items-start space-x-3">
                        <span class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        <span>Menyelenggarakan pembelajaran berkualitas berbasis digital dan kurikulum adaptif industri.</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        <span>Membina keimanan, ketaqwaan, serta keluhuran budi pekerti seluruh sivitas akademika.</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        <span>Memfasilitasi pengembangan talenta bakat, kepemimpinan, dan kewirausahaan siswa secara optimal.</span>
                    </li>
                    <li class="flex items-start space-x-3">
                        <span class="w-5 h-5 rounded-full bg-blue-500/20 text-blue-400 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </span>
                        <span>Membangun ekosistem sekolah yang asri, inklusif, sehat, serta berwawasan pelestarian lingkungan.</span>
                    </li>
                </ul>
            </div>

        </section>

        <!-- NILAI-NILAI UTAMA (CORE VALUES) -->
        <section class="space-y-8" data-aos="fade-up" data-aos-duration="800">
            <div class="text-center space-y-2">
                <span class="px-3.5 py-1 rounded-full bg-blue-500/10 text-blue-400 text-xs font-semibold uppercase tracking-wider">Pondasi Budaya</span>
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Nilai-Nilai Luhur Sekolah</h3>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="glass-panel glass-panel-hover rounded-2xl p-6 text-center space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600/20 border border-blue-500/30 text-blue-400 flex items-center justify-center mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h4 class="font-bold text-white text-base">Integritas</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">Menjunjung tinggi kejujuran, tanggung jawab moral, dan etika akademik dalam setiap tindakan.</p>
                </div>
                <div class="glass-panel glass-panel-hover rounded-2xl p-6 text-center space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-amber-600/20 border border-amber-500/30 text-amber-400 flex items-center justify-center mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/></svg>
                    </div>
                    <h4 class="font-bold text-white text-base">Inovatif</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">Berani bereksperimen, berpikir kritis, serta melahirkan solusi kreatif atas setiap permasalahan.</p>
                </div>
                <div class="glass-panel glass-panel-hover rounded-2xl p-6 text-center space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-600/20 border border-emerald-500/30 text-emerald-400 flex items-center justify-center mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                    </div>
                    <h4 class="font-bold text-white text-base">Kolaboratif</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">Mengedepankan semangat gotong royong, empati, dan kerja sama lintas disiplin.</p>
                </div>
                <div class="glass-panel glass-panel-hover rounded-2xl p-6 text-center space-y-3">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-600/20 border border-indigo-500/30 text-indigo-400 flex items-center justify-center mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="font-bold text-white text-base">Disiplin & Mandiri</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">Manajemen waktu yang unggul dan ketangguhan dalam menghadapi dinamika masa depan.</p>
                </div>
            </div>
        </section>

        <!-- DEWAN GURU & TENAGA PENDIDIK (STAFF) -->
        <section id="staff" class="space-y-10" data-aos="fade-up" data-aos-duration="800">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-4 border-b border-slate-800 pb-4">
                <div>
                    <h3 class="text-2xl sm:text-3xl font-extrabold text-white tracking-tight">Tenaga Pendidik & Staf</h3>
                    <p class="text-slate-400 text-xs sm:text-sm mt-1">Pendidik profesional dan berdedikasi membimbing masa depan siswa</p>
                </div>
                <span class="px-3 py-1 rounded-full bg-blue-500/10 text-blue-400 text-xs font-semibold border border-blue-500/30">
                    {{ count($staffs ?? []) }} Pendidik Terdaftar
                </span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @forelse($staffs as $staff)
                    <div class="glass-panel glass-panel-hover rounded-2xl p-6 flex flex-col items-center text-center space-y-4 group">
                        <div class="w-24 h-24 rounded-full overflow-hidden border-2 border-blue-500/40 shadow-lg group-hover:scale-105 transition-transform duration-300">
                            @if($staff->photo)
                                <img src="{{ Str::startsWith($staff->photo, ['http://', 'https://']) ? $staff->photo : asset('storage/' . $staff->photo) }}" 
                                     alt="{{ $staff->name }}" 
                                     class="w-full h-full object-cover">
                            @else
                                <div class="w-full h-full bg-gradient-to-tr from-blue-900 via-slate-800 to-indigo-950 flex items-center justify-center text-blue-400 font-extrabold text-2xl">
                                    {{ strtoupper(substr($staff->name, 0, 2)) }}
                                </div>
                            @endif
                        </div>
                        <div class="space-y-1.5 w-full">
                            <h4 class="font-bold text-white text-base group-hover:text-blue-400 transition leading-snug">
                                {{ $staff->name }}
                            </h4>
                            <span class="inline-block px-2.5 py-0.5 rounded-full bg-blue-500/10 text-blue-400 text-[11px] font-semibold">
                                {{ $staff->position }}
                            </span>
                            @if($staff->bio)
                                <p class="text-slate-400 text-xs line-clamp-2 leading-relaxed pt-2">
                                    {{ $staff->bio }}
                                </p>
                            @endif
                        </div>
                    </div>
                @empty
                    <div class="col-span-full glass-panel rounded-2xl p-8 text-center text-slate-500 text-sm">
                        Data staf dan pengajar sedang diperbarui.
                    </div>
                @endforelse
            </div>
        </section>

    </main>

@endsection