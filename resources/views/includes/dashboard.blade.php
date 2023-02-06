<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Task Management</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="{{asset('assets/dashboard/text/css" href="js/select.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/dashboard/vendors/mdi/css/materialdesignicons.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/dashboard/css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assets/dashboard/images/favicon.png')}}"/>



        @yield('css')
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

    @include('includes.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('includes.sidebar')

        <!-- partial -->

        <div class="main-panel">
            <div class="content-wrapper">


            @yield('content')
            </div>

            <!-- content-wrapper ends -->



            <!-- partial:partials/_footer.html -->
            @include('includes.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('assets/dashboard/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets/dashboard/vendors/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/datatables.net/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('assets/dashboard/js/dataTables.select.min.js')}}"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets/dashboard/js/off-canvas.js')}}"></script>
<script src="{{asset('assets/dashboard/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('assets/dashboard/js/template.js')}}"></script>
<script src="{{asset('assets/dashboard/js/settings.js')}}"></script>
<script src="{{asset('assets/dashboard/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('assets/dashboard/js/dashboard.js')}}"></script>
<script src="{{asset('assets/dashboard/js/Chart.roundedBarCharts.js')}}"></script>
<!-- End custom js for this page-->

{{--<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>--}}


<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

@yield('js')
</body>

</html>

