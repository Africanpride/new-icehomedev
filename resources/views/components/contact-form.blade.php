<div class="bg-white shadow p-7 sm:p-10 rounded-2xl">
    <h3 class="mb-4 text-xl font-semibold sm:text-center sm:mb-6 sm:text-2xl">
        {{ __('Request for Quote') }}
    </h3>
    <form method="POST" action="{{ route('quotation.store') }}" id="contactForm" accept-charset="UTF-8"
        class="form-horizontal space-y-4" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
        <input type="hidden" name="g-recaptcha-score" id="g-recaptcha-score"> --}}

        <div>
            @error('g-recaptcha-response')
                <div class="alert alert-danger text-red-500 ">{{ $message }}</div>
            @enderror
        </div>


        <div class="space-y-4 dark:text-gray-950 ">
            <div>
                <x-label for="name" class="dark:text-black" value="{{ __('Name') }}" />
                <x-input id="name" type="text" name="name"
                    class="mt-1 block w-full dark:bg-gray-300 dark:border-gray-400/30 " placeholder="e.g. John Traore"
                    autocomplete="name" required  />
                <div>
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <x-label for="telephone" class="dark:text-black" value="{{ __('Telephone') }}" />
                <x-input id="name" type="tel" name="telephone"
                    class="mt-1 block w-full dark:bg-gray-300 dark:border-gray-400/30 " placeholder="e.g. +233 632 5536"
                    required  />
                <div>
                    @error('telephone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <x-label for="email" class="dark:text-black" value="{{ __('Email Address') }}" />
                <x-input id="name" type="email" name="email"
                    class="mt-1 block w-full dark:bg-gray-300 dark:border-gray-400/30 "
                    placeholder="e.g. john.traore@gmail.com" required  />
                <div>
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <x-label for="description" class="dark:text-black" value="{{ __('Service Description') }}" />

                <textarea
                required
                name="description"
                placeholder="{{ __('How may we help you?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>

                <div>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="w-full">
                {!! app('captcha')->display() !!}
                <div>
                    @error('g-recaptcha-score')
                        <div class="alert alert-danger text-red-500 ">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div>
                <x-button
                    class="w-full bg-yellow-600 dark:bg-gray-900 dark:hover:bg-gray-950 dark:hover:text-white  ">{{ __('Submit Request') }}</x-button>
            </div>

        </div>

    </form>
</div>

@push('custom-scripts')
    {{-- <script src='https://www.google.com/recaptcha/api.js'></script> --}}
    {!! NoCaptcha::renderJs() !!}

@endpush
