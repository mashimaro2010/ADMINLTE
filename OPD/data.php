<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ชุดข้อมูลระยะเวลารอคอยทุกแผนก</title>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome Icons-->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">  <!-- Ionicons -->
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
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
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
              <img src="../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
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
              <img src="../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
    <a href="../index3.php" class="brand-link">
      <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
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
                <a href="index.php" class="nav-link">
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
                <a href="../Appointment/index4.php" class="nav-link">
                  <i class="fas fa-calendar"></i>
                  <p>ผู้ป่วยนัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/index2.php" class="nav-link">
                  <i class="fas fa-truck-medical"></i>
                  <p>ผู้ป่วย Refer</p>
                </a>
              </li>
            </ul>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-database"></i>
              <p>
              ดูข้อมูล
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data.php" class="nav-link active">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../IPD/data2.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้ Admit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Appointment/data6.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้นัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/data3.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้ Refer ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/data4.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลคนไข้ Refer ผู้ป่วยใน</p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php
  $ThaiCurrentDate=date('d-m-Y');
  $startDate = $ThaiCurrentDate;
  $endDate = $ThaiCurrentDate;
  require_once 'OPDQuery.php';
    if (isset($_POST['StartDateRange']) && isset($_POST['EndDateRange'])) {
    $startDate = DateTime::createFromFormat('d-m-Y', $_POST['StartDateRange'])->format('d-m-Y');
    $endDate = DateTime::createFromFormat('d-m-Y', $_POST['EndDateRange'])->format('d-m-Y');
  } else {
      // ถ้าไม่มีข้อมูลที่ส่งมา กำหนดวันที่เริ่มต้นและสิ้นสุดเป็นค่าเริ่มต้น
      $startDate = $ThaiCurrentDate;
      $endDate = $ThaiCurrentDate;
  }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>ชุดข้อมูลระยะเวลารอคอย</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
              <li class="breadcrumb-item active">ชุดข้อมูลระยะเวลารอคอย</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 text-center">        
            <div>
              <div class="col-12 form-group">
              <form method="post">
              <div class="col-12 form-group">
              <label for="start-date">
              <i class="fas fa-calendar-alt"></i> วันที่เริ่ม :</label>
              <input type="text" name="StartDateRange" id="start-date" />   
              <label for="end-date">
              <i class="fas fa-calendar-alt"></i> วันที่สิ้นสุด :</label>
              <input type="text" name="EndDateRange" id="end-date" />
              <button type="submit"><i class="fas fa-search"></i> ค้นหา</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
              <!-- Function Connect Oracle Data Base -->
            <?php
            try{
              $db=new OPDQuery();
              $result =$db->WaitTing_Time_Period($startDate,$endDate);
              if (count($result) > 0) {
            ?>
              <!-- /.card-header -->
              <div class="card-body col-12">
                <table id="WaitTing_Time_Period" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>ลำดับ</th>
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
                <th>ลงความดัน/ส่วนสูง</th>
                <th>พยาบาลซักประวัติ</th>
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
    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $item) {
            // ตรวจสอบว่า $item ไม่ใช่ null ก่อนส่งไปยัง htmlentities()
            if ($item !== null) {
                echo "<td>" . htmlentities($item, ENT_QUOTES) . "</td>";
            } else {
                // ถ้า $item เป็น null, แสดงข้อความเริ่มต้นหรือเว้นว่าง
                echo "<td></td>";
            }
        }
              echo "</tr>";
          }
?>          
        </tbody>
          <tfoot>
          <tr>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th id="SumTotal"></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          </tr>
        </tfoot>  
        </table></div>
<?php      } else {
          echo "No data found";
      }
      } catch (Exception $e) {
          echo "Error: " . $e->getMessage();
      }
?>
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

<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--script src="../../dist/js/demo.js"></script-->
<!-- Page specific script -->
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
<script>
  function initializeDataTable() {
  var userFilename = ""; // ตัวแปรสำหรับเก็บชื่อไฟล์ที่ผู้ใช้ป้อน

  var table = $("#WaitTing_Time_Period").DataTable({
    "responsive": true,
    "lengthChange": true,
    "autoWidth": false,
    "fixedColumns": true,
    "buttons": [
      {
        extend: 'excelHtml5',
        text: '<i class="fa fa-file-excel"></i> Excel', // เพิ่มไอคอน Excel
        action: function ( e, dt, button, config ) {
          userFilename = prompt("กำหนดชื่อไฟล์ที่บันทึก:", userFilename);
          if (userFilename) { // ตรวจสอบว่าผู้ใช้ได้ป้อนชื่อไฟล์หรือไม่
            $.extend(true, config, {
              title: 'ชุดข้อมูลระยะเวลารอคอยทุกแผนก',
              filename: userFilename, // ใช้ชื่อไฟล์ที่ผู้ใช้ป้อน
              exportOptions: {
                modifier: {
                  page: 'all',
                  search: 'none'
                },
                columns: ':visible',
                footer: true // เพิ่ม `footer: true`
              }
            });
            $.fn.DataTable.ext.buttons.excelHtml5.action.call(this, e, dt, button, config);
          }
        }
      },
      // ... คุณสามารถเพิ่มปุ่มอื่นๆ ตามต้องการ ...
    ],
  }).buttons().container().appendTo('#WaitTing_Time_Period_wrapper .col-md-6:eq(0)');
}
$(document).ready(function() {
  initializeDataTable();
  var table = $('#WaitTing_Time_Period').DataTable();

  // คำนวณผลรวมของคอลัมน์ที่ 25
  var column = table.column(25);
  var total = column.data().map(function (value) { return parseFloat(value); }).filter(function (value) { return !isNaN(value); }).reduce(function (a, b) {
    return a + b;
  });

  // แสดงผลลัพธ์โดยมีจุดทศนิยม 2 ตำแหน่ง
  var formattedTotal = total.toLocaleString('th-TH', { maximumFractionDigits: 2 });

  // แสดงผลลัพธ์ใน #SumTotal
  $('#SumTotal').html(formattedTotal);
});
</script>
</body>
</html>
