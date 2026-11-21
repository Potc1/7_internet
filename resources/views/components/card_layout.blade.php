<div class="card-wrapp fixed inset-0 w-full h-full top-[96px]">
    <div class="painting-card__overlay fixed inset-0 bg-neutral-900 w-[100%] h-[100%] opacity-50"></div>
        <div class="painting-card top-[30%] translate-y-[-50%] flex flex-col gap-[8px] lg:gap-[16px] lg:flex-row relative h-[auto] p-5 rounded-[10px] border-[1px] border-solid border-[#353731] ml-5 mr-5 group cursor-pointer bg-[#191A18] items-center lg:justify-center">
            <img src="{{ asset('assets/images/pic' . ($i > 8 ? ($i-8) : $i) . '.png') }}" alt="Произведение {{ $i }}" class=" inset-0 w-full h-full max-w-[500px] max-h-[300px] lg:max-h-[500px] object-cover">
            <div class="painting-card__content w-full bg-[#191A18] flex flex-col gap-[4px] lg:gap-[8px] justify-end p-5 lg:justify-center">
                <div class="flex flex-col gap-[4px] lg:gap-[8px] border-[1px] border-solid border-[#353731] items-center justify-between text-[11px] text-white/90">
                    <p class="serif text-[20px] text-white mb-1 items-center">Произведение {{ $i }}</p>
                        <span class="flex w-[100%] items-center justify-center text-[11px] text-white/90">
                            <span>Автор {{ $i }} · 2024</span>
                        </span>
                </div>
                <div class="painting-card__description">
                    <p class="text-[12px] lg:text-[16px]">Создавая произведение, художнику всегда не легко. Тем более в эпоху современных технологий. Ромашки здесь символизируют обычаи крестьянской жизни, а глиянный сосуд - доинсдустриализационную эпоху</p>
                </div>
            </div>
        </div>
    </div>
</div>