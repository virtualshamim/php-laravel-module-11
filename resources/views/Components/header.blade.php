<!DOCTYPE html>
<html
  lang="en"
  data-layout="vertical"
  data-topbar="light"
  data-sidebar="light"
  data-sidebar-size="lg"
  data-sidebar-image="none"
  data-preloader="disable"
>
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Storekeeper</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/') }}{{ asset('/') }}assets/images/favicon.ico" />
    <!-- Bootstrap Css -->
    <link
      href="{{ asset('/') }}assets/css/bootstrap.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Icons Css -->
    <link href="{{ asset('/') }}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/') }}assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('/') }}assets/css/custom.min.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    <!-- Begin page -->
    <div id="layout-wrapper">
      <header id="page-topbar">
        <div class="layout-width">
          <div class="navbar-header">
            <div class="d-flex">
              <!-- LOGO -->
              <div class="navbar-brand-box horizontal-logo">
                <a href="{{ route('/') }}" class="logo logo-dark">
                  <span class="logo-sm">
                    <img src="{{ asset('/') }}assets/images/webrelaxer.svg" alt="" height="22" />
                  </span>
                  <span class="logo-lg">
                    <img src="{{ asset('/') }}assets/images/webrelaxer.svg" alt="" height="17" />
                  </span>
                </a>

                <a href="{{ route('/') }}" class="logo logo-light">
                  <span class="logo-sm">
                    <img src="{{ asset('/') }}assets/images/webrelaxer.svg" alt="" height="22" />
                  </span>
                  <span class="logo-lg">
                    <img
                      src="{{ asset('/') }}assets/images/webrelaxer.svg"
                      alt=""
                      height="17"
                    />
                  </span>
                </a>
              </div>

              <button
                type="button"
                class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                id="topnav-hamburger-icon"
              >
                <span class="hamburger-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </span>
              </button>

              <!-- App Search-->
             
            </div>

            <div class="d-flex align-items-center">
              <div class="dropdown d-md-none topbar-head-dropdown header-item">
                <button
                  type="button"
                  class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                  id="page-header-search-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="bx bx-search fs-22"></i>
                </button>
                <div
                  class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                  aria-labelledby="page-header-search-dropdown"
                >
                  <form class="p-3">
                    <div class="form-group m-0">
                      <div class="input-group">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search ..."
                          aria-label="Recipient's username"
                        />
                        <button class="btn btn-primary" type="submit">
                          <i class="mdi mdi-magnify"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="dropdown ms-sm-3 header-item topbar-user">
                <button
                  type="button"
                  class="btn"
                  id="page-header-user-dropdown"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="d-flex align-items-center">
                    <img
                      class="rounded-circle header-profile-user"
                      src="{{ asset('/') }}assets/images/users/avatar-1.jpg"
                      alt="Header Avatar"
                    />
                    <span class="text-start ms-xl-2">
                      <span
                        class="d-none d-xl-inline-block ms-1 fw-medium user-name-text"
                        >Shamim</span
                      >
                      <span
                        class="d-none d-xl-block ms-1 fs-12 user-name-sub-text"
                        >Admin</span
                      >
                    </span>
                  </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                  <!-- item-->
                  <h6 class="dropdown-header">Welcome Shamim!</h6>
                  <a class="dropdown-item" href="{{ asset('/') }}pages-profile.html"
                    ><i
                      class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle">Profile</span></a
                  >
                 
                  <a class="dropdown-item" href="{{ asset('/') }}auth-logout-basic.html"
                    ><i
                      class="mdi mdi-logout text-muted fs-16 align-middle me-1"
                    ></i>
                    <span class="align-middle" data-key="t-logout"
                      >Logout</span
                    ></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- ========== App Menu ========== -->
      <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <!-- Dark Logo-->
          <a href="{{ route('/') }}" class="logo logo-dark">
            <span class="logo-sm">
              <img src="{{ asset('/') }}assets/images/brand-logo-small.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="{{ asset('/') }}assets/images/webrelaxer.svg" alt="" height="40" />
            </span>
          </a>
          <!-- Light Logo-->
          <a href="{{ route('/') }}" class="logo logo-light">
            <span class="logo-sm">
              <img src="{{ asset('/') }}assets/images/brand-logo-small.png" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="{{ asset('/') }}assets/images/webrelaxer.svg" alt="" height="17" />
            </span>
          </a>
          <button
            type="button"
            class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover"
          >
            <i class="ri-record-circle-line"></i>
          </button>
        </div>

        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarDashboards"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="true"
                  aria-controls="sidebarDashboards"
                >
                  <i class="ri-product-hunt-line"></i>
                  <span data-key="t-dashboards">Products</span>
                </a>
                <div class="collapse menu-dropdown show" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="{{ route('all-products') }}"
                        class="nav-link"
                        data-key="t-analytics"
                      >
                        All Products
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="{{ route('new-product') }}"
                        class="nav-link"
                        data-key="t-crm"
                      >
                        Add New Product
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link menu-link" href="{{ asset('/') }}widgets.html">
                  <i data-feather="copy" class="icon-dual"></i>
                  <span data-key="t-widgets">Widgets</span>
                </a>
              </li> -->
            </ul>
          </div>
          <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
      </div>
      <!-- Left Sidebar End -->
      <!-- Vertical Overlay-->
      <div class="vertical-overlay"></div>
      <div class="main-content">
