<!DOCTYPE html>
<html lang="en" data-theme="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>    
    {{-- Add this  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>

    <div class="container mx-auto px-2">

        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
            aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        @include('frontend.navbar')


        @yield('content')

        @include('frontend.footer')

    </div>

    <!-- theme controller -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var themeController = document.querySelector('.theme-controller');
            var htmlTag = document.querySelector('html');

            // Sayfa yüklendiğinde localStorage'dan tema bilgisini al
            var storedTheme = localStorage.getItem('theme');
            if (storedTheme) {
                htmlTag.setAttribute('data-theme', storedTheme);
                themeController.checked = (storedTheme === 'dark');
            }

            // Tema değiştirildiğinde localStorage'a kaydet
            themeController.addEventListener('change', function() {
                var theme = this.checked ? 'dark' : '';
                htmlTag.setAttribute('data-theme', theme);
                localStorage.setItem('theme', theme);
            });
        });
    </script>
         
    {{--  TOAST area --}}
    <x-toast />
        @livewireScripts
</body>

</html>