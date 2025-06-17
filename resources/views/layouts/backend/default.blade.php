<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-wide" dir="ltr" data-theme="theme-default" data-assets-path="{{ env('APP_URL') }}/assets/backend/" data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Fluid - Layouts | Vuexy - Bootstrap Admin Template</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ env('APP_URL') }}/assets/backend/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/flatpickr/flatpickr.css" />
    <!-- Row Group CSS -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css" />
    <!-- Form Validation -->
    <link rel="stylesheet" href="{{ env('APP_URL') }}/assets/backend/vendor/libs/@form-validation/umd/styles/index.min.css" />
    @stack('head')

    <!-- Helpers -->
    <script src="{{ env('APP_URL') }}/assets/backend/vendor/js/helpers.js"></script>
    <script src="{{ env('APP_URL') }}/assets/backend/js/config.js"></script>
  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        @include('layouts.backend.__includes.sidebar')

        <div class="layout-page">

          <nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)"><i class="ti ti-menu-2 ti-sm"></i></a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              @include('layouts.backend.__includes.navbar-search')
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                @include('layouts.backend.__includes.navbar-language')
                @include('layouts.backend.__includes.navbar-shortcut')
                @include('layouts.backend.__includes.navbar-notification')
                @include('layouts.backend.__includes.navbar-user')
              </ul>
            </div>
            @include('layouts.backend.__includes.navbar-search-smallscreen')
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-fluid flex-grow-1 container-p-y">

              @yield('content')

            </div>

            @include('layouts.backend.__includes.footer')
            <div class="content-backdrop fade"></div>
          </div>
        </div>
      </div>

      <div class="layout-overlay layout-menu-toggle"></div>

      <div class="drag-target"></div>
    </div>

    @include('layouts.backend.__includes.js')
  </body>
</html>
