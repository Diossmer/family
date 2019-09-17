<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('include.head')
<body>
    <div class="header">
        @yield('navbar')
    </div>

    <div class="aside">
        @yield('sidebar')
    </div>

    <div class="conteiner">
        <main class="py-4">
            @yield('content')
        </main>    
    </div>

    <div class="footer">
        @yield('footer')
    </div>

@include('include.foot')
</body>
</html>
