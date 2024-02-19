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
  <!-- jquery -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
  <!-- Daterangepicker style -->
  <script src="https://cdn.jsdelivr.net/npm/daterangepicker@latest/daterangepicker.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- Navbar Logout -->
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
                <a href="../opd/index.php" class="nav-link active">
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
                <a href="../refer/index3.php" class="nav-link">
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
                <a href="data.php" class="nav-link">
                  <i class="fas fa-database"></i><i class="fas fa-clock"></i>
                  <p>ชุดข้อมูลระยะเวลารอคอย</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../IPD/data2.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-bed-pulse"></i>
                  <p>ชุดข้อมูลผู้ป่วย Admit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Appointment/data6.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-calendar"></i>
                  <p>ชุดข้อมูลคนไข้นัด</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/data3.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-truck-medical"></i>
                <p>Refer ผู้ป่วยนอก</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../Refer/data4.php" class="nav-link">
                <i class="fas fa-database"></i><i class="fas fa-truck-medical"></i>
                  <p>Refer ผู้ป่วยใน</p>
                </a>
              </li>
              </li>
            </ul>
        </ul>
      </nav>
    </div>
    <?php
    require_once 'OPDQuery.php';
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
      $startDate = $currentDate;
      $endDate = $currentDate;
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
            <h1 class="m-0">ประเภทผู้ป่วยนอก</h1>            
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">ผู้ป่วยนอก</li>
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="row col-12" style="text-align:center; font-size: 22px; font-weight: bold; color: blue;">
        <h1 style="text-align:center; margin: 0 auto;">
        วันที่เริ่ม:<?php echo $startDate?> วันที่สิ้นสุด:<?php echo $endDate?> 
        </h1>
        </div>  
          <div class="col-12 col-sm-6 col-md-3">
            <!-- small box -->
            <?php
            	    include('../pages/tables/function.php');
                  $objConnect = MSHOCI();
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
                <h4 class="font-weight-bold success-lighter-hover mb-2">Visit ทั้งหมดวันนี้
            <?php
            $db=new OPDQuery();
            try{
              $TOTAL_OPDVISIT=$db->TOTAL_OPDVISIT($startDate, $endDate);
              echo $TOTAL_OPDVISIT;
            } catch(exception $e){
              echo "Error:". $e->getMessage();
            }
            ?>              
              </h4>
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
                <h4>คัดกรองไปแล้ว
            <?php            
            $db=new OPDQuery();
            try{
              $TOTAL_OPDSCREEN=$db->TOTAL_OPDSCREEN($startDate, $endDate);
              echo $TOTAL_OPDSCREEN;
            } catch(exception $e){
              echo "Error:". $e->getMessage();
            }
            ?>
            </h4>
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
                <h4>พบแพทย์ไปแล้ว
              <?php             
                    $db=new OPDQuery();
                    try{
                      $DONEDOCTOR=$db->DONEDOCTOR($startDate, $endDate);
                      echo $DONEDOCTOR;
                    } catch(exception $e){
                      echo "Error:". $e->getMessage();
                    }
              ?>
              Visit</h4>
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
                <h4>รับยาแล้ว
                <?php             
                    $db=new OPDQuery();
                    try{
                      $TOTAL_OPDMEDICINE=$db->TOTAL_OPDMEDICINE($startDate, $endDate);
                      echo $TOTAL_OPDMEDICINE;
                    } catch(exception $e){
                      echo "Error:". $e->getMessage();
                    }
                ?>                  
                </h4>
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
                <h4>65</h4>

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
                <h4>65</h4>

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
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
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
<script src="../plugins/chart.js/Chart.min.js"></script>
<script src="../dist/js/pages/dashboard.js"></script>
<script>
    document.getElementById('logoutLink').addEventListener('click', function() {
        window.location.href = 'logout.php';
    });
</script>
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
