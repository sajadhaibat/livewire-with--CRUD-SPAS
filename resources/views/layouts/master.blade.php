<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>


<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- jQuery -->
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

    @yield('styles')
    @livewireStyles()
    @livewireScripts()
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>

    {{--        <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="true" data-turbo-eval="true"></script>--}}

</head>
<body>
<div id="app">
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
    @include('layouts.top-header')
    <!-- /Header -->

    @include('layouts.alert')

    <!-- Sidebar -->
    @include('layouts.sidebar')
    <!-- /Sidebar -->

        <!-- Page Wrapper -->
        <div class="page-wrapper">

            <!-- Page Content -->
            <div class="content container-fluid">
            <!-- Page Header -->
{{--                @include('layouts.page-header')--}}
            <!-- /Page Header -->


                @yield('content')
                {{$slot ?? ''}}

            </div>
            <!-- /Page Content -->

        </div>
        <!-- /Page Wrapper -->

    </div>
    <!-- /Main Wrapper -->
</div>


<!-- Bootstrap Core JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Slimscroll JS -->
<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('js/sidebar.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>


<!-- Specific js of pages -->
@yield('scripts')


</body>
</html>
