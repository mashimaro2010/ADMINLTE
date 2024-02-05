<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Center | โรงพยาบาลแม่สอด</title>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- เพิ่มไฟล์ Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Daterangepicker style -->
  <script src="https://cdn.jsdelivr.net/npm/daterangepicker@latest/daterangepicker.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:rgb(243, 247, 244);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">ติดต่อ</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- Navbar Logout -->
      <li class="nav-item">
      <a class="nav-link" id="logoutLink" role="button">
        <i class="fas fa-right-from-bracket"></i>Logout</a>
      </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-info elevation-4" style="background-color:rgb(10, 115, 199);">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
      <span class="brand-text font-weight-light">DataCenterรพ.แม่สอด</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User ผู้ใช้งาน</a>
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
            <i class="fas fa-layer-group"></i>
              <p>
                ประเภทผู้ป่วย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../opd/index.php" class="nav-link">
                <i class="fas fa-wheelchair"></i>
                  <p>ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.php" class="nav-link active">
                <i class="fas fa-bed-pulse"></i>
                  <p>ผู้ป่วยใน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index4.php" class="nav-link">
                <i class="fas fa-calendar"></i>
                  <p>ผู้ป่วยนัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.php" class="nav-link">
                <i class="fas fa-truck-medical"></i>
                  <p>ผู้ป่วย Refer</p>
                </a>
              </li>
            </ul>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-database"></i>
              <p>
              ดูข้อมูล
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/data.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-clock"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data2.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-bed-pulse"></i>
                  <p>ชุดข้อมูลคนไข้ Admit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/tables/data6.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-calendar"></i>
                  <p>ชุดข้อมูลคนไข้นัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data3.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-truck-medical"></i>
                  <p>ชุดข้อมูล Refer ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data4.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-truck-medical"></i>
                  <p>ชุดข้อมูล Refer ผู้ป่วยใน</p>
                </a>
              </li>
              </li> 
            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <?php
    require_once 'IPDQuery.php';
    $currentDate = date('d-m-Y');
    $startDate = $currentDate;
    $endDate = $currentDate;
    if (isset($_POST['StartDateRange']) && isset($_POST['EndDateRange'])) {
      $startDateTime = DateTime::createFromFormat('d-m-Y', $_POST['StartDateRange']);
      $endDateTime = DateTime::createFromFormat('d-m-Y', $_POST['EndDateRange']);
  
      if ($startDateTime && $endDateTime) {
          // หากการสร้าง DateTime สำเร็จ
          $startDate = $startDateTime->format('d-m-Y');
          $endDate = $endDateTime->format('d-m-Y');
      } else {
          // การสร้าง DateTime ล้มเหลว, จัดการข้อผิดพลาดที่นี่
          $startDate = '01-10-2022';
          $endDate = '30-09-2023';
      }
  } else {
      // ถ้าไม่มีข้อมูลที่ส่งมา กำหนดวันที่เริ่มต้นและสิ้นสุดเป็นค่าเริ่มต้น
      $startDate = '01-10-2022';
      $endDate = '30-09-2023';
  }
    ?>
  </aside>
  <form id="date-form" method="post">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h1 class="m-0">ประเภทผู้ป่วยใน</h1>            
          </div><!-- /.col -->
          <div class="col-sm-7 form-group">
                <label for="start-date">วันที่เริ่ม :</label>
                <input type="text" name="StartDateRange" id="start-date">
                <label for="end-date">วันที่สิ้นสุด :</label>
                <input type="text" name="EndDateRange" id="end-date">
                <label for="Mark">ตรวจแล้ว :</label>            
                <button type="submit">ค้นหา</button> 
          </div>
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">ผู้ป่วยใน</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </form>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="row col-12" style="text-align:center; font-size: 22px; font-weight: bold; color: blue;">
        <h1 style="text-align:center; margin: 0 auto;">
        วันที่เริ่ม:<?php echo $startDate?> วันที่สิ้นสุด:<?php echo $endDate?> 
        </h1>
        </div>  
          <div class="col-12 col-sm-6 col-md-3">
         
            <!-- Query จำนวน admit -->
            <div class="info-box">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-bed"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">จำนวน admit</span>
                <span class="info-box-number">                   
              <?php
              $db=new IPDQuery();
              try{
                $TOTAL_IPDADMIT=$db->Total_IPDAdmit($startDate, $endDate);
                echo $TOTAL_IPDADMIT;
              } catch(exception $e){
                echo "Error:". $e->getMessage();
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
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-female"></i><i class="fas fa-male"></i><i class="far fa-smile"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">จำนวนจำหน่าย</span>
                <span class="info-box-number">
              <?php
              $db=new IPDQuery();
              try{
                $TOTAL_IPD_DISCH=$db->TOTAL_IPD_DISCH($startDate, $endDate);
                echo $TOTAL_IPD_DISCH;
              } catch(exception $e){
                echo "Error:". $e->getMessage();
              }
              ?>  
              </span>
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
                <span class="info-box-text">จำนวน Refer IN/OUT</span>
                <span class="info-box-number">                  
                <?php 
              $db=new IPDQuery();
              try{
                $TOTAL_IPD_REFER=$db->TOTAL_IPD_REFER($startDate, $endDate);
                echo $TOTAL_IPD_REFER;
              } catch(exception $e){
                echo "Error:". $e->getMessage();
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
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-book-dead"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">จำนวนเสียชีวิต</span>
                <span class="info-box-number">
              <?php 
              $db=new IPDQuery();
              try{
                $TOTAL_IPD_DAED=$db->TOTAL_IPD_DAED($startDate, $endDate);
                echo $TOTAL_IPD_DAED;
              } catch(exception $e){
                echo "Error:". $e->getMessage();
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024-2025 <a href="https://maesot.moph.go.th">ศูนย์ข้อมูลโรงพยาบาลแม่สอด</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script>
  $(function() {
    $('input[name="StartDateRange"]').daterangepicker({
      singleDatePicker: true, // เปิดให้เลือกเฉพาะวันที่เริ่ม
      showDropdowns: true, // (ตามต้องการ) แสดง dropdown สำหรับเลือกเดือนและปี
      locale: {
        format: 'DD-MM-YYYY',
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
        format: 'DD-MM-YYYY',
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
