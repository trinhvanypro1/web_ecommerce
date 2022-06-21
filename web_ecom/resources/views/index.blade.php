<!-- <!DOCTYPE html>
<html lang="en">

<head>
    </head> -->
    @include('header')

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                @yield('content')
            </section>
        </div>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @include('footer')
<!-- </body>

</html> -->