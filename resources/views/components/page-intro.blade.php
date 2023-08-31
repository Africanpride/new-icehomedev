@props(
[
'action',
'actionLink' => '#',
'primaryColor',
'secondaryColor', 'firstImage' => 'images/services/service040.jpg',
'secondImage' => 'images/services/service039.jpg',
'svgImage',
])

<div>
    <div class="mx-auto max-w-screen-2xl px-4 py-8 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div
                class="bg-{{ $primaryColor }}-600 h-auto p-8 md:px-12 md:py-16 rounded-2xl flex flex-col justify-center text-left relative overflow-hidden">

                <div style="right: -4rem; bottom: -4rem;" class="absolute  -rotate-45 opacity-10 ">
                    <img src="{{ $svgImage ?? asset('images/safety-vest-icon.svg') }}" class="w-48 aspect-square"
                        alt="icehomedev vest">
                </div>

                <div class="mx-auto text-left">

                    <h2
                        class="text-xl {{ $secondaryColor ?? 'text-yellow-300' }}  md:text-3xl md:leading-tight font-['inter'] uppercase  ">
                        {{ $title }}
                    </h2>


                    <p
                        class="mt-4  sm:text-xl/relaxed leading-loose  font-['figtree'] text-white">
                        {{ $content }}
                    </p>

                    <div class="mt-4 md:mt-8 {{ $action ?? 'hidden' }}">
                        <a href="{{ $actionLink }}"
                            class="inline-block rounded border border-white bg-white px-12 py-3 text-sm font-medium text-{{ $primaryColor }}-500 transition hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-{{ $primaryColor }}-400">
                            Get Started Today
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid  gap-4 grid-cols-1 md:grid-cols-2">
                <img alt="Student" src="{{ $firstImage ?? asset('images/services/service040.jpg') }}"
                    class="h-auto w-full object-cover sm:h-56 md:h-full rounded-2xl" />

                <img alt="Student" src="{{ $secondImage ?? asset('images/services/service039.jpg') }}"
                    class="h-auto w-full object-cover sm:h-56 md:h-full rounded-2xl" />

            </div>
        </div>
    </div>
</div>
