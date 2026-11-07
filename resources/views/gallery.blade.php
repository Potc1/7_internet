@extends('layouts.app')

@section('title', 'Полотно — Галерея')

@section('content')
    <div class="flex flex-col gap-[40px] pb-[32px] pt-[48px] px-6 lg:px-[64px] w-full">
        <section class="flex flex-col lg:flex-row items-end justify-between gap-6 w-full">
            <div class="flex flex-col gap-[12px]">
                <span class="text-[10px] text-[#75786f] tracking-wider uppercase">Общий архив</span>
                <h1 class="serif text-[40px] lg:text-[60px] leading-[1.1]">Галерея</h1>
            </div>
            <div class="flex flex-col gap-[12px] max-w-[322px]">
                <div class="text-[13px] text-[#adada5] leading-[1.65]">
                    <p>Все произведения, собранные в нашем цифровом пространстве.</p>
                    <p>Исследуйте разнообразие взглядов и техник.</p>
                </div>
                <span class="text-[11px] text-[#75786f]">Все работы</span>
            </div>
        </section>

        <section class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-[30px] w-full">
            @for ($i = 1; $i <= 12; $i++)
                <div class="painting-card relative h-[400px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic' . ($i > 8 ? ($i-8) : $i) . '.png') }}" alt="Произведение {{ $i }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="serif text-[20px] text-white mb-1">Произведение {{ $i }}</p>
                            <div class="flex items-center justify-between text-[11px] text-white/90">
                                <a href="#" class="flex w-[100%] items-center justify-between text-[11px] text-white/90">
                                    <span>Автор {{ $i }} · 2024</span>
                                    <img src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                                </a>
                            </div>
                    </div>
                </div>
            @endfor
        </section>
    </div>
@endsection
