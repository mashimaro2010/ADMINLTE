<?php
date_default_timezone_set('Asia/Bangkok');

function con_bp(){
	mssql_connect("172.16.1.9","ireport","ireport") or die("Error Connect to Database"); 
	mssql_select_db("BedPatient"); 	
}

function con_homc(){
	mssql_connect("SQLSERVER","homc","homc") or die("Error Connect to Database"); 
	mssql_select_db("HOMC"); 	
}

function contis($data){
	$data=iconv("UTF-8","TIS-620",$data);
	return $data;
}

function conutf($data){
	$data=iconv("TIS-620","UTF-8",$data);
	return $data;
}
function PDO_MSSQL(){	
	$serverName = "172.16.190.26,1433";
	$userName = "ripd";
	$userPassword = "mhcc401417";
	$dbName = "BedPatient"; 
	$conn = new PDO("sqlsrv:server=$serverName ; Database = $dbName", $userName, $userPassword);
 
	 if($conn)
	 {
		 return $conn;
	 }
	 else
	 {
		 echo "Database Connect Failed.";
	 } 
 }
function MSHOCI(){
	$objConnect = oci_connect("admin","999","172.16.190.9/msh",'UTF8');
	return $objConnect;
}
 function PDO_Oracle(){
	$tns = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.190.9)(PORT = 1521)) )
          (CONNECT_DATA = (SERVICE_NAME = orcl)))";
	try {
		$conn = new PDO("oci:dbname=".$tns, 'hr', '12345');
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo 'connect Successfull';
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
 }

function format_day($day){
	list($d,$m,$y)=explode("/",$day);
	$day=$y;
	$day.=$m;
	$day.=$d;
	return $day;
}

function getIP(){
    // ตรวจสอบ IP กรณีการใช้งาน share internet
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }else{
      $ip=$_SERVER['REMOTE_ADDR'];
    }
	return $ip;
}

function getMonth(){
	$Month=array('01'=>'มกราคม','02'=>'กุมภาพันธ์','03'=>'มีนาคม','04'=>'เมษายน','05'=>'พฤษภาคม','06'=>'มิถุนายน','07'=>'กรกฎาคม','08'=>'สิงหาคม','09'=>'กันยายน','10'=>'ตุลาคม','11'=>'พฤศจิกายน','12'=>'ธันวาคม');
	return $Month;
}

function WardName($ward_id){
	con_bp();
	$sql="SELECT * FROM Ward WHERE ward_id='$ward_id' ";
	$result=mssql_query($sql);
	$Ward=mssql_fetch_array($result);
	return conutf($Ward["ward_name"]);
}

function num_bed_ward($ward_id){
	con_bp();
	$sql="SELECT * FROM Ward WHERE ward_id='$ward_id' ";
	$result=mssql_query($sql);
	$Ward=mssql_fetch_array($result);
	return conutf($Ward["ward_bed"]);
}

function num_comma($number){
	if($number!=""){
		$number=number_format($number,0,"",",");
		return $number;
	}else{
		return 0;
	}
}

function thai_date($date,$type=""){
	$date=trim($date);
	if($date!=""){
		list($day,$m,$y)=explode("/",$date);
		settype ($day,"integer");
		$year=$y+543;
		switch($m){
				case '01':
					$month="มกราคม";
					break;
				case '02':
					$month="กุมภาพันธ์";
					break;
				case '03':
					$month="มีนาคม";
					break;
				case '04':
					$month="เมษายน";
					break;
				case '05':
					$month="พฤษภาคม";
					break;
				case '06':
					$month="มิถุนายน";
					break;
				case '07':
					$month="กรกฎาคม";
					break;
				case '08':
					$month="สิงหาคม";
					break;
				case '09':
					$month="กันยายน";
					break;
				case '10':
					$month="ตุลาคม";
					break;
				case '11':
					$month="พฤศจิกายน";
					break;
				case '12':
					$month="ธันวาคม";
					break;
			}
		
			if($type==""){
				$thaidate=$day." $month ".$year;
			}else if($type=="2"){
				$thaidate=$day."&nbsp;&nbsp;".$month."&nbsp;&nbsp;พ.ศ.&nbsp;".$year;
			}
			return $thaidate;
	}else{
		return "";
	}
}

