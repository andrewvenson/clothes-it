<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>
    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    @include('partials.modals')

    @include('partials.slideout')
</body>
@include('partials.scripts')
</html>