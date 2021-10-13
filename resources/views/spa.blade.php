@php
$config = [
    'appName' => config('app.name'),
    'locale' => $locale = app()->getLocale(),
    'locales' => config('app.locales'),
    'githubAuth' => config('services.github.client_id'),
];
$appJs = mix('dist/js/app.js');
$appCss = mix('dist/css/app.css');
@endphp

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>{{ config('app.name') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="themes/arsha/assets/img/favicon.png" rel="icon">
  <link href="themes/arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="themes/arsha/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="themes/arsha/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="themes/arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="themes/arsha/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="themes/arsha/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="themes/arsha/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="themes/arsha/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="themes/arsha/assets/css/style.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="{{ (str_starts_with($appCss, '//') ? 'http:' : '').$appCss }}"> -->

</head>
<body>
  <div id="app">    
  </div>
  <script>
    window.config = @json($config);
  </script>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="themes/arsha/assets/vendor/aos/aos.js"></script>
  <script src="themes/arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="themes/arsha/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="themes/arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="themes/arsha/assets/vendor/php-email-form/validate.js"></script>
  <script src="themes/arsha/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="themes/arsha/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="themes/arsha/assets/js/main.js"></script>

  <script src="{{ (str_starts_with($appJs, '//') ? 'http:' : '').$appJs }}"></script>
</body>
</html>
