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
        <section class="max-w-3xl px-6 py-8 mx-auto bg-white dark:bg-gray-900">
            <header>
                <a href="{{ route('home') }}">
                    <img class="w-auto mx-auto h-24 sm:h-24" src="{{ asset('images/logo.png') }}"
                        alt="Ice Home Development & Construction">
                </a>
            </header>

            <main class="mt-8">
                {{-- <h2 class="text-gray-700 dark:text-gray-200">Hi ,</h2> --}}

                <div>
                    A potential client, <span class="font-bold">{{ $quotation->name ?? '' }}</span> has expressed
                    interest in our services. Below are the details provided. Kindly review and respond accordingly.
                </div>



                <div class="my-5">
                    <table class="min-w-full border-collapse border border-gray-300">
                        <thead>
                            <tr class="bg-gray-200 dark:bg-gray-950 dark:text-white">
                                <th class=" border border-gray-300 px-4 py-2">Item</th>
                                <th class=" border border-gray-300 px-4 py-2">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Name</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $quotation->name }}</td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Telephone</td>
                                <td class="border border-gray-300 px-4 py-2"><a href="tel:{{ $quotation->telephone }}">{{ $quotation->telephone }}</a></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Email</td>
                                <td class="border border-gray-300 px-4 py-2"><a href="mailto:{{ $quotation->email }}">{{ $quotation->email }}</a></td>
                            </tr>
                            <tr>
                                <td class="border border-gray-300 px-4 py-2">Request Description</td>
                                <td class="border border-gray-300 px-4 py-2">{{ $quotation->description }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    Thanks, <br>
                    {{ __('Ice Home Development & Construction Team') }}
                </p>

            </main>


            <footer class="mt-8">
                <p class="text-gray-500 dark:text-gray-400 text-[12px]">
                    <span class="font-bold">{{ __('Confidentiality Notice: ') }}</span>This email, including any
                    attachments, may contain confidential information intended solely for the recipient. If you are not
                    the intended recipient, please notify us immediately, delete this email, and refrain from disclosing
                    its contents. This email was sent to <a href="mailto:info@icehomedev.com"><span
                            class="font-bold">info@icehomedev.com.</span></a> Thank you.
                </p>

                <p class="mt-3 text-gray-500 dark:text-gray-400 text-[14px]">&copy; {{ now()->format('Y') }}. <a
                        class="font-bold" href="www.icehomedev.com">{{ __('IceHomeDev.com') }}</a> All Rights Reserved.
                </p>
            </footer>
        </section>

    </div>


</body>

</html>
