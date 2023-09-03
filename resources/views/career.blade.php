<x-front-layout>


    <section>
        <div
            class="grid content-center items-stretch gap-y-10 md:grid-cols-2 md:gap-x-6 h-auto container align-middle py-10 px-4 ">

            <div class="flex-none w-full h-auto relative ">
                <img src="{{ asset('images/services/service006.jpg') }}" class="aspect-video h-[34rem] rounded-2xl"
                    alt="Construction Services" />
            </div>

            <div class=" h-auto w-auto grid md:content-center  grid-cols-1 md:grid-cols-2 gap-2   ">

                <div class=" p-2">
                    <div class="w-8 h-8 my-2">
                        <svg class="text-yellow-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5">
                                <circle cx="8" cy="8" r="1.75" />
                                <path
                                    d="m6.75 1.75l-.5 1.5l-1.5 1l-2-.5l-1 2l1.5 1.5v1.5l-1.5 1.5l1 2l2-.5l1.5 1l.5 1.5h2.5l.5-1.5l1.5-1l2 .5l1-2l-1.5-1.5v-1.5l1.5-1.5l-1-2l-2 .5l-1.5-1l-.5-1.5z" />
                            </g>
                        </svg>
                    </div>
                    <h2 class="text-md sm:text-xl text-gray-900 dark:text-white font-md font-[anton]  mb-2">
                        {{ __('Job Openings') }}</h2>
                    <p class="leading-snug mb-2 text-sm dark:text-gray-300">
                        {{ __('Explore our current job openings and join our dynamic team.
                                                                                                                        Discover opportunities that match your skills and passions. ') }}
                    </p>
                </div>
                <div class=" p-2">
                    <div class="w-8 h-8 my-2">
                        <svg class="text-yellow-500"  viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                <circle cx="8" cy="8" r="6.25"/>
                                <path d="M9.75 6.25v-.5m-3.5.5v-.5m-.5 4s.5 1.5 2.25 1.5s2.25-1.5 2.25-1.5"/>
                            </g>
                        </svg>
                    </div>
                    <h2 class="text-lg sm:text-xl text-gray-900 dark:text-white font-md font-[anton]  mb-2">
                        {{ __('Company Culture and Values') }}</h2>
                    <p class="leading-snug mb-2 text-sm dark:text-gray-300">
                        {{ __('Our culture is built on inclusivity, innovation, and collaboration. Learn about our core values and what makes our workplace unique. ') }}
                    </p>
                </div>
                <div class=" p-2">
                    <div class="w-8 h-8 my-2">
                        <svg class="text-yellow-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M1.75 1.75h12.5v1.5l-5 5.5v4l-2.5 1.5v-5.5l-5-5.5z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg sm:text-xl text-gray-900 dark:text-white font-md font-[anton]  mb-2">
                        {{ __('Application Process and Tips') }}</h2>
                    <p class="leading-snug mb-2 text-sm dark:text-gray-300">
                        {{ __('Ready to apply? Navigate our application process with confidence. Get expert tips on crafting a standout resume and preparing for interviews.') }}
                    </p>
                </div>
                <div class=" p-2">
                    <div class="w-8 h-8 my-2">
                        <svg class="text-yellow-500" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 14.25h2.5M8 1.75c-2.75 0-4.25 2-4.25 4s2 2.5 2 4.5v1h4.5v-1c0-2 2-2.5 2-4.5s-1.5-4-4.25-4z"/>
                        </svg>
                    </div>
                    <h2 class="text-lg sm:text-xl text-gray-900 dark:text-white font-md font-[anton]  mb-2">
                        {{ __('Career Development') }}</h2>
                    <p class="leading-snug mb-2 text-sm dark:text-gray-300">
                        {{ __('At our organization, we\'re committed to your growth. Explore our career development programs, mentorship opportunities, and pathways for advancement. ') }}
                    </p>
                </div>

            </div>
        </div>
    </section>
</x-front-layout>
