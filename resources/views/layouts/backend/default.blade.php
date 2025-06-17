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

    <!-- Helpers -->
    <script src="{{ env('APP_URL') }}/assets/backend/vendor/js/helpers.js"></script>
    <script src="{{ env('APP_URL') }}/assets/backend/vendor/js/template-customizer.js"></script>
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
                @include('layouts.backend.__includes.navbar-style')
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
              <!-- Layout Demo -->
              <div class="layout-demo-wrapper">
                <div class="layout-demo-placeholder">
                  <img
                  src="{{ env('APP_URL') }}/assets/backend/img/layouts/layout-fluid-light.png"
                  class="img-fluid"
                  alt="Layout fluid"
                  data-app-light-img="layouts/layout-fluid-light.png"
                  data-app-dark-img="layouts/layout-fluid-dark.png" />
                </div>
                <div class="layout-demo-info">
                  <h4>Layout fluid</h4>
                  <p>Fluid layout sets a <code>100% width</code> at each responsive breakpoint.</p>
                </div>
              </div>
              <!--/ Layout Demo -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-fluid">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                    <div>
                      ©
                      <script>
                        document.write(new Date().getFullYear());
                      </script>
                      , made with ❤️ by <a href="https://pixinvent.com" target="_blank" class="fw-medium">Pixinvent</a>
                    </div>
                    <div class="d-none d-lg-inline-block">
                      <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank"
                        >License</a
                        >
                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4"
                          >More Themes</a
                          >

                          <a
                            href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/"
                              target="_blank"
                                class="footer-link me-4"
                                  >Documentation</a
                                  >

                                  <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block"
                                    >Support</a
                                    >
                                  </div>
                                </div>
                              </div>
                            </footer>
                            <!-- / Footer -->

                            <div class="content-backdrop fade"></div>
                          </div>
                          <!-- Content wrapper -->
                        </div>
                        <!-- / Layout page -->
                      </div>

                      <!-- Overlay -->
                      <div class="layout-overlay layout-menu-toggle"></div>

                      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
                      <div class="drag-target"></div>
                    </div>
                    <!-- / Layout wrapper -->

                    <!-- Core JS -->
                    <!-- build:js assets/vendor/js/core.js -->

                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/jquery/jquery.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/popper/popper.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/js/bootstrap.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/node-waves/node-waves.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/hammer/hammer.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/i18n/i18n.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/libs/typeahead-js/typeahead.js"></script>
                    <script src="{{ env('APP_URL') }}/assets/backend/vendor/js/menu.js"></script>

                    <!-- endbuild -->

                    <!-- Vendors JS -->

                    <!-- Main JS -->
                    <script src="{{ env('APP_URL') }}/assets/backend/js/main.js"></script>

                    <!-- Page JS -->
                  </body>
                </html>
