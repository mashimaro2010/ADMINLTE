<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ชุดข้อมูลประเภทนัดหมายเฉพาะผู้ป่วยนอก</title>
  
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<!-- เพิ่มไฟล์ Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

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
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Daterangepicker style -->
  <script src="https://cdn.jsdelivr.net/npm/daterangepicker@latest/daterangepicker.js"></script>

  <style>
  #date-range-picker {
    text-align: center; /* จัดตัวหนังสือให้อยู่ตรงกลาง */
    box-sizing: border-box; /* ไม่นับ padding และ border ในการคำนวณความกว้าง */
  }
</style>
  
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
                <a href="../../index3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
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
                <a href="../tables/data.php" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../tables/data5.php" class="nav-link">
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
                <a href="../tables/data6.php" class="nav-link active">
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
            <h1>ชุดข้อมูลประเภทนัดหมายเฉพาะผู้ป่วยนอก</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
              <li class="breadcrumb-item active">ชุดข้อมูลประเภทนัดหมายเฉพาะผู้ป่วยนอก</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
    include '../../DataAndSQL/process_department_data.php';
    $currentDate = date('Y-m-d');
    $startDate = $currentDate;
    $endDate = $currentDate;
    $sqlFilePath = realpath('../sqlcommands/AppointData.sql');
    if (isset($_POST['Mark'])) {
    $Mark = $_POST['Mark'];
    // Define meanings for each value
    $meanings = [
        "1" => "ตรวจแล้ว",
        "2" => "ยังไม่ได้ตรวจ",
        "3" => "ทั้งหมด"
    ];

    // Check if the selected value exists in the meanings array
    if (array_key_exists($Mark, $meanings)) {
        $selectedMeaning = $meanings[$Mark];
        $startDate = $_POST['StartDateRange'];
        $endDate = $_POST['EndDateRange'];
        $DepartmentCode=$_POST['DepartmentCode'];
        $Mark = $_POST['Mark'];
    } else {
        echo "<div>Invalid selection</div>";
    }
    } else
    { 
      $Mark='3';
    // ตรวจสอบว่าไฟล์มีอยู่หรือไม่
    if ($sqlFilePath !== false && file_exists($sqlFilePath)) {
    // อ่านเนื้อหาของไฟล์ SQL
    $SQLOPDComtohos = file_get_contents($sqlFilePath);
    // เพิ่มโค้ดที่ต้องการทำต่อไป
    } else {
      die('ไม่สามารถอ่านไฟล์ SQL ได้');
    }
    }
    ?>
    <form id="date-form" method="post">
    <?php
   require_once 'OracleDB.php';
   try {
       $db = new OracleDB();
       $places = $db->queryPlaces();
   } catch (Exception $e) {
       echo "Error: " . $e->getMessage();
       $places = []; // ตั้งค่าเป็น array ว่างหากมีข้อผิดพลาด
   }

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
                <label for="DepartmentCode">ห้องตรวจ :</label>
                <select id="DepartmentCode" name="DepartmentCode">
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
<?php
  $DepartmentName ='ทั้งหมด';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['StartDateRange']) && isset($_POST['EndDateRange']) 
