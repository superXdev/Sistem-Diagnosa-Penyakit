<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>{{ $title }}</title>
        <link href="{{ asset('dist/img/logo/logo.png') }}" rel="shortcut icon" type="image/x-icon">
        <link href="{{ asset('dist/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('dist/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('dist/css/ruang-admin.min.css') }}" rel="stylesheet">
        {{ ($head) ?? '' }}
    </head>

    <body id="page-top">
        <div id="wrapper">

            {{-- sidebar --}}
            <x-sidebar></x-sidebar>
            
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content" class="pb-5">
                    {{-- topbar --}}
                    <x-topbar></x-topbar>

                    {{-- container fluid --}}
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
                            </ol>
                        </div>

                        {{-- Main content --}}
                        {{ $slot }}

                        {{-- Modal Logout --}}
                        <x-modal-logout/>
                    </div>
                </div>

            </div>
        </div>

        {{-- Scroll to top --}}
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <script src="{{ asset('dist/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('dist/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('dist/js/ruang-admin.min.js') }}"></script>
        <script src="{{ asset('dist/vendor/chart.js/Chart.min.js') }}"></script>
        {{ ($script) ?? '' }}
    </body>
</html>