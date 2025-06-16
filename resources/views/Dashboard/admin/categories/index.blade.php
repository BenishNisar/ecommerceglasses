@extends("Layout.layouttwo")
@section("AdminContent")
   <!-- Header -->
          <header class="main-header" id="header">
            <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>

              <span class="page-title">data tables</span>

              <div class="navbar-right ">

                <!-- search form -->
                <div class="search-form">
                  <form action="index.html" method="get">
                    <div class="input-group input-group-sm" id="input-group-search">
                      <input type="text" autocomplete="off" name="query" id="search-input" class="form-control" placeholder="Search..." />
                      <div class="input-group-append">
                        <button class="btn" type="button">/</button>
                      </div>
                    </div>
                  </form>
                  <ul class="dropdown-menu dropdown-menu-search">

                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Morbi leo risus</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Dapibus ac facilisis in</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Porta ac consectetur ac</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.html">Vestibulum at eros</a>
                    </li>

                  </ul>

                </div>

                <ul class="nav navbar-nav">
                  <!-- Offcanvas -->
                  <li class="custom-dropdown">
                    <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:" >
                      <i class="mdi mdi-contacts icon"></i>
                    </a>
                  </li>
                  <li class="custom-dropdown">
                    <button class="notify-toggler custom-dropdown-toggler">
                      <i class="mdi mdi-bell-outline icon"></i>
                      <span class="badge badge-xs rounded-circle">21</span>
                    </button>
                    <div class="dropdown-notify">

                      <header>
                        <div class="nav nav-underline" id="nav-tab" role="tablist">
                          <a class="nav-item nav-link active" id="all-tabs" data-toggle="tab" href="#all" role="tab" aria-controls="nav-home"
                            aria-selected="true">All (5)</a>
                          <a class="nav-item nav-link" id="message-tab" data-toggle="tab" href="#message" role="tab" aria-controls="nav-profile"
                            aria-selected="false">Msgs (4)</a>
                          <a class="nav-item nav-link" id="other-tab" data-toggle="tab" href="#other" role="tab" aria-controls="nav-contact"
                            aria-selected="false">Others (3)</a>
                        </div>
                      </header>

                      <div class="" data-simplebar style="height: 325px;">
                        <div class="tab-content" id="myTabContent">

                          <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tabs">

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>

                          <div class="tab-pane fade" id="message" role="tabpanel" aria-labelledby="message-tab">

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-01.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Selena Wagner</span>
                                  <span class="discribe">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
                                  <span class="time">
                                    <time>15 min ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-03.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Sagge Hudson</span>
                                  <span class="discribe">On disposal of as landlord Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm bg-warning-10 p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-02.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">John Doe</span>
                                  <span class="discribe">Extremity sweetness difficult behaviour he of. On disposal of as landlord horrible. Afraid
                                    at highly months do things on at.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper">
                                <a href="user-profile.html">
                                  <img src="images/user/user-sm-04.jpg" alt="User Image">
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Albrecht Straub</span>
                                  <span class="discribe"> Beatae quia natus assumenda laboriosam, nisi perferendis aliquid consectetur expedita non tenetur.</span>
                                  <span class="time">
                                    <time>Just now</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                          <div class="tab-pane fade" id="other" role="tabpanel" aria-labelledby="contact-tab">

                            <div class="media media-sm p-4 bg-light mb-0">
                              <div class="media-sm-wrapper bg-primary">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-calendar-check-outline"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">New event added</span>
                                  <span class="discribe">1/3/2014 (1pm - 2pm)</span>
                                  <span class="time">
                                    <time>10 min ago...</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info-dark">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-account-multiple-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Add request</span>
                                  <span class="discribe">Add Dany Jones as your contact.</span>
                                  <div class="buttons">
                                    <a href="#" class="btn btn-sm btn-success shadow-none text-white">accept</a>
                                    <a href="#" class="btn btn-sm shadow-none">delete</a>
                                  </div>
                                  <span class="time">
                                    <time>6 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                            <div class="media media-sm p-4 mb-0">
                              <div class="media-sm-wrapper bg-info">
                                <a href="user-profile.html">
                                  <i class="mdi mdi-playlist-check"></i>
                                </a>
                              </div>
                              <div class="media-body">
                                <a href="user-profile.html">
                                  <span class="title mb-0">Task complete</span>
                                  <span class="discribe">Afraid at highly months do things on at.</span>
                                  <span class="time">
                                    <time>1 hrs ago</time>...
                                  </span>
                                </a>
                              </div>
                            </div>

                          </div>
                        </div>
                      </div>

                      <footer class="border-top dropdown-notify-footer">
                        <div class="d-flex justify-content-between align-items-center py-2 px-4">
                          <span>Last updated 3 min ago</span>
                          <a id="refress-button" href="javascript:" class="btn mdi mdi-cached btn-refress"></a>
                        </div>
                      </footer>
                    </div>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="images/user/user-xs-01.jpg" class="user-image rounded-circle" alt="User Image" />
                      <span class="d-none d-lg-inline-block">John Doe</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <a class="dropdown-link-item" href="user-profile.html">
                          <i class="mdi mdi-account-outline"></i>
                          <span class="nav-text">My Profile</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="email-inbox.html">
                          <i class="mdi mdi-email-outline"></i>
                          <span class="nav-text">Message</span>
                          <span class="badge badge-pill badge-primary">24</span>
                        </a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-activities.html">
                          <i class="mdi mdi-diamond-stone"></i>
                          <span class="nav-text">Activitise</span></a>
                      </li>
                      <li>
                        <a class="dropdown-link-item" href="user-account-settings.html">
                          <i class="mdi mdi-settings"></i>
                          <span class="nav-text">Account Setting</span>
                        </a>
                      </li>

                      <li class="dropdown-footer">
                        <a class="dropdown-link-item" href="sign-in.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>



        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->