Or isset($_POST['Mark']) or isset($_POST['DepartmentCode'])) {

  try {
    $db = new OracleDB();
    $DepartmentName = $db->querySelectPlacesName($DepartmentCode);
  } catch (Exception $e) {
    $DepartmentName ='ทั้งหมด';
  }
  // ทำสิ่งที่คุณต้องการทำกับ $startDate และ $endDate
  if ($Mark=='1') {
  $SQLOPDComtohos="SELECT DISTINCT
  o.opd_visit_type,
  o.OPD_NO,
  p.hn,
  TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') AS VisitDate,
  TO_CHAR(o.Reach_OPD_DATETIME, 'YYYY-MM-DD HH24:MI:SS') AS TimeArrive,
  p.prename || '' || p.name || ' ' || p.surname AS psname,
  DECODE(p.SEX, 'M', 'Man', 'Women') AS sex,
  TRUNC(MONTHS_BETWEEN(o.OPD_DATE, p.BIRTHDAY)/12) AS age_year,
  ct.name AS credit_name,
  ctm.name AS cometohos,
  o.mark_yn,
  pl.fullplace,
  doc.prename || '' || doc.name || ' ' || doc.surname AS doctor_name,
  o.wt_kg,
  o.Height_cm,
  o.bmi,
  o.bp_systolic,
  o.bp_diastolic,
  o.palse,
  DBMS_LOB.SUBSTR(o.symptom_clob) AS Symptom,
  o.past_illness,
  (SELECT n.name FROM native_code n WHERE n.native_id = p.native_id AND ROWNUM <= 1) AS nat_name,
  pl.PLACECODE
FROM
  OPDS o
  JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
  JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
  JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
  JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
  JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
  JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
WHERE
  o.opd_visit_type = 'D'
  AND pl.PLACECODE='$DepartmentCode'
  AND o.mark_yn='Y'
  AND o.COME_TO_HOSPITAL_CODE = '01'
  AND pl.PT_PLACE_TYPE_CODE = '1'
  AND pl.Del_Flag IS NULL
  AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') between '$startDate' and '$endDate'
ORDER BY
  pl.PLACECODE DESC";
  }elseif ($Mark=='2') {
  $SQLOPDComtohos="SELECT DISTINCT
  o.opd_visit_type,
  o.OPD_NO,
  p.hn,
  TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') AS VisitDate,
  TO_CHAR(o.Reach_OPD_DATETIME, 'YYYY-MM-DD HH24:MI:SS') AS TimeArrive,
  p.prename || '' || p.name || ' ' || p.surname AS psname,
  DECODE(p.SEX, 'M', 'Man', 'Women') AS sex,
  TRUNC(MONTHS_BETWEEN(o.OPD_DATE, p.BIRTHDAY)/12) AS age_year,
  ct.name AS credit_name,
  ctm.name AS cometohos,
  o.mark_yn,
  pl.fullplace,
  doc.prename || '' || doc.name || ' ' || doc.surname AS doctor_name,
  o.wt_kg,
  o.Height_cm,
  o.bmi,
  o.bp_systolic,
  o.bp_diastolic,
  o.palse,
  DBMS_LOB.SUBSTR(o.symptom_clob) AS Symptom,
  o.past_illness,
  (SELECT n.name FROM native_code n WHERE n.native_id = p.native_id AND ROWNUM <= 1) AS nat_name,
  pl.PLACECODE
FROM
  OPDS o
  JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
  JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
  JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
  JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
  JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
  JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
WHERE
  o.opd_visit_type = 'D'
  AND o.mark_yn is NULL
  AND pl.PLACECODE='$DepartmentCode'
  AND o.COME_TO_HOSPITAL_CODE = '01'
  AND pl.PT_PLACE_TYPE_CODE = '1'
  AND pl.Del_Flag IS NULL
  AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') between '$startDate' and '$endDate'
ORDER BY
  pl.PLACECODE DESC";
  }elseif ($Mark=='3'){
  $SQLOPDComtohos="SELECT DISTINCT
  o.opd_visit_type,
  o.OPD_NO,
  p.hn,
  TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') AS VisitDate,
  TO_CHAR(o.Reach_OPD_DATETIME, 'YYYY-MM-DD HH24:MI:SS') AS TimeArrive,
  p.prename || '' || p.name || ' ' || p.surname AS psname,
  DECODE(p.SEX, 'M', 'Man', 'Women') AS sex,
  TRUNC(MONTHS_BETWEEN(o.OPD_DATE, p.BIRTHDAY)/12) AS age_year,
  ct.name AS credit_name,
  ctm.name AS cometohos,
  o.mark_yn,
  pl.fullplace,
  doc.prename || '' || doc.name || ' ' || doc.surname AS doctor_name,
  o.wt_kg,
  o.Height_cm,
  o.bmi,
  o.bp_systolic,
  o.bp_diastolic,
  o.palse,
  DBMS_LOB.SUBSTR(o.symptom_clob) AS Symptom,
  o.past_illness,
  (SELECT n.name FROM native_code n WHERE n.native_id = p.native_id AND ROWNUM <= 1) AS nat_name,
  pl.PLACECODE
FROM
  OPDS o
  JOIN PATIENTS p ON o.PAT_RUN_HN = p.RUN_HN AND o.PAT_YEAR_HN = p.YEAR_HN
  JOIN OPD_WAREHOUSE ow ON o.OPD_NO = ow.OPD_NO
  JOIN CREDIT_TYPES ct ON ow.credit_id = ct.credit_id
  JOIN COME_TO_HOSPITAL_CODE ctm ON o.COME_TO_HOSPITAL_CODE = ctm.CODE
  JOIN PLACES pl ON o.PLA_PLACECODE = pl.PLACECODE
  JOIN DOC_DBFS doc ON doc.DOC_CODE = o.DD_DOC_CODE
WHERE
  o.opd_visit_type = 'D'
  AND pl.PLACECODE='$DepartmentCode'
  AND o.COME_TO_HOSPITAL_CODE = '01'
  AND pl.PT_PLACE_TYPE_CODE = '1'
  AND pl.Del_Flag IS NULL
  AND TO_CHAR(o.OPD_DATE, 'yyyy-mm-dd') between '$startDate' and '$endDate'
ORDER BY
  pl.PLACECODE DESC";
  }
    // กรณีที่มีอย่างน้อยหนึ่งคีย์ไม่มีอยู่
    // ทำสิ่งที่เหมาะสมสำหรับกรณีนี้
}
?>
    </form>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">        
            <div class="card">
              <div class="card-header">
