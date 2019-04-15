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
    </div>
@endsection
