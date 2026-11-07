@extends('layouts.app')

@section('title', 'Полотно — Авторы')

@section('content')
    <div class="flex flex-col gap-[40px] pb-[32px] pt-[48px] px-6 lg:px-[64px] w-full">
        <section class="flex flex-col lg:flex-row items-start justify-between gap-6 w-full">
            <div class="flex flex-col gap-[12px]">
                <span class="text-[10px] text-[#75786f] tracking-wider uppercase">Мастера</span>
                <h1 class="serif text-[40px] lg:text-[60px] leading-[1.1]">Авторы</h1>
            </div>
            <div class="flex flex-col gap-[12px] max-w-[322px]">
                <div class="text-[13px] text-[#adada5] leading-[1.65]">
                    <p>Люди, которые создают смыслы через цвет и форму.</p>
                    <p>Познакомьтесь с художниками нашей галереи.</p>
                </div>
                <span class="text-[11px] text-[#75786f]">Список авторов</span>
            </div>
        </section>

        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[40px] w-full">
            @php
                $authors = [
                    ['id' => 0, 'name' => 'Анна Миронова', 'desc' => 'Исследует тему повседневности и света. Работает с маслом и акрилом.', 'works' => 12],
                    ['id' => 1, 'name' => 'Игорь Соколов', 'desc' => 'Специализируется на пейзажах и архитектурных формах.', 'works' => 8],
                    ['id' => 2, 'name' => 'Елена Власова', 'desc' => 'Сюрреалистические композиции, вдохновленные снами.', 'works' => 15],
                    ['id' => 3, 'name' => 'Дмитрий Кот', 'desc' => 'Минимализм и работа с однотонными пространствами.', 'works' => 5],
                ];
            @endphp

            @foreach ($authors as $author)
                <div class="flex flex-col gap-4 p-6 border border-[#353731] rounded-sm hover:border-[#adada5] transition-colors group cursor-pointer">
                    <div class="flex justify-between items-start">
                        <h3 class="serif text-[24px] text-[#f2f0ea] group-hover:text-white transition-colors">{{ $author['name'] }}</h3>
                        <span class="text-[11px] text-[#75786f]">{{ $author['works'] }} работ</span>
                    </div>
                    <p class="text-[13px] text-[#adada5] leading-relaxed">
                        {{ $author['desc'] }}
                    </p>
                    <a href="/authors/author/{{$author['id']}}" class="text-[12px] text-[#f2f0ea] underline underline-offset-4 opacity-60 group-hover:opacity-100 transition-opacity">
                        Смотреть работы
                    </a>
                </div>
            @endforeach
        </section>
    </div>
@endsection
