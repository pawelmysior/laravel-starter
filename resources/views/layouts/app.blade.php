@extends('layouts.master')

@section('body')
    <div id="app" class="flex flex-col min-h-screen">
        @include('layouts.partials.header')

        <div class="flex-grow">
            <div class="container mx-auto px-4 xl:px-8">
                @yield('content')
            </div>
        </div>

        @include('layouts.partials.footer')

        <renderless-cookies-popup>
            <div
                class="fixed z-50 bottom-0 left-0 right-0 bg-white text-gray-900 max-h-full overflow-y-auto"
                v-show="!hidden"
                slot-scope="{ hidden, hide }"
                v-cloak
            >
                <div class="p-4 md:py-4 md:px-8 text-xs flex flex-col md:flex-row items-start md:items-center md:justify-between">
                    <p class="text-justify mb-3 md:mb-0 md:mr-4">
                        Our website uses cookies. If you do not wish to accept cookies, please change your settings in the browser or leave the website. By using the website without changing the settings for cookies in your browser, you state that you accept cookies. Read more in our <a href="{{ route('privacy-policy') }}" class="underline hover:no-underline">Privacy Policy</a>.
                    </p>

                    <button class="bg-gray-800 hover:bg-gray-900 text-gray-100 py-1 px-4" @click="hide">Agree</button>
                </div>
            </div>
        </renderless-cookies-popup>
    </div>
@endsection