<div class="card card-default">
  <div class="px-6 py-4">
    <p>Mono provides a variety of <span class="text-secondary text-capitalize"> datatables </span> components with a
      little customization that suits its design standards. For more information, please see the official <a
        class="font-weight-bold" href="https://datatables.net/" target="_blank"> Datatables Documentaion.</a></p>
  </div>
</div>

<!-- Products Inventory -->
<div class="card card-default">
  <div class="card-header">
    <h2>Products Inventory</h2><a class="btn btn-primary" href="{{ url('categories/add') }}">
  <i class="fas fa-plus"></i> Add New
</a>


  </div>
  <div class="card-body">
    <div class="collapse" id="collapse-data-tables">
      <pre class="language-html mb-4">
<code >
&lt;table id="productsTable" class="table table-hover table-product" style="width:100%">
  &lt;thead>
    &lt;tr>
      &lt;th>Image&lt;/th>
      &lt;th>Product Name&lt;/th>
      &lt;th>ID&lt;/th>
      &lt;th>Qty&lt;/th>
      &lt;th>Variants&lt;/th>
      &lt;th>Committed&lt;/th>
      &lt;th>User Activity&lt;/th>
      &lt;th>Sold&lt;/th>
      &lt;th>In Stock&lt;/th>
      &lt;th>&lt;/th>
    &lt;/tr>
  &lt;/thead>
  &lt;tbody>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-01.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Coach Swagger&lt;/td>
      &lt;td>24541&lt;/td>
      &lt;td>27&lt;/td>
      &lt;td>1&lt;/td>
      &lt;td>2&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-01">&lt;/div>
      &lt;/td>
      &lt;td>4&lt;/td>
      &lt;td>18&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-02.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Toddler Shoes, Gucci Watch&lt;/td>
      &lt;td>24542&lt;/td>
      &lt;td>18&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>5&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-02">&lt;/div>
      &lt;/td>
      &lt;td>1&lt;/td>
      &lt;td>14&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-03.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Hat Black Suits&lt;/td>
      &lt;td>24543&lt;/td>
      &lt;td>20&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-03">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>26&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-04.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Backpack Gents&lt;/td>
      &lt;td>24544&lt;/td>
      &lt;td>37&lt;/td>
      &lt;td>8&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-04">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-05.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Speed 500 Ignite&lt;/td>
      &lt;td>24545&lt;/td>
      &lt;td>8&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>4&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-05">&lt;/div>
      &lt;/td>
      &lt;td>8&lt;/td>
      &lt;td>42&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-06.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Olay&lt;/td>
      &lt;td>24546&lt;/td>
      &lt;td>19&lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-06">&lt;/div>
      &lt;/td>
      &lt;td>79&lt;/td>
      &lt;td>12&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-07.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Ledger Nano X&lt;/td>
      &lt;td>24547&lt;/td>
      &lt;td>61&lt;/td>
      &lt;td>46&lt;/td>
      &lt;td>18&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-07">&lt;/div>
      &lt;/td>
      &lt;td>76&lt;/td>
      &lt;td>36&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-08.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Surface Laptop 2&lt;/td>
      &lt;td>24548&lt;/td>
      &lt;td>33&lt;/td>
      &lt;td>56&lt;/td>
      &lt;td>89&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-08">&lt;/div>
      &lt;/td>
      &lt;td>38&lt;/td>
      &lt;td>5&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-09.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>TIGI Bed Head Superstar Queen&lt;/td>
      &lt;td>24549&lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>9&lt;/td>
      &lt;td>15&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-09">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>46&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-10.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Wattbike Atom&lt;/td>
      &lt;td>24550&lt;/td>
      &lt;td>61&lt;/td>
      &lt;td>56&lt;/td>
      &lt;td>68&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-10">&lt;/div>
      &lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>19&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-11.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Smart Watch&lt;/td>
      &lt;td>24551&lt;/td>
      &lt;td>19&lt;/td>
      &lt;td>76&lt;/td>
      &lt;td>38&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-11">&lt;/div>
      &lt;/td>
      &lt;td>3&lt;/td>
      &lt;td>17&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-12.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Magic Bullet Blender&lt;/td>
      &lt;td>24552&lt;/td>
      &lt;td>12&lt;/td>
      &lt;td>30&lt;/td>
      &lt;td>14&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-12">&lt;/div>
      &lt;/td>
      &lt;td>26&lt;/td>
      &lt;td>9&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-13.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Kanana rucksack&lt;/td>
      &lt;td>24553&lt;/td>
      &lt;td>14&lt;/td>
      &lt;td>65&lt;/td>
      &lt;td>39&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-13">&lt;/div>
      &lt;/td>
      &lt;td>9&lt;/td>
      &lt;td>55&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-14.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Copic Opaque White&lt;/td>
      &lt;td>24554&lt;/td>
      &lt;td>43&lt;/td>
      &lt;td>29&lt;/td>
      &lt;td>75&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-14">&lt;/div>
      &lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>15&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>

    &lt;tr>
      &lt;td class="py-0">
        &lt;img src="images/products/products-xs-15.jpg" alt="Product Image">
      &lt;/td>
      &lt;td>Headphones&lt;/td>
      &lt;td>24555&lt;/td>
      &lt;td>17&lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>7&lt;/td>
      &lt;td>
        &lt;div id="tbl-chart-15">&lt;/div>
      &lt;/td>
      &lt;td>6&lt;/td>
      &lt;td>98&lt;/td>
      &lt;td>
        &lt;div class="dropdown">
          &lt;a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
          &lt;/a>

          &lt;div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
            &lt;a class="dropdown-item" href="#">Action&lt;/a>
            &lt;a class="dropdown-item" href="#">Another action&lt;/a>
            &lt;a class="dropdown-item" href="#">Something else here&lt;/a>
          &lt;/div>
        &lt;/div>
      &lt;/td>
    &lt;/tr>
  &lt;/tbody>
