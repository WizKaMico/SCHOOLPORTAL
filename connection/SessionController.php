<?php 
require_once "connection/ApiController.php";
session_start();
$session_id = $_GET['SESSION'];
//Check whether the session variable SESS_MEMBER_ID is present or not
// if (!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
//     header("location: index.php?message=SESSIONEXPIRE");
//     exit();
// }

$portCont = new portalController();

$userCredentials = $portCont->getUserDetails($session_id);
if(!empty($_GET['UID'])){
    $uid = $_GET['UID'];
    $userSpecificDetails = $portCont->getSpecificDetails($uid);
    $grade = $userSpecificDetails[0]["level"];
    $subjectGrid = $portCont->subjectAssignedStudent($grade);
    $schoolAttendance = $portCont->schoolOverallAttendance($uid);
    $studentWhereabouts = $portCont->schoolOverallWhereAbout($uid);
   
    // include('api/get_user_specific_data.php');
}
$oua = $portCont->totalRegisteredAdmin();
$out = $portCont->totalRegisteredTeacher();
$ous = $portCont->totalRegisteredStudent();


$tl = $portCont->totalLost();
$ta = $portCont->totalAnnouncement();
$tr = $portCont->totalRequest();







?>