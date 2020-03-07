<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>

<body>

   <div class='yay'>
        @include('partials.nav')

        @yield('content')

        @include('partials.footer')

        @include('partials.modals')
   </div>
    
    <div class='mobile'>
        <h1 style='color:white; display:none' >go to mobile</h1>
    </div>

</body>
@include('partials.scripts')
</html>