@extends(env('THEME_NAME') .'layouts.master')

@section('body-content')
<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">

                    <!-- Nested Row within Card Body -->
                    @yield('content')

                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.js"></script>

<!-- Core plugin JavaScript-->
<script src="/js/jquery.easing.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.js"></script>

</body>
@stop