&lt;/table>
</code>
      </pre>
    </div>
    <table id="productsTable" class="table table-hover table-product" style="width:100%">
      <thead>
        <tr>
          <th>Image</th>
          <th>Product Name</th>
          <th>ID</th>
          <th>Qty</th>
          <th>Variants</th>
          <th>Committed</th>
          <th>User Activity</th>
          <th>Sold</th>
          <th>In Stock</th>
          <th></th>
        </tr>
      </thead>
      <tbody>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-01.jpg" alt="Product Image">
          </td>
          <td>Coach Swagger</td>
          <td>24541</td>
          <td>27</td>
          <td>1</td>
          <td>2</td>
          <td>
            <div id="tbl-chart-01"></div>
          </td>
          <td>4</td>
          <td>18</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-02.jpg" alt="Product Image">
          </td>
          <td>Toddler Shoes, Gucci Watch</td>
          <td>24542</td>
          <td>18</td>
          <td>7</td>
          <td>5</td>
          <td>
            <div id="tbl-chart-02"></div>
          </td>
          <td>1</td>
          <td>14</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-03.jpg" alt="Product Image">
          </td>
          <td>Hat Black Suits</td>
          <td>24543</td>
          <td>20</td>
          <td>3</td>
          <td>7</td>
          <td>
            <div id="tbl-chart-03"></div>
          </td>
          <td>6</td>
          <td>26</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-04.jpg" alt="Product Image">
          </td>
          <td>Backpack Gents</td>
          <td>24544</td>
          <td>37</td>
          <td>8</td>
          <td>3</td>
          <td>
            <div id="tbl-chart-04"></div>
          </td>
          <td>6</td>
          <td>7</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-05.jpg" alt="Product Image">
          </td>
          <td>Speed 500 Ignite</td>
          <td>24545</td>
          <td>8</td>
          <td>3</td>
          <td>4</td>
          <td>
            <div id="tbl-chart-05"></div>
          </td>
          <td>8</td>
          <td>42</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-06.jpg" alt="Product Image">
          </td>
          <td>Olay</td>
          <td>24546</td>
          <td>19</td>
          <td>6</td>
          <td>6</td>
          <td>
            <div id="tbl-chart-06"></div>
          </td>
          <td>79</td>
          <td>12</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-07.jpg" alt="Product Image">
          </td>
          <td>Ledger Nano X</td>
          <td>24547</td>
          <td>61</td>
          <td>46</td>
          <td>18</td>
          <td>
            <div id="tbl-chart-07"></div>
          </td>
          <td>76</td>
          <td>36</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-08.jpg" alt="Product Image">
          </td>
          <td>Surface Laptop 2</td>
          <td>24548</td>
          <td>33</td>
          <td>56</td>
          <td>89</td>
          <td>
            <div id="tbl-chart-08"></div>
          </td>
          <td>38</td>
          <td>5</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-09.jpg" alt="Product Image">
          </td>
          <td>TIGI Bed Head Superstar Queen</td>
          <td>24549</td>
          <td>3</td>
          <td>9</td>
          <td>15</td>
          <td>
            <div id="tbl-chart-09"></div>
          </td>
          <td>6</td>
          <td>46</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-10.jpg" alt="Product Image">
          </td>
          <td>Wattbike Atom</td>
          <td>24550</td>
          <td>61</td>
          <td>56</td>
          <td>68</td>
          <td>
            <div id="tbl-chart-10"></div>
          </td>
          <td>3</td>
          <td>19</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-11.jpg" alt="Product Image">
          </td>
          <td>Smart Watch</td>
          <td>24551</td>
          <td>19</td>
          <td>76</td>
          <td>38</td>
          <td>
            <div id="tbl-chart-11"></div>
          </td>
          <td>3</td>
          <td>17</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-12.jpg" alt="Product Image">
          </td>
          <td>Magic Bullet Blender</td>
          <td>24552</td>
          <td>12</td>
          <td>30</td>
          <td>14</td>
          <td>
            <div id="tbl-chart-12"></div>
          </td>
          <td>26</td>
          <td>9</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-13.jpg" alt="Product Image">
          </td>
          <td>Kanana rucksack</td>
          <td>24553</td>
          <td>14</td>
          <td>65</td>
          <td>39</td>
          <td>
            <div id="tbl-chart-13"></div>
          </td>
          <td>9</td>
          <td>55</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-14.jpg" alt="Product Image">
          </td>
          <td>Copic Opaque White</td>
          <td>24554</td>
          <td>43</td>
          <td>29</td>
          <td>75</td>
          <td>
            <div id="tbl-chart-14"></div>
          </td>
          <td>7</td>
          <td>15</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>

        <tr>
          <td class="py-0">
            <img src="images/products/products-xs-15.jpg" alt="Product Image">
          </td>
          <td>Headphones</td>
          <td>24555</td>
          <td>17</td>
          <td>6</td>
          <td>7</td>
          <td>
            <div id="tbl-chart-15"></div>
          </td>
          <td>6</td>
          <td>98</td>
          <td>
            <div class="dropdown">
              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </td>
        </tr>



      </tbody>
    </table>

  </div>
</div>
</div>

        </div>


@endsection
