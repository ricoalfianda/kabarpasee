<!DOCTYPE html>
<html>
  @include('admin/layouts/head')

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  @include('admin/layouts/header')

  @include('admin/layouts/sidebar')

  @yield('content')

  @include('admin/layouts/footer')

</div>

  @include('admin/layouts/plugins')

</body>
</html>
