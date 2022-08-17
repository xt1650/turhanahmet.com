<!DOCTYPE html>
<html lang="tr">
@include('pages.header')
<body>
@include('pages.header_side')

<main>
    @yield('content')
</main>
<!-- **************** MAIN CONTENT END **************** -->

@include('pages.base_footer')

<!-- =======================
JS libraries, plugins and custom scripts -->
@include('pages.scripts')
</body>
</html>
