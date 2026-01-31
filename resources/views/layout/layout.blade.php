<!DOCTYPE html>
<html lang="en">

@include('elements.head')

<body>

    <!-- HEADER AREA -->
    @if (!isset($header))
        @include('elements.header')
    @endif
    <!-- HEADER AREA END -->

    <!-- Breadcrumb -->
    @if (!isset($breadcrumb))
        @include('elements.breadcrumb')
    @endif
    <!-- Breadcrumb END -->

    @yield('content')

    <!-- FOOTER AREA -->
    @if (!isset($footer))
        @include('elements.footer')
    @endif
    <!-- FOOTER AREA END -->

    <div id="anywhere-home" class="">
    </div>

    <!-- SIDE BAR AREA -->
    @if (!isset($sidebar))
        @include('elements.sidebar')
    @endif
    <!-- SIDE BAR AREA END -->

    <!-- THEME PRELOADER START -->
    @include('elements.preloader')
    <!-- THEME PRELOADER END -->




    <!-- BACK TO TOP AREA START -->
    @include('elements.backtotop')
    <!-- BACK TO TOP AREA END -->

    @include('elements.script')

</body>

</html>