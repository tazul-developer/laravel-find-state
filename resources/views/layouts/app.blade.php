<!DOCTYPE html>
<html>
<head>
    @include('layouts.includes.header_css')

    @stack('custom-style')

    <style>
        body {
            font-size: .9rem !important;

            line-height: 1.2 !important;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
@include('layouts.includes.top_navbar')

@include('layouts.includes.left_navbar')



<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">

            <!-- Main row -->

        @include('layouts.includes.notifications')

        @yield('content')
        <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2019 <a href="http://tazul.techlore.net/" target="_blank">Techlore.net</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('layouts.includes.footer_js')

@yield('js')

</body>
</html>
