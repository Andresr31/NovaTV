<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <main class="container mt-5">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive:{
                    0:{
                        items: 1
                    },
                    600:{
                        items: 2
                    },
                    1000:{
                        items: 3
                    }
                }
            });
            /* - - -*/
            @if (session('message'))
                Swal.fire({
                    title: 'Felicitaciones',
                    text: '{{ session('message') }}',
                    icon: 'success',
                    confirmButtonColor: '#1e5f74',
                    confirmButtonText: 'Aceptar'
                });
            @endif
            /* - - -*/
            @if (session('error'))
                Swal.fire({
                  position: 'top-end',
                  icon: 'error',
                  title: 'Acceso Denegado',
                  text: '{{ session('error') }}',
                  showConfirmButton: false,
                  timer: 2500
                });
            @endif
            /* - - -*/
            $('.btn-delete').click(function(event) {
                Swal.fire({
                    title: 'Esta usted seguro ?',
                    text: 'Desea eliminar este registro',
                    icon: 'error',
                    showCancelButton: true,
                    cancelButtonColor: '#d0211c',
                    cancelButtonText: 'Cancelar',
                    confirmButtonColor: '#1e5f74',
                    confirmButtonText: 'Aceptar',  
                }).then((result) => {
                    if(result.value) {
                        $(this).parent().submit();
                    }
                });
            });

            
            
        });
    </script>

</body>
</html>
