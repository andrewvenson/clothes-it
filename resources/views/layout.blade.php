<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    @include('partials.modals')
</body>
@include('partials.scripts')
</html>