function thai_date2($date,$type=""){
	$date=trim($date);
	if($date!=""){
		$y=substr($date,0,4);
		$m=substr($date,4,2);
		$day=substr($date,6,2);
		settype ($day,"integer");
		$year=$y+543;
		switch($m){
				case '01':
					$month="มกราคม";
					break;
				case '02':
					$month="กุมภาพันธ์";
					break;
				case '03':
					$month="มีนาคม";
					break;
				case '04':
					$month="เมษายน";
					break;
				case '05':
					$month="พฤษภาคม";
					break;
				case '06':
					$month="มิถุนายน";
					break;
				case '07':
					$month="กรกฎาคม";
					break;
				case '08':
					$month="สิงหาคม";
					break;
				case '09':
					$month="กันยายน";
					break;
				case '10':
					$month="ตุลาคม";
					break;
				case '11':
					$month="พฤศจิกายน";
					break;
				case '12':
					$month="ธันวาคม";
					break;
			}
		
			if($type==""){
				$thaidate=$day." $month ".$year;
			}else if($type=="2"){
				$thaidate=$day."&nbsp;&nbsp;".$month."&nbsp;&nbsp;พ.ศ.&nbsp;".$year;
			}
			return $thaidate;
	}else{
		return "";
	}
}

function Mthai($m){
	settype ($m,"integer");
		$Month=array('1'=>'มกราคม','2'=>'กุมภาพันธ์','3'=>'มีนาคม','4'=>'เมษายน','5'=>'พฤษภาคม','6'=>'มิถุนายน','7'=>'กรกฎาคม','8'=>'สิงหาคม','9'=>'กันยายน','10'=>'ตุลาคม','11'=>'พฤศจิกายน','12'=>'ธันวาคม');
	return $Month[$m];
}

function MthaiS($m){
	settype ($m,"integer");
		$Month=array('1'=>'ม.ค.','2'=>'ก.พ.','3'=>'มี.ค.','4'=>'เม.ย.','5'=>'พ.ค.','6'=>'มิ.ย.','7'=>'ก.ค.','8'=>'ส.ค.','9'=>'ก.ย.','10'=>'ตุ.ค.','11'=>'พ.ย.','12'=>'ธ.ค.');
	return $Month[$m];
}

function month_year_number(){
	$fy_number=array(10,11,12,1,2,3,4,5,6,7,8,9);
	return $fy_number;
}

function NumDay($Month,$Year){
	settype ($Month,"integer");
	if($Month==1 || $Month==3 || $Month==5 || $Month==7 || $Month==8 || $Month==10 || $Month==12){
		$NumDay=31;
	}else if($Month==4 || $Month==6 || $Month==9 || $Month==11){
		$NumDay=30;
	}else if($Month==2){
		if($Year%4==0){
			$NumDay=29;
		}else{
			$NumDay=28;
		}
	}
	return $NumDay;
}

function query_PT($CI_d=0,$SI_d=0,$MI_d=0,$CL_d=0,$RN_d=0,$TN_d=0,$ward_id=''){
	$CI = 7.5;
	$SI = 5.5;
	$MI = 3.5;
	$CL = 1.5;

	if($ward_id == "903"){
		$CI = 2.96;
		$SI = 4.03;
		$MI = 3.56;
		$CL = 3.14;
	}else if($ward_id == "007"){
		$CI = 16;
	}else if( in_array($ward_id,array("016","017","029","054","056","057","221","223","903m","904","905","912"),true) ){
		$CI = 12;
	}else if($ward_id == "142"){
		$CI = 3.2;
		$SI = 2.5;
		$MI = 1;
		$CL = 0.5;
	}

	$PT=0;
	$Psum=$CI_d+$SI_d+$MI_d+$CL_d;
	$Nsum=$RN_d+$TN_d;
	if($Psum!=0){
		$hour_nurse=(($CI_d*$CI)+($SI_d*$SI)+($MI_d*$MI)+($CL_d*$CL))/$Psum;
		$num_pa=$Psum/3;
		@$PT=($hour_nurse*$num_pa)/($Nsum*7)*100;
	}
	return round($PT,2);
}

function Show_Num( $Num , $sendReturn = '-' ){
	if( trim($Num) != '' && $Num > 0 ){
		return number_format($Num,0,'','');
	}else{
		return $sendReturn;
	}
}

function Cal_Percent( $NumFull , $NumCal ){
	@$Num_Percent = ( $NumCal * 100 ) / $NumFull;
	if( $Num_Percent > 0 ){
		return number_format($Num_Percent,'2','.',',').'%';
	}else{
		return '-';
	}
}

?>