<!--ใส่เลือกวันที่ --> 
              <!-- Function Connect Oracle Data Base -->
              <?php if (!isset($selectedMeaning)) {
    $selectedMeaning = "ทั้งหมด"; // หรือใส่ค่าตามที่คุณต้องการ
}
?>
  <div style="text-align:center; font-size: 22px; font-weight: bold; color: blue;">
  <?php 
              
              echo "<h1> วันที่เริ่ม : ".$startDate." วันที่สิ้นสุด: ".$endDate;
              echo " สถานะ : ".$selectedMeaning." ห้องตรวจ: ".$DepartmentName."</h1>";
              
  ?>
  </div>
            <?php      
            include('function.php');
            $objConnect = MSHOCI();            
            if($objConnect){
            $stid = oci_parse($objConnect, $SQLOPDComtohos);
            oci_execute($stid);
            ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="AppointmentData" class="table table-bordered table-striped">
                <thead>
                <tr>
                <th>ประเภท Visit</th>
                <th>OPD_NO</th>
                <th>HN</th>
                <th>วันที่ Visit</th>
                <th>มาถึง</th>
                <th>ชื่อ นามสกุล</th>
                <th>เพศ</th>
				        <th>อายุ</th>
                <th>ชื่อสิทธิ์</th>
                <th>มาโดย</th>
                <th>สถานะตรวจ</th>
                <th>ห้องตรวจ</th>
                <th>แพทย์ที่ตรวจ</th>
                <th>น้ำหนัก</th>
                <th>ส่วนสูง</th>
                <th>BMI</th>
                <th>BP_Systolic</th>
                <th>BP_Diastolic</th>
                <th>Palse</th>
                <th>Symptom</th>
                <th>Past_Illness</th>
                <th>สัญชาติ</th>
                <th>ห้องตรวจ</th>
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
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Data Center โรงพยาบาลแม่สอด Version</b> 1.0.0
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
<!-- Date Rang Picker -->
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
<script>
$(function () {
  var userFilename = ""; // ตัวแปรสำหรับเก็บชื่อไฟล์ที่ผู้ใช้ป้อน

  $("#AppointmentData").DataTable({
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
              title: 'ชุดข้อมูลประเภทนัดหมาย',
              filename: userFilename, // ใช้ชื่อไฟล์ที่ผู้ใช้ป้อน
              exportOptions: {
                modifier: {
                  page: 'all',
                  search: 'none'
                }
              }
            });
            $.fn.DataTable.ext.buttons.excelHtml5.action.call(this, e, dt, button, config);
          }
        }
      },
      // ... คุณสามารถเพิ่มปุ่มอื่นๆ ตามต้องการ ...
    ],
  }).buttons().container().appendTo('#AppointmentData_wrapper .col-md-6:eq(0)');
});
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
</script>
</body>
</html>
