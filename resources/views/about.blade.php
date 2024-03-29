<x-front-layout>

    <section>
        <x-page-intro primaryColor="indigo" secondaryColor="text-white" firstImage="{{ asset('images/meeting.jpg') }}"
            secondImage="{{ asset('images/services/service036.jpg') }}">
            <x-slot name="title">
                {{ __('Ice Homes Development & Construction: Excellence in Diverse Construction') }}
            </x-slot>
            <x-slot name="content">
                {{ __('By leveraging our expertise and embracing cutting-edge technologies, we strive to deliver
                projects
                that not only meet the highest industry standards but also contribute to the betterment of
                society and the environment. ') }}

                </x-slot>

        </x-page-intro>

    </section>


    <section>
        <x-hero-with-image>
            <x-slot name="title">
                About <span class="font-bold">ICE Home <br />
                    <span class=" text-yellow-500">
                        Development and Construction
                    </span></span>
            </x-slot>
            <x-slot name="content">
                {{ __('            Since our inception, ICE Home Development and Construction has successfully completed numerous
                               projects across various sectors, including residential, commercial, and industrial construction. Our
                               team of skilled professionals, including architects, engineers, project managers, and construction
                               workers, bring a wealth of expertise and knowledge to every project we undertake.') }}
            </x-slot>

        </x-hero-with-image>
    </section>


    <section>
        <div
            class="max-w-[85rem] grid sm:grid-cols-1 md:grid-cols-1 gap-6 md:gap-16 py-10 md:py-32 place-items-center px-4 sm:px-6 md:px-8 mx-auto">
            <!-- Icon Block -->
            <div class="relative flex sm:pr-6 md:max-w-3xl">
                <svg class="shrink-0 w-10 h-10 mt-1" width="46" height="46" viewBox="0 0 46 46" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20.7692 13L21.6232 9.62218C21.7598 9.08182 22.3118 8.75743 22.8503 8.90104L35.9299 12.3889C36.4538 12.5286 36.7709 13.0604 36.6448 13.5877L31.6111 34.6379C31.4799 35.1865 30.9213 35.5181 30.377 35.3706L30.2319 35.3312"
                        stroke="#2563EB" stroke-width="2" stroke-linecap="round"></path>
                    <path
                        d="M26.8715 14.64H11.8715C11.3192 14.64 10.8715 15.0877 10.8715 15.64V32.6117C10.8715 33.0112 11.1092 33.3723 11.4761 33.5303L20.835 37.5585C20.9598 37.6123 21.0944 37.64 21.2303 37.64H26.8715C27.4237 37.64 27.8715 37.1923 27.8715 36.64V15.64C27.8715 15.0877 27.4237 14.64 26.8715 14.64Z"
                        fill="#C084FC"></path>
                    <path
                        d="M20.2703 37.3917L11.9684 33.9626C11.6805 33.8437 11.7421 33.4192 12.0519 33.387L18.4396 32.7235C18.9086 32.6748 19.3478 32.9603 19.4938 33.4086L20.6701 37.0216C20.7494 37.265 20.5069 37.4894 20.2703 37.3917Z"
                        fill="#DDD6FE"></path>
                    <path d="M15.0923 19.5H20.0923" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                    <path d="M15.0923 23.5H23.5923" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                    <path d="M15.0923 27.5H23.5923" stroke="white" stroke-width="2" stroke-linecap="round"></path>
                    <rect x="1.5" y="1" width="43" height="44" rx="11" stroke="#2563EB"
                        stroke-width="2"></rect>
                </svg>
                <div class="ml-6 text-xl">
                    <h2 class="font-semibold mb-1 dark:text-yellow-500 md:text-2xl ">The IceHome Mission</h2>
                    <p class="text-gray-600 leading-normal dark:text-gray-400">Our mission is to provide exceptional
                        general construction and funding services that exceed our clients' expectations. We are
                        committed to delivering high-quality projects, fostering innovation, and maintaining the highest
                        standards of professionalism and integrity. Through our expertise and dedication, we aim to
                        contribute to the development and growth of communities, while building long-lasting
                        relationships with our clients and partners.
                    </p>
                </div>
            </div>
            <!-- End Icon Block -->


            <!-- Icon Block -->
            <div class="relative flex sm:pr-6 md:max-w-3xl">
                <svg class="shrink-0 w-10 h-10 mt-1" width="46" height="46" viewBox="0 0 46 46" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M26.3593 14.8949C26.3838 14.8276 26.4311 14.769 26.4944 14.7274C26.5578 14.6858 26.6339 14.6635 26.712 14.6635C26.7901 14.6635 26.8662 14.6858 26.9295 14.7274C26.9928 14.769 27.0401 14.8276 27.0647 14.8949L27.7273 16.7026C28.0235 17.5085 28.7186 18.1401 29.6054 18.4092L31.5949 19.0113C31.6691 19.0336 31.7336 19.0766 31.7793 19.1341C31.825 19.1916 31.8497 19.2608 31.8497 19.3317C31.8497 19.4027 31.825 19.4719 31.7793 19.5294C31.7336 19.5869 31.6691 19.6299 31.5949 19.6522L29.6054 20.2543C29.168 20.3867 28.7706 20.6098 28.4446 20.906C28.1186 21.2023 27.873 21.5634 27.7273 21.9608L27.0647 23.7685C27.0401 23.8359 26.9928 23.8945 26.9295 23.9361C26.8662 23.9776 26.7901 24 26.712 24C26.6339 24 26.5578 23.9776 26.4944 23.9361C26.4311 23.8945 26.3838 23.8359 26.3593 23.7685L25.6967 21.9608C25.551 21.5634 25.3054 21.2023 24.9794 20.906C24.6534 20.6098 24.2559 20.3867 23.8185 20.2543L21.829 19.6522C21.7549 19.6299 21.6904 19.5869 21.6447 19.5294C21.5989 19.4719 21.5743 19.4027 21.5743 19.3317C21.5743 19.2608 21.5989 19.1916 21.6447 19.1341C21.6904 19.0766 21.7549 19.0336 21.829 19.0113L23.8185 18.4092C24.2559 18.2768 24.6534 18.0537 24.9794 17.7574C25.3054 17.4612 25.551 17.1001 25.6967 16.7026L26.3593 14.8949V14.8949ZM31.6138 10.1517C31.6307 10.1074 31.6623 10.069 31.7044 10.0418C31.7464 10.0146 31.7967 10 31.8483 10C31.8999 10 31.9502 10.0146 31.9923 10.0418C32.0343 10.069 32.066 10.1074 32.0829 10.1517L32.5246 11.3558C32.7215 11.894 33.1855 12.3156 33.7779 12.4945L35.103 12.8959C35.1518 12.9113 35.1941 12.94 35.224 12.9782C35.2539 13.0164 35.27 13.0621 35.27 13.109C35.27 13.1559 35.2539 13.2016 35.224 13.2398C35.1941 13.278 35.1518 13.3068 35.103 13.3222L33.7779 13.7235C33.4859 13.8118 33.2206 13.9606 33.0031 14.1583C32.7855 14.356 32.6217 14.597 32.5246 14.8623L32.0829 16.0664C32.066 16.1107 32.0343 16.1491 31.9923 16.1763C31.9502 16.2034 31.8999 16.2181 31.8483 16.2181C31.7967 16.2181 31.7464 16.2034 31.7044 16.1763C31.6623 16.1491 31.6307 16.1107 31.6138 16.0664L31.172 14.8623C31.0749 14.597 30.9111 14.356 30.6935 14.1583C30.476 13.9606 30.2107 13.8118 29.9188 13.7235L28.5936 13.3222C28.5448 13.3068 28.5026 13.278 28.4727 13.2398C28.4427 13.2016 28.4267 13.1559 28.4267 13.109C28.4267 13.0621 28.4427 13.0164 28.4727 12.9782C28.5026 12.94 28.5448 12.9113 28.5936 12.8959L29.9188 12.4945C30.5112 12.3156 30.9751 11.894 31.172 11.3558L31.6138 10.1532V10.1517Z"
                        fill="#2563EB"></path>
                    <path
                        d="M16.2121 19.6897C13.8849 28.8812 20.5354 32.6479 25.4141 32.6534C25.9088 32.654 26.2133 33.3005 25.8326 33.6165C14.4769 43.0419 2.69149 27.0986 15.4777 19.1211C15.8588 18.8834 16.3224 19.2543 16.2121 19.6897Z"
                        fill="#C084FC"></path>
                    <rect x="1.83331" y="1" width="43" height="44" rx="11" stroke="#2563EB"
                        stroke-width="2"></rect>
                </svg>
                <div class="ml-6 text-xl">
                    <h2 class="font-semibold mb-1 dark:text-yellow-500 md:text-2xl ">Vision and Future Goals</h2>
                    <p class="text-gray-600 leading-normal dark:text-gray-400">Our vision is to be a leading general
                        construction and funding entity, recognized for our excellence, innovation, and commitment to
                        sustainable development. We aspire to be the preferred choice for clients seeking reliable and
                        comprehensive construction services, combined with flexible and tailored funding solutions. Our ultimate goal is to leave a lasting legacy of quality
                        construction and funding solutions that positively impact the communities we serve.

                    </p>
                </div>
                {{-- <div
                    class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gray-200 to-transparent sm:hidden md:block sm:bg-gradient-to-t sm:w-px sm:h-full dark:via-gray-800">
                </div> --}}
            </div>
            <!-- End Icon Block -->
        </div>

    </section>


    <section>
        <div class="max-w-screen-xl px-4 py-3 mx-auto sm:px-6 sm:py-6 md:px-8">

            <ul class="grid grid-cols-1 gap-4 md:grid-cols-3">
                <li>
                    <div href="#" class="relative block group">
                        <img src="{{ asset('images/services/service050.jpg') }}" alt="{{ __('IceHomeDev Railways Project') }}"
                            class=" object-cover w-full transition duration-500 aspect-square rounded-2xl" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            {{-- <h3 class="text-xl font-medium text-white">Casual Trainers</h3> --}}

                            <span
                                class="mt-1.5 inline-block bg-yellow-600 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                {{ __('Railway Projects') }}
                            </span>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="relative block group">
                        <img src="{{ asset('images/services/service007.jpg') }}" alt="{{ __('IceHomeDev Railways Project') }}"
                            class=" object-cover w-full transition duration-500 aspect-square rounded-2xl" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            {{-- <h3 class="text-xl font-medium text-white">Winter Jumpers</h3> --}}

                            <span
                                class="mt-1.5 inline-block bg-yellow-600 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                Industrial Construction
                            </span>
                        </div>
                    </div>
                </li>

                <li class="md:col-span-2 md:col-start-2 md:row-span-2 md:row-start-1">
                    <div class="relative block group">
                        <img src="{{ asset('images/services/service002.jpg') }}" alt="{{ __('IceHomeDev Railways Project') }}"
                            class=" object-cover object-top  w-full transition duration-500 aspect-square rounded-2xl" />

                        <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                            {{-- <h3 class="text-xl font-medium text-white">Services</h3> --}}

                            <span
                                class="mt-1.5 inline-block bg-yellow-600 px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                {{ __('Commercial Construction') }}
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="py-6 dark:bg-gray-800 dark:text-gray-100">
        <div class="container flex flex-col items-center justify-center p-4 mx-auto space-y-8 sm:p-10">
            <h1 class="text-4xl font-bold leadi text-center sm:text-5xl">Our team</h1>
            <p class="max-w-2xl text-center dark:text-gray-400">
                {{ __('Our team of skilled professionals, including architects, engineers, project managers, and construction workers, bring a wealth of expertise and knowledge to every project we undertake.') }}
            </p>
            <div class="flex flex-row flex-wrap-reverse justify-center">
                <div class="flex flex-col justify-center m-8 text-center">
                    <img alt=""
                        class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:bg-gray-500"
                        src="{{ asset('images/ceo3.jpg') }}">
                    <p class="text-xl font-semibold leadi">Dr. Rafie L. Noushad (PhD-Eng)</p>
                    <p class="dark:text-gray-400">Chief Executive Officer</p>
                </div>
                <div class="flex flex-col justify-center m-8 text-center">
                    <img alt=""
                        class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:bg-gray-500"
                        src="{{ asset('images/suglo.jpg') }}">
                    <p class="text-xl font-semibold leadi">Emmanuel Y. Suglo</p>
                    <p class="dark:text-gray-400">Operations Director</p>
                </div>
                <div class="flex flex-col justify-center m-8 text-center">
                    <img alt=""
                        class="self-center flex-shrink-0 w-24 h-24 mb-4 bg-center bg-cover rounded-full dark:bg-gray-500"
                        src="{{ asset('images/amadu.jpg') }}">
                    <p class="text-xl font-semibold leadi">Hammah Amadu</p>
                    <p class="dark:text-gray-400">Projects Manager</p>
                </div>

            </div>
        </div>
    </section>
    @livewire('call-to-action', ['message' => 'Explore Our Projects', 'action' => 'Lets Get Started'])


</x-front-layout>
