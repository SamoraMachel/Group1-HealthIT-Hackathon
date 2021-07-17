<?php

session_start();
$con = mysqli_connect('localhost', 'root', '','healt_workers');
// database connection code

$txtfname = "";
$txtlName ="";
$txtidNumber = "";
$txtlemployementNumber = "";
$txtlgender = "";
$txtldateofBirth = "";
$txtlhomeCounty = "";
$txtlphoneNumber = "";
$txtlemployer ="";
$txtltermofEmployement = "";
$txtljobDesignation ="";
$txtldateofEmployement = "";
$txtlfacilityName = "";
$txtlfacilityCode ="";
$txtlcurrentCountyofWork ="";
$txtlcadreid = "";
//$cadre_id = uniqid();

if(isset($_POST['submit']))
{
	// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
	$txtfname = $_POST['txtfname'];
	$txtlName = $_POST['txtlName'];
	$txtidNumber = $_POST['txtidNumber'];
	$txtlemployementNumber = $_POST['txtlemployementNumber'];
	$txtlgender = $_POST['txtlgender'];
	$txtldateofBirth = $_POST['txtldateofBirth'];
	$txtlhomeCounty = $_POST['txtlhomeCounty'];
	$txtlphoneNumber = $_POST['txtlphoneNumber'];
	$txtlemployer = $_POST['txtlemployer'];
	$txtltermofEmployement = $_POST['txtltermofEmployement'];
	$txtljobDesignation = $_POST['txtljobDesignation'];
	$txtldateofEmployement = $_POST['txtldateofEmployement'];
	$txtlfacilityName = $_POST['txtlfacilityName'];
	$txtlfacilityCode = $_POST['txtlfacilityCode'];
	$txtlcurrentCountyofWork = $_POST['txtlcurrentCountyofWork'];
	$txtlcadreid = $_POST['txtlcadreid'];


	// database insert SQL code
	// mysqli_query($con, "INSERT INTO health_workers_details (firstName, lastName, idNumber, employementNumber, gender, 
	// 	dateofBirth, homeCounty, phoneNumber, employer, termofEmployement, termofEmployement, jobDesignation, dateofEmployement,
	// 	 facilityName, facilityCode) VALUES ('$txtfname', '$txtlName', '$txtidNumber', '$txtlemployementNumber', '$txtlgender' 
	// 	 , '$txtldateofBirth',  '$txtlhomeCounty', '$txtlphoneNumber', '$txtlemployer', '$txtltermofEmployement', '$txtljobDesignation',
	// 	  '$txtldateofEmployement', '$txtlfacilityName', '$txtlfacilityCode', '$txtlcurrentCountyofWork')");

	// }

	mysqli_query($con, "INSERT INTO cadre (cadre_id, cadre_name, employer ) VALUES ('$txtlcadreid','$txtljobDesignation', '$txtlemployer')");

	mysqli_query($con, "INSERT INTO employee(id_number, employee_no, first_name, last_name, gender,
	 phone_number, dob, home_county ) VALUES('$txtidNumber','$txtlemployementNumber',
	'$txtfname', '$txtlName', '$txtlgender', '$txtlphoneNumber', '$txtldateofBirth', '$txtlhomeCounty')");

	mysqli_query($con, "INSERT INTO employee_job(hire_date, term_of_employement )
	 VALUES('$txtldateofEmployement','$txtltermofEmployement')");

	mysqli_query($con, "INSERT INTO facility(facility_name, facility_code , work_station )
	 VALUES('$txtlfacilityName','$txtlfacilityCode', '$txtlcurrentCountyofWork')");

	$_SESSION['message'] = "Health Worker Details Saved Succesfully"; 
	header('location: index.php');
}

?>