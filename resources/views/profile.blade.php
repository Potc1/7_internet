@extends('layouts.app')

@php
    $authors = [
                ['id' => 0, 'name' => 'Анна Миронова', 'desc' => 'Исследует тему повседневности и света. Работает с маслом и акрилом.', 'works' => 12],
                ['id' => 1, 'name' => 'Игорь Соколов', 'desc' => 'Специализируется на пейзажах и архитектурных формах.', 'works' => 8],
                ['id' => 2, 'name' => 'Елена Власова', 'desc' => 'Сюрреалистические композиции, вдохновленные снами.', 'works' => 15],
                ['id' => 3, 'name' => 'Дмитрий Кот', 'desc' => 'Минимализм и работа с однотонными пространствами.', 'works' => 5],
            ];
@endphp

@section('title', 'Полотно — ')

@section('content')



    <div class="author flex flex-col gap-[40px] pb-[32px] pt-[48px] px-6 lg:px-[64px] w-full">
        <section class="author__profile flex flex-col lg:flex-row items-start justify-between gap-6 w-full">
            <div class="author-profile__container flex flex-col lg:flex-row items-start justify-start gap-6 w-full">
                <div class="relative h-[100px] w-[100px] rounded-[100px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic' . ($id) . '.png') }}" alt="" class="absolute inset-0 w-full h-full object-cover">
                </div>
                <div class="flex flex-col gap-[12px]">
                    <h1 class="serif text-[40px] lg:text-[60px] leading-[1.1]">{{$authors[$id]['name']}}</h1>
                    <span class="text-[10px] text-[#75786f] tracking-wider uppercase">{{$authors[$id]['desc']}}</span>
                </div>
            </div>
            <div class="flex flex-row self-end items-end gap-[12px] max-w-[322px] h-[full] ">
                <span class="text-[11px] text-[#75786f]">{{$authors[$id]['works']}} Произведений</span>
            </div>
        </section>

        <section class="author-content__work grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[40px] w-full">
           @for ($i = 1; $i <= $authors[$id]['works']; $i++)
           <div class="painting-card relative h-[400px] rounded-[4px] overflow-hidden group cursor-pointer">
                    <img src="{{ asset('assets/images/pic' . ($i > 8 ? ($i-8) : $i) . '.png') }}" alt="Произведение {{ $i }}" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="painting-overlay absolute inset-0 bg-gradient-to-b from-transparent from-45% to-black/70 opacity-0 transition-opacity duration-300 flex flex-col justify-end p-5">
                        <p class="painting-card__name serif text-[20px] text-white mb-1">Произведение {{ $i }}</p>
                            <div class="link-container flex items-center justify-between text-[11px] text-white/90">
                                <a href="#" class="link-container__link flex w-[100%] items-center justify-between text-[11px] text-white/90">
                                    <span class="link-container__text">{{ $authors[$id]['name'] }} · 2024</span>
                                    <img clas="link-container__icon"src="{{ asset('assets/images/arrow.svg') }}" alt="link" class="w-4 h-4">
                                </a>
                            </div>
                    </div>
                </div>
            @endfor
        </section>
    </div>
@endsection
