<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

{!! SEO::generate() !!}
{{-- <title>@yield('title', dcmConfig('meta_title') ?? dcmConfig('title') ?? 'PlayVerse Store' )</title>

<meta name="description" content="@yield('description', dcmConfig('meta_description') ?? 'PlayVerse Store' )">
<meta name="author" content="@yield('author', dcmConfig('site_author') ?? 'PlayVerse Store' )">


<meta property="og:title" content="@yield('title', dcmConfig('meta_title') ?? dcmConfig('title') ?? 'PlayVerse Store' )">
<meta property="og:site_name" content="@yield('title', dcmConfig('meta_title') ?? dcmConfig('title') ?? 'PlayVerse Store   ' )">
<meta property="og:description" content="@yield('description', dcmConfig('meta_description') ?? 'PlayVerse Store   ' )">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="@yield('image', asset(dcmConfig('site_logo')) ?? '#' )"> --}}

<link rel="icon" href="@yield('image', asset('img/favicon.png') ?? asset(dcmConfig('site_logo')) ?? '#' )" type="image/x-icon"/>
<link rel="shortcut icon" href="@yield('image', asset('img/favicon.png') ?? asset(dcmConfig('site_logo')) ?? '#' )" type="image/x-icon"/>

<meta name="csrf-token" content="{{ csrf_token() }}">

@if( dcmConfig('site_verification') &&  dcmConfig('site_verification') != '')
    <meta name="google-site-verification" content="{{ dcmConfig('site_verification') }}">
@endif