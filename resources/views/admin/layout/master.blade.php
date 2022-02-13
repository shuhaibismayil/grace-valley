<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield('title') | Dept Of Bca | Grace Valley College of Arts and Science</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="http://127.0.0.1:8000/assets/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet"
        type="text/css">
    <link href="http://127.0.0.1:8000/assets/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="http://127.0.0.1:8000/assets/global_assets/js/main/jquery.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="http://127.0.0.1:8000/assets/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/plugins/pickers/daterangepicker.js"></script>

    <script src="http://127.0.0.1:8000/assets/js/app.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_pages/dashboard.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/streamgraph.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/sparklines.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/lines.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/areas.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/donuts.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/bars.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/progress.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/heatmaps.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/pies.js"></script>
    <script src="http://127.0.0.1:8000/assets/global_assets/js/demo_charts/pages/dashboard/light/bullets.js"></script>
    <!-- /theme JS files -->

</head>

<body>
    <!-- Main navbar -->
    @include('admin.includes.header')
    <!-- /main navbar -->
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->

        @include('admin.includes.sidebar')
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            @include('admin.includes.content')
        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</body>

</html>
