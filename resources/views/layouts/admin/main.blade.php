<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/modules/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/modules/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/modules/summernote/summernote-bs4.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/css/components.css">

  <!-- css -->
  <link rel="stylesheet" href="{{ asset('admin') }}/assets/multiple-form.css">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <!-- Navbar -->
      @include('layouts.admin.navbar')

      <!-- Sidebar -->
      @include('layouts.admin.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('sub_judul')</h1>
            <div class="ml-auto">
                @yield('url1')
            </div>
          </div>

          <div class="section-body">
              @yield('content')
          </div>
        </section>
      </div>
      <!-- Footer -->
      @include('layouts.admin.footer')
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{ asset('admin') }}/assets/modules/jquery.min.js"></script>
  <script src="{{ asset('admin') }}/assets/modules/popper.js"></script>
  <script src="{{ asset('admin') }}/assets/modules/tooltip.js"></script>
  <script src="{{ asset('admin') }}/assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{ asset('admin') }}/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="{{ asset('admin') }}/assets/modules/moment.min.js"></script>
  <script src="{{ asset('admin') }}/assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('admin') }}/assets/modules/izitoast/js/iziToast.min.js"></script>

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('admin') }}/assets/js/scripts.js"></script>
  <script src="{{ asset('admin') }}/assets/js/custom.js"></script>
  @yield('script')
</body>
</html>
