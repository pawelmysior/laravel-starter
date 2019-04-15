@hasSection('title')
    <title>@yield('title') - {{ config('meta.title') }}</title>
    <meta property="og:title" content="@yield('title')">
@else
    <title>{{ config('meta.title') }}</title>
    <meta property="og:title" content="{{ config('meta.title') }}">
@endif

<meta name="description" content="@yield('meta_description', config('meta.description'))">
<meta property="og:description" content="@yield('meta_description', config('meta.description'))">

<meta property="og:image" content="@yield('meta_image', url('/images/og-image.jpg'))">
<meta property="og:image:width" content="@yield('meta_image_width', 1200)">
<meta property="og:image:height" content="@yield('meta_image_height', 630)">
<meta property="og:locale" content="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta property="og:type" content="@yield('meta_type', 'website')">
<meta property="og:url" content="{{ request()->url() }}">
