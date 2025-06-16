
<!DOCTYPE html>



<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Mono - Responsive Admin & Dashboard Template</title>

  <!-- theme meta -->
  <meta name="theme-name" content="mono" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
  {{-- <link href="plugins/material/css/materialdesignicons.min.css" rel="stylesheet" /> --}}
<link href="{{ asset('Dashboardasset/plugins/material/css/materialdesignicons.min.css') }}" rel="stylesheet" />

  <link href="{{ ('Dashboardasset/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

  <!-- PLUGINS CSS STYLE -->
  <link href="{{ asset('Dashboardasset/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />




  <link href="{{ asset('Dashboardasset/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
<link href="{{ asset('Dashboardasset/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" />
<link href="{{ asset('Dashboardasset/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="{{ asset('Dashboardasset/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />

<!-- MONO CSS -->
<link id="main-css-href" rel="stylesheet" href="{{ asset('Dashboardasset/css/style.css') }}" />
<link href="{{ asset('Dashboardasset/images/favicon.png') }}" rel="shortcut icon" />

<script src="{{ asset('Dashboardasset/plugins/nprogress/nprogress.js') }}"></script>



</head>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>


    <div id="toaster"></div>


    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
<aside class="left-sidebar sidebar-dark" id="left-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">

    <!-- Logo -->
    <div class="app-brand text-center py-3">
      <a href="/index.html">
        <img src="{{ asset('assets/img/logo.png') }}" alt="Mono Logo" style="max-height: 40px;">
      </a>
    </div>

    <!-- Sidebar Scroll -->
    <div class="sidebar-left" data-simplebar style="height: 100%;">
      <ul class="nav sidebar-inner" id="sidebar-menu">

        <!-- Dashboard -->
        <li class="active">
          <a class="sidenav-item-link" href="index.html">
            <i class="mdi mdi-briefcase-account-outline"></i>
            <span class="nav-text">Business Dashboard</span>
          </a>
        </li>

        <!-- Analytics -->
        <li>
          <a class="sidenav-item-link" href="analytics.html">
            <i class="mdi mdi-chart-line"></i>
            <span class="nav-text">Analytics Dashboard</span>
          </a>
        </li>

        <!-- ================== Apps ================== -->
        <li class="section-title">Apps</li>

        <li><a class="sidenav-item-link" href="chat.html"><i class="mdi mdi-wechat"></i><span class="nav-text">Chat</span></a></li>
        <li><a class="sidenav-item-link" href="contacts.html"><i class="mdi mdi-phone"></i><span class="nav-text">Contacts</span></a></li>
        <li><a class="sidenav-item-link" href="team.html"><i class="mdi mdi-account-group"></i><span class="nav-text">Team</span></a></li>
        <li><a class="sidenav-item-link" href="calendar.html"><i class="mdi mdi-calendar-check"></i><span class="nav-text">Calendar</span></a></li>

        <!-- ================== Sliders ================== -->
        <li class="section-title">Homepage Banners</li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#homepage-banners" aria-expanded="false">
            <i class="fas fa-images"></i>
            <span class="nav-text">Homepage Sliders</span><b class="caret"></b>
          </a>
          <ul class="collapse" id="homepage-banners">
            <div class="sub-menu">
              <li><a class="sidenav-item-link" href="sliders.html"><span class="nav-text">All Banners</span></a></li>
              <li><a class="sidenav-item-link" href="add-slider.html"><span class="nav-text">Add New Banner</span></a></li>
            </div>
          </ul>
        </li>

        <!-- ================== Products ================== -->
        <li class="section-title">Product Management</li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#product-management">
            <i class="mdi mdi-folder-outline"></i>
            <span class="nav-text">Product Categories</span><b class="caret"></b>
          </a>
          <ul class="collapse" id="product-management">
            <div class="sub-menu">
              <li><a class="sidenav-item-link" href="{{ asset("/categories") }}"><span class="nav-text">Categories</span></a></li>
              <li><a class="sidenav-item-link" href="subcategories.html"><span class="nav-text">Sub Categories</span></a></li>
            </div>
          </ul>
        </li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#productMenu">
            <i class="mdi mdi-package-variant"></i>
            <span class="nav-text">Products</span><b class="caret"></b>
          </a>
          <ul class="collapse" id="productMenu">
            <div class="sub-menu">
              <li><a class="sidenav-item-link" href="products.html"><span class="nav-text">All Products</span></a></li>
              <li><a class="sidenav-item-link" href="add-product.html"><span class="nav-text">Add New Product</span></a></li>
            </div>
          </ul>
        </li>

        <!-- ================== Orders ================== -->
        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#order-management">
            <i class="mdi mdi-cart-outline"></i>
            <span class="nav-text">Orders</span><b class="caret"></b>
          </a>
          <ul class="collapse" id="order-management">
            <div class="sub-menu">
              <li><a class="sidenav-item-link" href="orders.html"><span class="nav-text">Orders</span></a></li>
              <li><a class="sidenav-item-link" href="order-items.html"><span class="nav-text">Order Items</span></a></li>
              <li><a class="sidenav-item-link" href="carts.html"><span class="nav-text">Carts</span></a></li>
              <li><a class="sidenav-item-link" href="wishlists.html"><span class="nav-text">Wishlists</span></a></li>
            </div>
          </ul>
        </li>

        <!-- ================== Emails & Subscribers ================== -->
        <li class="section-title">Mail & Subscribers</li>

        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#email-news">
            <i class="mdi mdi-email-outline"></i>
            <span class="nav-text">Email & Newsletter</span><b class="caret"></b>
          </a>
          <ul class="collapse" id="email-news">
            <div class="sub-menu">
              <li><a class="sidenav-item-link" href="email-inbox.html"><span class="nav-text">Email Inbox</span></a></li>
              <li><a class="sidenav-item-link" href="email-compose.html"><span class="nav-text">Compose Email</span></a></li>
              <li><a class="sidenav-item-link" href="newsletter-subscribers.html"><span class="nav-text">Subscribers</span></a></li>
            </div>
          </ul>
        </li>



        <li class="has-sub">
          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#users">
            <i class="mdi mdi-account-circle-outline"></i>
            <span class="nav-text">User Management</span><b class="caret"></b>
          </a>
          <ul class="collapse" id="users">
            <div class="sub-menu">
              <li><a class="sidenav-item-link" href="user-profile.html"><span class="nav-text">User Profile</span></a></li>
              <li><a class="sidenav-item-link" href="user-activities.html"><span class="nav-text">User Activities</span></a></li>
              <li><a class="sidenav-item-link" href="user-billing.html"><span class="nav-text">Billing</span></a></li>
              <li><a class="sidenav-item-link" href="user-notify-settings.html"><span class="nav-text">Notifications</span></a></li>
            </div>
          </ul>
        </li>

        <!-- ================== Auth & Pages ================== -->
        <li class="section-title">Pages</li>

        <li><a class="sidenav-item-link" href="sign-in.html"><i class="mdi mdi-login-variant"></i><span class="nav-text">Sign In</span></a></li>
        <li><a class="sidenav-item-link" href="sign-up.html"><i class="mdi mdi-account-plus"></i><span class="nav-text">Sign Up</span></a></li>
        <li><a class="sidenav-item-link" href="404.html"><i class="mdi mdi-alert-circle"></i><span class="nav-text">404 Page</span></a></li>
        <li><a class="sidenav-item-link" href="page-comingsoon.html"><i class="mdi mdi-clock-start"></i><span class="nav-text">Coming Soon</span></a></li>

        <!-- ================== Docs ================== -->
        <li class="section-title">Documentation</li>
        <li><a class="sidenav-item-link" href="getting-started.html"><i class="mdi mdi-airplane"></i><span class="nav-text">Getting Started</span></a></li>

      </ul>
    </div>

    <!-- Footer Shortcuts -->
    <div class="sidebar-footer">
      <div class="sidebar-footer-content text-center py-2">
        <a href="user-account-settings.html" title="Settings"><i class="mdi mdi-settings"></i></a>
        <a href="#" title="Messages"><i class="mdi mdi-email"></i></a>
      </div>
    </div>

  </div>
</aside>




        <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">

@yield("AdminContent")

        </div>



      </div>
    </div>

                    <!-- Card Offcanvas -->
                    <div class="card card-offcanvas" id="contact-off" >
                      <div class="card-header">
                        <h2>Contacts</h2>
                        <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
                      </div>
                      <div class="card-body">

                        <div class="mb-4">
                          <input type="text" class="form-control form-control-lg form-control-secondary rounded-0" placeholder="Search contacts...">
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-01.jpg" alt="User Image">
                              <span class="active bg-primary"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Selena Wagner</span>
                              <span class="discribe">Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-02.jpg" alt="User Image">
                              <span class="active bg-primary"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Walter Reuter</span>
                              <span>Developer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-03.jpg" alt="User Image">
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Larissa Gebhardt</span>
                              <span>Cyber Punk</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-04.jpg" alt="User Image">
                            </a>

                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Albrecht Straub</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-05.jpg" alt="User Image">
                              <span class="active bg-danger"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Leopold Ebert</span>
                              <span>Fashion Designer</span>
                            </a>
                          </div>
                        </div>

                        <div class="media media-sm">
                          <div class="media-sm-wrapper">
                            <a href="user-profile.html">
                              <img src="images/user/user-sm-06.jpg" alt="User Image">
                              <span class="active bg-primary"></span>
                            </a>
                          </div>
                          <div class="media-body">
                            <a href="user-profile.html">
                              <span class="title">Selena Wagner</span>
                              <span>Photographer</span>
                            </a>
                          </div>
                        </div>


                        
                      </div>
                    </div>


<script src="/Dashboardasset/plugins/nprogress/nprogress.js"></script>
<script src="/Dashboardasset/plugins/jquery/jquery.min.js"></script>
<script src="/Dashboardasset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/Dashboardasset/plugins/simplebar/simplebar.min.js"></script>
<script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
<script src="/Dashboardasset/plugins/apexcharts/apexcharts.js"></script>
<script src="/Dashboardasset/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
<script src="/Dashboardasset/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="/Dashboardasset/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="/Dashboardasset/plugins/jvectormap/jquery-jvectormap-us-aea.js"></script>
<script src="/Dashboardasset/plugins/toaster/toastr.min.js"></script>
<script src="/Dashboardasset/js/mono.js"></script>
<script src="/Dashboardasset/js/chart.js"></script>
<script src="/Dashboardasset/js/map.js"></script>
<script src="/Dashboardasset/js/custom.js"></script>



                    <script src="plugins/daterangepicker/moment.min.js"></script>
                    <script src="plugins/daterangepicker/daterangepicker.js"></script>
                    <script>
                      jQuery(document).ready(function() {
                        jQuery('input[name="dateRange"]').daterangepicker({
                        autoUpdateInput: false,
                        singleDatePicker: true,
                        locale: {
                          cancelLabel: 'Clear'
                        }
                      });
                        jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
                          jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                        });
                        jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
                          jQuery(this).val('');
                        });
                      });
                    </script>



                    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>


<script src="{{ asset('Dashboardasset/plugins/toaster/toastr.min.js') }}"></script>

{{-- <script src="{{ asset('Dashboardasset/js/mono.js') }}"></script>
<script src="{{ asset('Dashboardasset/js/chart.js') }}"></script>
<script src="{{ asset('Dashboardasset/js/map.js') }}"></script>
<script src="{{ asset('Dashboardasset/js/custom.js') }}"></script> --}}



                    <!--  -->


  </body>
</html>
