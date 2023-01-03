<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Starlight Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{asset('adminAsset')}}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{asset('adminAsset')}}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{asset('adminAsset')}}/css/starlight.css">
</head>

<body>

<!-- ########## START: LEFT PANEL ########## -->
@include('admin.include.sidebar')
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
@include('admin.include.header')
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->
@include('admin.include.notification')
<!-- ########## END: RIGHT PANEL ########## --->

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">OneTech / Admin</a>
        <span class="breadcrumb-item active">@yield('page_name')</span>
    </nav>
    @yield('content')
    <!-- sl-pagebody -->
@include('admin.include.footer')
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="{{asset('adminAsset')}}/lib/jquery/jquery.js"></script>
<script src="{{asset('adminAsset')}}/lib/popper.js/popper.js"></script>
<script src="{{asset('adminAsset')}}/lib/bootstrap/bootstrap.js"></script>
<script src="{{asset('adminAsset')}}/lib/jquery-ui/jquery-ui.js"></script>
<script src="{{asset('adminAsset')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{asset('adminAsset')}}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="{{asset('adminAsset')}}/lib/d3/d3.js"></script>
<script src="{{asset('adminAsset')}}/lib/rickshaw/rickshaw.min.js"></script>
<script src="{{asset('adminAsset')}}/lib/chart.js/Chart.js"></script>
<script src="{{asset('adminAsset')}}/lib/Flot/jquery.flot.js"></script>
<script src="{{asset('adminAsset')}}/lib/Flot/jquery.flot.pie.js"></script>
<script src="{{asset('adminAsset')}}/lib/Flot/jquery.flot.resize.js"></script>
<script src="{{asset('adminAsset')}}/lib/flot-spline/jquery.flot.spline.js"></script>

<script src="{{asset('adminAsset')}}/js/starlight.js"></script>
<script src="{{asset('adminAsset')}}/js/ResizeSensor.js"></script>
<script src="{{asset('adminAsset')}}/js/dashboard.js"></script>
</body>
</html>

