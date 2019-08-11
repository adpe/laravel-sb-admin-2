@extends(env('THEME_NAME') .'layouts.master')

@section('body-content')
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    @include(env('THEME_NAME') . 'layouts.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            @include(env('THEME_NAME') . 'layouts.header')

            <!-- Begin Page Content -->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include(env('THEME_NAME') . 'layouts.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include(env('THEME_NAME') . 'auth.logout')

<!-- Bootstrap core JavaScript-->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>

<!-- Core plugin JavaScript-->
<script src="/js/jquery.easing.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.js"></script>

@if (preg_match('/dashboard|charts/', $view_name))
<!-- Page level plugins -->
<script src="/js/Chart.bundle.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/chart-area-demo.js"></script>
<script src="/js/demo/chart-pie-demo.js"></script>
@endif
@if (strpos($view_name, 'charts'))
<script src="/js/demo/chart-bar-demo.js"></script>
@endif
@if (strpos($view_name, 'tables'))
<!-- Page level plugins -->
<script src="/js/jquery.dataTables.min.js"></script>
<script src="/js/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/js/demo/datatables-demo.js"></script>
@endif

</body>
@stop
