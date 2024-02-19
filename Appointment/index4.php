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
    
    #date-range-picker {
      text-align: center; /* จัดตัวหนังสือให้อยู่ตรงกลาง */
      box-sizing: border-box; /* ไม่นับ padding และ border ในการคำนวณความกว้าง */
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
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
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
  <!-- Chart JS  -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-2" style="opacity: .8">
      <span class="brand-text font-weight-light">DataCenter รพ.แม่สอด</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
            <i class="fas fa-layer-group"></i>
              <p>
                ประเภทผู้ป่วย
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../OPD/index.php" class="nav-link">
                <i class="fas fa-wheelchair"></i>
                  <p>ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../IPD/index2.php" class="nav-link">
                <i class="fas fa-bed-pulse"></i>
                  <p>ผู้ป่วยใน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index4.php" class="nav-link active">
                <i class="fas fa-calendar"></i>
                  <p>ผู้ป่วยนัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/index3.php" class="nav-link">
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
                <a href="../opd/data.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-clock"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../IPD/data2.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-bed-pulse"></i>
                  <p>ชุดข้อมูลคนไข้ Admit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="data6.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-calendar"></i>
                  <p>ชุดข้อมูล ผู้ป่วยนัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/data3.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-truck-medical"></i>
                  <p>ชุดข้อมูล Refer ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/data4.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-truck-medical"></i>
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
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">ผู้ป่วยนัด</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- Content Wrapper. Contains page content -->
  <form id="date-form" method="post">
  <?php
   require_once '../DataAndSQL/OracleDB.php';
   try {
       $db = new OracleDB();
       $places = $db->queryPlaces();
   } catch (Exception $e) {
       echo "Error: " . $e->getMessage();
       $places = []; // ตั้งค่าเป็น array ว่างหากมีข้อผิดพลาด
   }
   include 'process_department_data.php';
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
            <div class="col-12">
                <label for="start-date">วันที่เริ่ม :</label>
                <input type="text" name="StartDateRange"/>
                <label for="end-date">วันที่สิ้นสุด :</label>
                <input type="text" Name="EndDateRange"/>
                <label for="DepartmentCode">ห้องตรวจ :</label>
                <select id="Departmentcode" name="DepartmentCode">
                  <?php foreach ($places as $place): ?>
                  <option value="<?php echo htmlspecialchars($place['PLACECODE']); ?>">
                  <?php echo htmlspecialchars($place['FULLPLACE']); ?>
                  </option>
                <?php endforeach; ?>
                </select>
                <button type="submit">ค้นหา</button> 
            </div>
        </div>
      </div>
    </div>
    </form>
    <?php
    $getTotalUniqueOPD_NO=$getTotalOPD_Accept_Come=$getTotalOPD_Not_Come = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // ตรวจสอบตัวแปรต่างๆ ที่ส่งมา
      $startDate = isset($_POST['StartDateRange']) ? $_POST['StartDateRange'] : null;
      $endDate = isset($_POST['EndDateRange']) ? $_POST['EndDateRange'] : null;
      //$Mark = isset($_POST['Mark']) ? $_POST['Mark'] : null;
      $Department = isset($_POST['DepartmentCode']) ? $_POST['DepartmentCode'] : null;
  
      // ตรวจสอบว่าค่าที่จำเป็นถูกตั้งค่าหรือไม่
      if ($startDate && $endDate && $Department) {
          // ค่าที่จำเป็นถูกตั้งค่าทั้งหมด
          try {
              $db = new OracleDB();
              $getTotalUniqueOPD_NO = $db->getTotalUniqueOPD_NO($startDate, $endDate, $Department);
              $getTotalOPD_Accept_Come=$db->getTotalOPD_Accept_Come($startDate, $endDate, $Department);
              $getTotalOPD_Not_Come=$db->getTotalOPD_Not_Come($startDate, $endDate,$Department);

              // จัดการกับผลลัพธ์ ...
          } catch (Exception $e) {
              echo "Error: " . $e->getMessage();
          }
      } else {
          // หนึ่งหรือหลายค่าไม่ถูกตั้งค่า
          // จัดการกับสถานการณ์นี้ (เช่น แสดงข้อความผิดพลาดหรือค่าเริ่มต้น)
      }
  } else {
      // การร้องขอไม่ใช่ POST หรือไม่มีตัวแปรที่จำเป็นถูกส่งมา
      // จัดการกับสถานการณ์นี้
      $currentDate = date('Y-m-d');
      $startDate = isset($startDate) ? $startDate : $currentDate;
      $endDate = isset($endDate) ? $endDate : $currentDate;
      //$Mark = isset($Mark) ? $Mark : 'Y';
      $Department = isset($Department) ? $Department : 'ทุกห้องตรวจ';
      $db = new OracleDB();
      $getTotalUniqueOPD_NO = $db->getTotalUniqueOPD_NO_Default($startDate, $endDate, $Department);
      $getTotalOPD_Accept_Come=$db->getTotalOPD_Accept_Come_Default($startDate, $endDate);
      $getTotalOPD_Not_Come=$db->getTotalOPD_not_Come_Default($startDate, $endDate);
  }   
    ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
        <div class="col-12">
          
        <div style="text-align:center; font-size: 22px; font-weight: bold; color: blue;">
            <?php echo "<h4>วันที่เริ่ม : ".$startDate." วันที่สิ้นสุด: ".$endDate." ห้องตรวจ :".$selectedDepartmentDescription."</h4>";?>
        </div>        
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <!-- Query จำนวน admit -->
            <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-calendar-check"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">จำนวนนัด</span>
                <span class="info-box-number">                 
                <?php
                    echo $getTotalUniqueOPD_NO;
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
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-calendar-check"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">มาตามนัด</span>
                <span class="info-box-number">
                <?php
                echo $getTotalOPD_Accept_Come;
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
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">ขาดนัด</span>
                <span class="info-box-number">
                  <?php echo $getTotalOPD_Not_Come;?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Pie Chart แสดงจำนวนผู้ป่วยนัดแยกตามแผนก</h5>
                
            </div>
            <div class="container-fluid" style="width: 800px; height: 800px;">
              <canvas id="myChart"></canvas>
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
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script>
<script src="../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="mychart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      var searchInput = document.getElementById("searchInput");
      var departmentCodeSelect = document.getElementById("DepartmentCode");

      searchInput.addEventListener("input", function () {
          var searchText = searchInput.value.toLowerCase();
          Array.from(departmentCodeSelect.options).forEach(function (option) {
              var text = option.textContent.toLowerCase();
              option.style.display = text.includes(searchText) ? "block" : "none";
          });
      });
  });
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
