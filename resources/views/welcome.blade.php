@extends('layouts.app')

@section('title', 'Полотно — Избранное')

@section('content')
    <div class="flex flex-col gap-[40px] pb-[32px] pt-[48px] px-6 lg:px-[64px] w-full">
        <!-- Introduction -->
        <section class="flex flex-col lg:flex-row items-start justify-between gap-6 w-full ">
            <div class="flex flex-col gap-[12px]">
                <span class="text-[10px] text-[#75786f] tracking-wider uppercase">Коллекция № 01</span>
                <h1 class="serif text-[40px] lg:text-[60px] leading-[1.1]">Избранное</h1>
            </div>
            <div class="flex flex-col gap-[12px] max-w-[322px]">
                <div class="text-[13px] text-[#adada5] leading-[1.65]">
                    <p>Свет, тишина и повседневность.</p>
                    <p>Восемь работ, которые хочется рассматривать.</p>
                </div>
                <span class="text-[11px] text-[#75786f]">08 произведений</span>
            </div>
        </section>

        <!-- Gallery Grid -->
        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[20px] w-full">
            <!-- Column 1 -->
            <div class="flex flex-col gap-[20px]">
                <div class="painting-card relative h-[401px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic1.png') }}" alt="Между небом и водой" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Между небом и водой</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Анна Миронова · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
                <div class="painting-card relative h-[263px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic2.png') }}" alt="Три груши" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Три груши</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Автор · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="flex flex-col gap-[20px]">
                <div class="painting-card relative h-[363px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic3.png') }}" alt="Свет в мастерской" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Свет в мастерской</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Автор · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
                <div class="painting-card relative h-[282px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic4.png') }}" alt="Отражения" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Отражения</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Автор · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 3 -->
            <div class="flex flex-col gap-[20px]">
                <div class="painting-card relative h-[413px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic5.png') }}" alt="Полевые цветы" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Полевые цветы</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Автор · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
                <div class="painting-card relative h-[238px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic6.png') }}" alt="Линия холмов" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Линия холмов</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Автор · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Column 4 -->
            <div class="flex flex-col gap-[20px]">
                <div class="painting-card relative h-[438px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic7.png') }}" alt="После полудня" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">После полудня</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Автор · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
                <div class="painting-card relative h-[269px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic8.png') }}" alt="Тёплая земля" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Тёплая земля</p>
                        <div class="flex items-center justify-between text-[11px] text-white/90">
                            <span>Автор · 2024</span>
                            <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
