<!DOCTYPE html>
<html class="no-js " lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>
        @yield('title', ' Resturant Management System')
    </title>


    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
        $curr_url = Route::currentRouteName();
    @endphp

    @include('libraries.styles')
</head>

<body class="theme-blush">

    @include('components.template_components')

    @include('components.sidebar')

    <section class="content">
        <div class="">
            {{ $header ?? '' }}
            {{ $content ?? '' }}
            @stack('modals')
        </div>
    </section>


    @include('libraries.scripts')
</body>

</html>
