<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <!-- Styles Sheet -->
    @include('layouts.head')

    <body>
        @yield('container')
        
       <!-- Footer -->
       @include('layouts.footer')
    </body>
</html>
