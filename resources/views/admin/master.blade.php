<!DOCTYPE HTML>
<html lang="tr">
@include('admin.layout.head')

<body>

<!-- ======================= Header START -->
@include('admin.layout.header')
<!-- ======================= Header END -->

@yield('main')

@include('admin.layout.footer')

</body>
</html>
