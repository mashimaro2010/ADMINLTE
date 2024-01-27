<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Center | โรงพยาบาลแม่สอด</title>
  <!-- jquery -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:rgb(243, 247, 244);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
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
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
        <a class="nav-link" id="logoutLink" role="button">
        <i class="fas fa-right-from-bracket"></i>Logout</a>
       </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4" style="background-color:rgb(10, 115, 199);">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
      <span class="brand-text font-weight-light">DataCenterรพ.แม่สอด</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                ประเภทผู้ป่วย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วยใน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วยนัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                  <p>ผู้ป่วย Refer</p>
                </a>
              </li>
            </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                ดูข้อมูล
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/data.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data2.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลผู้ป่วย Admit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data6.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้นัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data3.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูล Refer ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data4.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูล Refer ผู้ป่วยใน</p>
                </a>
              </li>
              </li>
            </ul>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ประเภทผู้ป่วยนอก</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ผู้ป่วยนอก</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <?php
            	    include('pages/tables/function.php');
                  $objConnect = MSHOCI();
            ?>
            <!-- Query จำนวน VN -->
            <?php
                  $SQLAllVisits="SELECT Sum(Count(DISTINCT OPD_NO)) as ALLVISITS
                  from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
                  TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
                  TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
                  TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
                  TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
                  (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
                  and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
                  (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
                  from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
                  from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
                  WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
                  TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
                  and OFH.OPD_NO=O.OPD_NO
                  and  TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-MM-dd') /* get Present Day */
                   and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
                  Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
                  O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
                  O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
                  Order By HN,OPD_NO asc)  Temp  Group by HN,PSNAME,CREDIT_ID,
                  OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
                  RECEIVED_DRUG_TIME Order by HN,OPD_NO";
            ?>
            <!-- Query จำนวน DoneScreen -->
            <?php
            $SQLDoneScreen="SELECT Sum(Count(DISTINCT OPD_NO)) as DoneScreen
            from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
            TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
            TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
            TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
            TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
            (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
            and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
            (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
            from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
            from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
            WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
            TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
            and OFH.OPD_NO=O.OPD_NO
            and  TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-MM-dd') /* get Present Day */
             and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
            Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
            O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
            O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
            Order By HN,OPD_NO asc)  Temp  where SCREEN_OPD_TIME <> ' ' Group by HN,PSNAME,CREDIT_ID,
            OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
            RECEIVED_DRUG_TIME Order by HN,OPD_NO";
            ?>
            <!-- Query จำนวน DoneDoctor -->
            <?php
            $SQLDoneDoctor="SELECT Sum(Count(DISTINCT OPD_NO)) as DoneDoctor
            from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
            TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
            TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
            TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
            TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
            (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
            and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
            (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
            from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
            from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
            WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
            TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
            and OFH.OPD_NO=O.OPD_NO
            and  TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-MM-dd') /* get Present Day */
             and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
            Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
            O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
            O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
            Order By HN,OPD_NO asc)  Temp  where Doctor_Entry<>' ' Group by HN,PSNAME,CREDIT_ID,
            OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
            RECEIVED_DRUG_TIME Order by HN,OPD_NO";
            ?>
            <!-- Query จำนวน Received Drug -->
            <?php
            $SQLReceivedDrug="SELECT Sum(Count(DISTINCT OPD_NO)) as ReceivedDrug
            from (SELECT O.OPD_NO,P.HN,P.PRENAME||''||P.NAME||' '||P.SURNAME as psname,OW.CREDIT_ID,
            TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')||' '||TO_CHAR(o.OPD_TIME,'HH24:MI:ss') as Open_Visit_Time,
            TO_CHAR(o.REACH_OPD_DATETIME,'yyyy-mm-dd')||' '||TO_CHAR(o.REACH_OPD_DATETIME,'HH24:MI:ss') as Start_opd_time,
            TO_CHAR(O.SCREENING_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.SCREENING_OPD_DATETIME,'HH24:MI:ss') as Screen_opd_time,
            TO_CHAR(O.FINISH_OPD_DATETIME,'yyyy-mm-dd') ||' '||TO_CHAR(O.FINISH_OPD_DATETIME,'HH24:MI:ss') as Finish_opd_time,
            (Select Max(To_Char(drw.MAIN_DATE,'yyyy-mm-dd')||' '||TO_CHAR(drw.MAIN_TIME,'HH24:MI:ss')) From data_drug_wh drw where drw.HN=P.HN
            and TO_CHAR(drw.MAIN_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-mm-dd')) as Doctor_Entry,
            (select Max(To_Char(OFH.ALREADY_RECEIVE_DRUG_DATE,'yyyy-mm-dd')||' '||TO_CHAR(OFH.ALREADY_RECEIVE_DRUG_DATE,'HH24:MI:ss'))
            from OPD_FINANCE_HEADERS OFH where OFH.OPD_NO=O.OPD_NO and OFH.FT_TYPE_CODE='03' ) as Received_Drug_Time
            from OPDS O,PATIENTS P,OPD_FINANCE_HEADERS OFH,OPD_WAREHOUSE OW
            WHERE O.PAT_RUN_HN=P.RUN_HN and O.PAT_YEAR_HN=P.YEAR_HN AND
            TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(ofh.datetime,'yyyy-mm-dd')
            and OFH.OPD_NO=O.OPD_NO
            and  TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-MM-dd') /* get Present Day */
             and O.OPD_NO=OW.OPD_NO and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(OW.OPD_DATE,'yyyy-mm-dd')
            Group by O.OPD_NO,P.HN,P.PRENAME,P.NAME,P.SURNAME,p.SEX,o.OPD_DATE,p.BIRTHDAY,OW.CREDIT_ID,
            O.OPD_TIME,o.REACH_OPD_DATETIME,OFH.opd_finance_no,OFH.FT_TYPE_CODE,O.SCREENING_OPD_DATETIME,
            O.FINISH_OPD_DATETIME,o.RX_OPD_DATETIME,ofh.date_created
            Order By HN,OPD_NO asc)  Temp  where RECEIVED_DRUG_TIME<>' ' Group by HN,PSNAME,CREDIT_ID,
            OPEN_VISIT_TIME,START_OPD_TIME,SCREEN_OPD_TIME,FINISH_OPD_TIME,Doctor_Entry,
            RECEIVED_DRUG_TIME Order by HN,OPD_NO";
            ?>
            <div class="small-box bg-warning">
              <div class="inner">
                <h2 class="font-weight-bold success-lighter-hover mb-2">
                  <?php
                if($objConnect){
                    $stid = oci_parse($objConnect, $SQLAllVisits);
                    oci_execute($stid);
                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {	
                      foreach ($row as $item) {
                          echo  $item;
                       
                        }
                    }
                }
                    else
                    {
                      echo "ไม่สามารถติดต่อ Oracle ได้";
                    }
              ?>
              </h2>
                <p>จำนวน VN</p>
              </div>
              <div class="icon">
                <i class="fas fa-hospital-alt"></i>
              </div>
              <a href="#" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php
                if($objConnect){
                    $stid = oci_parse($objConnect, $SQLDoneScreen);
                    oci_execute($stid);
                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {	
                      foreach ($row as $item) {
                          echo  $item;
                       
                        }
                    }
                }
                    else
                    {
                      echo "ไม่สามารถติดต่อ Oracle ได้";
                    }
              ?></h3>
                <p>จำนวนคัดกรอง</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-nurse"></i>
              </div>
              <a href="#" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php
                if($objConnect){
                    $stid = oci_parse($objConnect, $SQLDoneDoctor);
                    oci_execute($stid);
                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {	
                      foreach ($row as $item) {
                          echo  $item;
                       
                        }
                    }
                }
                    else
                    {
                      echo "ไม่สามารถติดต่อ Oracle ได้";
                    }
              ?></h3>

                <p>จำนวนพบแพทย์</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-md"></i>
              </div>
              <a href="#" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php
                if($objConnect){
                    $stid = oci_parse($objConnect, $SQLReceivedDrug);
                    oci_execute($stid);
                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {	
                      foreach ($row as $item) {
                          echo  $item;
                       
                        }
                    }
                }
                    else
                    {
                      echo "ไม่สามารถติดต่อ Oracle ได้";
                    }
              ?></h3>

                <p>จำนวนรับยา</p>
              </div>
              <div class="icon">
                <i class="fas fa-prescription"></i>
              </div>
              <a href="#" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>65</h3>

                <p>ระยะเวลารอคอย</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-primary">
              <div class="inner">
                <h3>65</h3>

                <p>จำนวน refer in/out</p>
              </div>
              <div class="icon">
                <i class="fas fa-ambulance"></i>
              </div>
              <a href="#" class="small-box-footer">ดูรายละเอียด <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024-2025 <a href="https://maesot.moph.go.th">ศูนย์ข้อมูลโรงพยาบาลแม่สอด</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="plugins/raphael/raphael.min.js"></script>
<script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script>
    document.getElementById('logoutLink').addEventListener('click', function() {
        window.location.href = 'logout.php';
    });
  </script>
</body>
</html>
