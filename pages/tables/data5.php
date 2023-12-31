<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ชุดข้อมูลระยะเวลารอคอยทุกแผนก</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">ติดต่อ</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4" style="background-color:rgb(10, 115, 199);">
    <!-- Brand Logo -->
    <a href="../../index3.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                ประเภทผู้ป่วย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วยใน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วยนัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วย Refer</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li> -->
            </ul>
          <!-- </li>
          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-database"></i>
              <p>
              ดูข้อมูล
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <!-- <li class="nav-item">
                <a href="../tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="../tables/data.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data5.php" class="nav-link active">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอยรวมทั้งหมด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data2.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้ Admit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data6.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้นัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data3.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้ Refer ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data4.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้ Refer ผู้ป่วยใน</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="../tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="../calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="../examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="../examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="../../iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ชุดข้อมูลระยะเวลารอคอยทุกแผนก</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">ชุดข้อมูลระยะเวลารอคอยทุกแผนก</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">        
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">ชุดข้อมูลระยะเวลารอคอยทุกแผนก</h3>
                  <!-- /.input group -->
                </div>
              </div>
              <!-- Function Connect Oracle Data Base -->
            <?php 
            include('function.php');
            $objConnect = MSHOCI();
            $SQLWaitting_ALL="select o.OPD_NO,p.hn,p.prename||''||p.name||' '||p.surname as psname,DECODE(p.SEX, 'M','Man','Women') as sex,trunc(months_between(o.OPD_DATE,p.BIRTHDAY)/12) age_year,
            ct.name as credit_name,ctm.name as cometohos,pl.fullplace,doc.prename||''||doc.name||' '||doc.surname as doctor_name,
            (select sum(a.M_SELL) from  ACCIDENT_FINANCE_4 a where a.N17=o.opd_no) as price,
            TO_CHAR(o.OPD_DATE,'yyyy-MM-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as visit_time,
            TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as start_opd_time,
            TO_CHAR(o.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(o.SCREENING_OPD_DATETIME,'HH24:MI:ss') as screen_opd_time,
            TO_CHAR(o.RX_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.RX_OPD_DATETIME,'HH24:MI:ss') rx_opd_time,
            TO_CHAR(o.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(o.FINISH_OPD_DATETIME,'HH24:MI:ss') as finnish_opd_time,
            TO_CHAR(o.AFTER_DOC_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(o.AFTER_DOC_DATETIME,'HH24:MI:ss') as doctor_time,
            (select TO_CHAR(ofh.DATETIME_IN_SECOND,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.DATETIME_IN_SECOND,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1) as DATETIME_IN_SECOND,
            (select TO_CHAR(ofh.CHECK_DRUG_OK_DATE,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.CHECK_DRUG_OK_DATE,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1) as CHECK_DRUG_OK_DATE,
            (select TO_CHAR(ofh.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1) as ALREADY_RECEIVE_DRUG_DATE,
            DECODE(o.SCREENING_OPD_DATETIME,null, ' ',DECODE(o.OPD_TIME, null, ' ',ROUND((TO_DATE(TO_CHAR(o.SCREENING_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.SCREENING_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')-
            TO_DATE(TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')) *24*60,2))) as time_screen,
            
            DECODE(o.AFTER_DOC_DATETIME,null, ' ',DECODE(o.RX_OPD_DATETIME, null, ' ',ROUND((TO_DATE(TO_CHAR(o.AFTER_DOC_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(o.AFTER_DOC_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')-
            TO_DATE(TO_CHAR(o.RX_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.RX_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')) *24*60,2))) as time_doctor,
            
            DECODE((select ofh.ALREADY_RECEIVE_DRUG_DATE from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1), null, 0,DECODE((select ofh.DATETIME_IN_SECOND
            from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1), null, 0,
            ROUND((TO_DATE((select TO_CHAR(ofh.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1),'YYYY-MM-DD HH24:MI:ss')-
            TO_DATE((select TO_CHAR(ofh.DATETIME_IN_SECOND,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.DATETIME_IN_SECOND,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1),'YYYY-MM-DD HH24:MI:ss')) *1440, 2))) as time_drug,
            
            DECODE(o.SCREENING_OPD_DATETIME,null, ' ',DECODE((select ofh.DATETIME_IN_SECOND
            from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1), null, ' ',ROUND((TO_DATE((select TO_CHAR(ofh.DATETIME_IN_SECOND,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.DATETIME_IN_SECOND,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1),'YYYY-MM-DD HH24:MI:ss')-TO_DATE(TO_CHAR(o.SCREENING_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.SCREENING_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')) *1440, 2))) as time_drugload,
            DECODE((o.SCREENING_OPD_DATETIME),null, ' ',DECODE(o.RX_OPD_DATETIME, null, ' ',ROUND((TO_DATE(TO_CHAR(o.RX_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.RX_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')-TO_DATE(TO_CHAR(o.SCREENING_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.SCREENING_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')
            ) *24*60,2))) as time_docdrug,
            ROUND(
            DECODE(o.SCREENING_OPD_DATETIME,null, 0,DECODE(o.OPD_TIME, null, 0,ROUND((TO_DATE(TO_CHAR(o.SCREENING_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.SCREENING_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')-
            TO_DATE(TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')) *24*60,2)))+
            DECODE(o.AFTER_DOC_DATETIME,null, 0,DECODE(o.RX_OPD_DATETIME, null, 0,ROUND((TO_DATE(TO_CHAR(o.AFTER_DOC_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(o.AFTER_DOC_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')-
            TO_DATE(TO_CHAR(o.RX_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.RX_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')) *24*60,2)))
            +
            DECODE((select ofh.ALREADY_RECEIVE_DRUG_DATE from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1), null, 0,DECODE((select ofh.DATETIME_IN_SECOND
            from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1), null, 0,
            ROUND((TO_DATE((select TO_CHAR(ofh.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1),'YYYY-MM-DD HH24:MI:ss')-
            TO_DATE((select TO_CHAR(ofh.DATETIME_IN_SECOND,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.DATETIME_IN_SECOND,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1),'YYYY-MM-DD HH24:MI:ss')) *1440, 2)))+
            DECODE(o.SCREENING_OPD_DATETIME,null, 0,DECODE((select ofh.DATETIME_IN_SECOND
            from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1), null, 0,ROUND((TO_DATE((select TO_CHAR(ofh.DATETIME_IN_SECOND,'yyyy-mm-dd') ||' '||TO_CHAR(ofh.DATETIME_IN_SECOND,'HH24:MI:ss') from OPD_FINANCE_HEADERS ofh
            where ofh.OPD_NO=o.OPD_NO and ofh.ALREADY_RECEIVE_DRUG_FLAG='Y' and rownum<=1),'YYYY-MM-DD HH24:MI:ss')-TO_DATE(TO_CHAR(o.SCREENING_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.SCREENING_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')) *1440, 2)))+
            DECODE((o.SCREENING_OPD_DATETIME),null, 0,DECODE(o.RX_OPD_DATETIME, null, 0,ROUND((TO_DATE(TO_CHAR(o.RX_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.RX_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')-TO_DATE(TO_CHAR(o.SCREENING_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.SCREENING_OPD_DATETIME,'HH24:MI:ss'),'YYYY-MM-DD HH24:MI:ss')
            ) *24*60,2))),2)as sum_time,(select n.name from native_code n where n.native_id=p.native_id and rownum<=1) as nat_name,o.mark_yn
            from OPDS o,PATIENTS p,OPD_WAREHOUSE ow,CREDIT_TYPES ct,COME_TO_HOSPITAL_CODE ctm,PLACES pl,DOC_DBFS doc
            where o.OPD_NO=ow.OPD_NO  and ow.credit_id=ct.credit_id and o.PAT_RUN_HN=p.RUN_HN and
            o.PAT_YEAR_HN=p.YEAR_HN and o.COME_TO_HOSPITAL_CODE=ctm.CODE and
            doc.DOC_CODE=o.DD_DOC_CODE and o.PLA_PLACECODE=pl.PLACECODE and
            pl.PT_PLACE_TYPE_CODE='1' and pl.Del_Flag is NULL  and o.OPD_DATE BETWEEN TO_DATE('2023-11-22','yyyy-mm-dd')  and TO_DATE('2023-11-22','yyyy-mm-dd') +0.99999
            Order by pl.PLACECODE Desc";
	    if($objConnect){
		$stid = oci_parse($objConnect, $SQLWaitting_ALL);
		oci_execute($stid);
            ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="ReferData" class="table table-bordered table-striped">
                <thead>
            <tr>
                <th>OPD_NO</th>
                <th>HN</th>
                <th>ชื่อ นามสกุล</th>
                <th>เพศ</th>
				        <th>อายุ</th>
                <th>ชื่อสิทธิ์</th>
                <th>มาโดย</th>
                <th>แผนก</th>
                <th>ชื่อแพทย์ที่ตรวจ</th>
                <th>PRICE</th>
                <th>เวลาเปิด Visit</th>
                <th>เวลาลง ความดัน/ส่วนสูง</th>
                <th>เวลาพยาบาลซักประวัติ</th>
                <th>RX_OPD_TIME</th>
                <th>FINNISH_OPD_TIME</th>
                <th>DOCTOR_TIME</th>
                <th>DATETIME_IN_SECOND</th>
                <th>CHECK_DRUG_OK_DATE</th>
                <th>ALREADY_RECEIVE_DRUG_DATE</th>
                <th>ใช้เวลาในการซักประวัติ</th>
                <th>ใช้เวลาในการตรวจ</th>
                <th>ใช้เวลาในการคีย์รายการยา</th>
                <th>TIME_DRUGLOAD</th>
                <th>TIME_DOCDRUG</th>
                <th>เวลารวมทั้งหมด/นาที</th>
                <th>สัญชาติ</th>
                <th>ตรวจแล้ว</th>
            </tr>
        </thead>
<?php
		echo "<tbody>";
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    	echo "<tr>\n";
		
    foreach ($row as $item) {
        echo  "<td>".($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    }
    	echo "</tr>\n";
		
	}
		echo "</tbody>";
		echo "</table>\n";
	}
	else
	{
		echo "ไม่สามารถติดต่อ Oracle ได้";
	}
?>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--script src="../../dist/js/demo.js"></script-->
<!-- Page specific script -->

<script>  
  $(function () {
    $("#ReferData").DataTable({
      "responsive": true, 
      "lengthChange": true, 
      "autoWidth": false,
      "fixedColumns": true,
      "buttons": ["excel", "print"],  //"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      "exportOptions": {
      "modifer": {
      "page": 'all',
      "search": 'none'}
    }

    }).buttons().container().appendTo('#ReferData_wrapper .col-md-6:eq(0)');

    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
