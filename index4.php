<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Center | โรงพยาบาลแม่สอด</title>
  <style>
    .card-tools {
        height: 100%; /* หรือค่าที่เหมาะสมกับการแสดงกราฟ */
    }
    .StylemyChart {
      max-width: 100%;
      max-height: 100%;
    }
    #date-range-picker {
    text-align: center; /* จัดตัวหนังสือให้อยู่ตรงกลาง */
    box-sizing: border-box; /* ไม่นับ padding และ border ในการคำนวณความกว้าง */
  }
  </style>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
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
  <!-- Chart JS  -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- Daterangepicker style -->
  <script src="https://cdn.jsdelivr.net/npm/daterangepicker@latest/daterangepicker.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/air-datepicker@3.1.0/locale/th.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                ประเภทผู้ป่วย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.php" class="nav-link">
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
                <a href="./index4.php" class="nav-link active">
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
                  <p>ชุดข้อมูลคนไข้ Admit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data6.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูล ผู้ป่วยนัด</p>
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">ประเภทผู้ป่วยนัด</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">ผู้ป่วยนัด</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Content Wrapper. Contains page content -->
  <form id="date-form" method="post">
    <?php
    $Query_Clinic = "SELECT clinic_id, clinic_name FROM clinics";
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="col-12 form-group">
                <label for="start-date">วันที่เริ่ม :</label>
                <input type="text" name="StartDateRange"/>
                <label for="end-date">วันที่สิ้นสุด :</label>
                <input type="text" Name="EndDateRange"/>
                <label for="Mark">ตรวจแล้ว :</label>
                <select id="Mark" name="Mark">
                    <option value="1">ตรวจแล้ว</option>
                    <option value="2">ไม่ได้ตรวจ</option>
                    <option value="3">ทั้งหมด</option>
                </select>
                <label for="Clinic">ห้องตรวจ :</label>
                <select id="Clinic" name="Clinic">
                    <option value="1">ตรวจแล้ว</option>
                    <option value="2">ไม่ได้ตรวจ</option>
                    <option value="3">ทั้งหมด</option>
                </select>
                <button type="submit">ค้นหา</button> 
            </div>
        </div>
      </div>
    </div>
    </form>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
          <?php
            	    include('pages/tables/function.php');
                  $objConnect = MSHOCI();
            ?>
            <!-- Query จำนวน admit -->
            <?php
                  $SQLTOTAL_IPD_Refer="SELECT Count(ALL i.AN) as TOTAL_IPD_Refer
                  FROM PATIENTS_REFER_HX refin,IPDTRANS i,PATIENTS p,CREDIT_TYPES ct,NATIVE_CODE n,PLACES pl,DEPARTS dep
                  where i.an=refin.an and i.hn=p.hn and refin.CREDIT_ID=ct.CREDIT_ID(+) and  p.native_id=n.native_id(+)  and i.PLA_PLACECODE=pl.PLACECODE and
                  dep.depend_on_id=pl.dep_depend_on_id and
                  refin.OPDIPD='I' and i.DATEDISCH  BETWEEN to_date('30-09-2023','DD-MM-YYYY') and to_date('1-10-2024','DD-MM-YYYY')";

                  $SQLTOTAL_OPD_Refer="SELECT Count(ALL o.OPD_NO) as TOTAL_OPD_Refer
                  FROM PATIENTS_REFER_HX refin,PATIENTS p,NATIVE_CODE n,CREDIT_TYPES ct,OPDS o,PLACES pl,DEPARTS dep
                  where o.OPD_NO=refin.OPD_NO and  refin.PAT_RUN_HN=p.run_hn and  refin.PAT_YEAR_HN=p.year_hn and  p.native_id=n.native_id(+) and refin.CREDIT_ID=ct.CREDIT_ID(+) and o.PLA_PLACECODE=pl.PLACECODE and
                  dep.depend_on_id=pl.dep_depend_on_id and TO_CHAR(o.OPD_DATE,'yyyy-mm-dd')=TO_CHAR(CURRENT_DATE, 'yyyy-MM-dd')";

                  $SQLTOTAL_IPD_DAED="select Count(ALL i.an) as TOTAL_IPD_DAED
                  from IPDTRANS i,patients p
                  where  i.hn = p.hn and  DEAD_FLAG='Y' and i.Dateadmit between to_date('30-09-2023','DD-MM-YYYY') and to_date('1-10-2024','DD-MM-YYYY')
                  Order by Dateadmit asc";                                                                                                                          
            ?>
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-ambulance"></i><i class="fas fa-bed"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">จำนวนนัด</span>
                <span class="info-box-number">
                <?php
                if($objConnect){
                    $stid = oci_parse($objConnect, $SQLTOTAL_IPD_Refer);
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
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-female"></i><i class="fas fa-male"></i><i class="fas fa-ambulance"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">มาตามนัด</span>
                <span class="info-box-number"><?php
                if($objConnect){
                    $stid = oci_parse($objConnect, $SQLTOTAL_OPD_Refer);
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
              ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-ambulance"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">ขาดนัด</span>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book-dead"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">จำนวนเสียชีวิต</span>
                <span class="info-box-number"><?php
                if($objConnect){
                    $stid = oci_parse($objConnect, $SQLTOTAL_IPD_DAED);
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
              </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">กราฟแสดงจำนวนผู้ป่วยที่มาตามนัดแยกตามแผนก</h5>
              </div>
              <div style="width: 800px; height: 800px; display: flex; justify-content: center; align-items: center;">
              <canvas id="myChart" class="StylemyChart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
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
<script src="mychart.js"></script>
<script>
  $(function() {
    $('input[name="StartDateRange"]').daterangepicker({
      singleDatePicker: true, // เปิดให้เลือกเฉพาะวันที่เริ่ม
      showDropdowns: true, // (ตามต้องการ) แสดง dropdown สำหรับเลือกเดือนและปี
      locale: {
        format: 'YYYY-MM-DD',
        applyLabel: 'ตกลง',
        cancelLabel: 'ยกเลิก',
        fromLabel: 'จาก',
        toLabel: 'ถึง',
        customRangeLabel: 'กำหนดเอง',
        daysOfWeek: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
        firstDay: 1
      }
    });
  });
  $(function() {
    $('input[name="EndDateRange"]').daterangepicker({
      singleDatePicker: true, // เปิดให้เลือกเฉพาะวันที่เริ่ม
      showDropdowns: true, // (ตามต้องการ) แสดง dropdown สำหรับเลือกเดือนและปี
      locale: {
        format: 'YYYY-MM-DD',
        applyLabel: 'ตกลง',
        cancelLabel: 'ยกเลิก',
        fromLabel: 'จาก',
        toLabel: 'ถึง',
        customRangeLabel: 'กำหนดเอง',
        daysOfWeek: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
        monthNames: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'],
        firstDay: 1
      }
    });
  });
</script>
</body>
</html>
