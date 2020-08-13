<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>داشبورد</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="admin/assets/css/app.min.css">
    <link rel="stylesheet" href="admin/assets/bundles/bootstrap-social/bootstrap-social.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <link rel="stylesheet" href="admin/assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="admin/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='admin/assets/img/favicon.ico'/>
</head>

<body>
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                @yield('content')
            </div>
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src="admin/assets/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<!-- Template JS File -->
<script src="admin/assets/js/scripts.js"></script>
<!-- Custom JS File -->
<script src="admin/assets/js/custom.js"></script>


</body>
</html>
