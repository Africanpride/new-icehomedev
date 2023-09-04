<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
    <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
        <!-- component -->
        <section class="max-w-7xl px-4 py-8 mx-auto bg-white dark:bg-gray-900 space-y-4">
            <header style="text-align: center;">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Ice Home Development & Construction"
                        style="width: auto; margin: 0 auto; height: 6rem; max-height: 6rem;">
                </a>
            </header>


            <main class="mt-8">
                <h2 class="mt-6 text-gray-700 dark:text-gray-200">{{ __('Hi ') }}{{ $quotation->name ?? '!' }},</h2>

                <p class="mt-2 leading-loose text-gray-600 dark:text-gray-300">
                    {{ __('Thank you for sharing a brief description of your needs with us. We appreciate your interest in Ice Home Development & Construction. Our team will carefully review your requirements, and we will be in touch shortly to discuss your project in more detail and provide you with a customized quote.') }}
                </p>

                {{-- <div class="max-w-4xl container">
                    <iframe class="w-full aspect-video shadow-lg my-10 rounded-lg"
                        src="https://www.youtube.com/embed/L6Jwa7al8os" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div> --}}

                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    Best regards, <br>
                    <br>
                    <span class="font-bold ">{{ __('Management,') }}</span><br>
                    <span class="font-bold">{{ config('app.name') }}</span>

                </p>
            </main>



            <hr class=" border border-gray-600/30 my-4 ">
            <footer class=" text-center container flex justify-center ">

                <div class="space-y-4">
                    <div class="max-w-3xl">
                        <p>
                            This email was sent to {{  $quotation->email }}. If you'd rather not receive this kind of email,
                            you can unsubscribe or manage your email preferences.
                        </p>
                    </div>
                    <div>
                        <div class="text-xl">Ice Home Development & Construction</div>
                        <p class="text-sm text-gray-500  sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">
                            &copy; {{ now()->format('Y') }}. {{ __('All Rights Reserved.') }}
                            https://www.IceHomeDev.com —
                            <a href="https://twitter.com/icehomedev" class="text-gray-600 ml-1 "
                                rel="noopener noreferrer" target="_blank">@IceHomeDev</a>
                        </p>
                    </div>
                </div>


            </footer>

        </section>

    </div>


</body>

</html>
