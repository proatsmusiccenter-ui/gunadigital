@props(['testimonials' => []])

<section class="py-20 bg-[#edf3ff] border-b border-blue-200/60">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- Section Header -->
        <div class="max-w-2xl space-y-2.5">
            <span class="inline-block px-3 py-1 rounded-full bg-white text-blue-700 border border-blue-200/80 text-xs font-semibold">Ulasan Klien</span>
            <h2 class="font-display text-2xl sm:text-3xl lg:text-4xl font-bold text-slate-900">
                Pengalaman mereka bekerja sama dengan kami
            </h2>
            <p class="text-slate-600 text-sm sm:text-base">
                Kepercayaan klien adalah prioritas utama kami dalam setiap proyek website maupun aplikasi yang kami kerjakan.
            </p>
        </div>

        <!-- 3-Column Review Cards on Soft Blue Canvas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-7 items-stretch">
            @foreach($testimonials as $t)
            <div class="bg-white rounded-2xl p-7 border border-blue-100 shadow-xs flex flex-col justify-between">
                <div class="space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-semibold text-blue-700 bg-blue-50 px-2.5 py-1 rounded-md">
                            {{ $t['service'] }}
                        </span>
                        <div class="flex items-center gap-0.5 text-amber-400 text-xs">
                            @for($i = 0; $i < $t['rating']; $i++)
                                <span>★</span>
                            @endfor
                        </div>
                    </div>

                    <p class="text-slate-600 text-sm leading-relaxed">
                        “{{ $t['content'] }}”
                    </p>
                </div>

                <div class="pt-5 mt-6 border-t border-slate-100 flex items-center gap-3">
                    <img src="{{ $t['avatar'] }}"
                         alt="{{ $t['name'] }}"
                         class="w-10 h-10 rounded-full object-cover border border-blue-100">
                    <div>
                        <h4 class="font-semibold text-slate-900 text-sm">{{ $t['name'] }}</h4>
                        <span class="block text-xs text-slate-500">{{ $t['role'] }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section>
