<?php
require_once "DBController.php";

class portalController extends DBController
{
    function registerUser($uid, $email, $password, $designation, $code, $status)
    {
        $query = "INSERT INTO user_login (uid,email,password,designation,code,status,date_created) VALUES (?,?,?,?,?,?,?)"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $password
            ),
            array(
                "param_type" => "i",
                "param_value" => $designation
            ),
            array(
                "param_type" => "i",
                "param_value" => $code
            ),
            array(
                "param_type" => "s",
                "param_value" => $status
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )  
        );
        $this->insertDB($query, $params);
    }

    function userLogin($email, $password, $uid)
    {
        $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON UL.designation = D.id WHERE UL.email = ? AND UL.password = ? AND UL.uid = ?";

        $params = array(
            
            array(
                "param_type" => "s",
                "param_value" => $email
            ),
            array(
                "param_type" => "s",
                "param_value" => $password
            ),array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;
    }

    function userInformation($uid, $fname, $mname, $lname, $gender, $birthdate, $address, $contact, $level)
    {
        $query = "INSERT INTO user_information (uid, fname, mname, lname, gender, birthdate, address, contact, level) VALUES (?,?,?,?,?,?,?,?,?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),
            array(
                "param_type" => "s",
                "param_value" => $lname
            ),
            array(
                "param_type" => "s",
                "param_value" => $gender
            ),
            array(
                "param_type" => "s",
                "param_value" => $birthdate
            ),
            array(
                "param_type" => "s",
                "param_value" => $address
            ),
            array(
                "param_type" => "s",
                "param_value" => $contact
            ),
            array(
                "param_type" => "i",
                "param_value" => $level
            )
        );
        $this->insertDB($query, $params);
    }


    function userInformationUpdate($fname, $mname, $lname, $gender, $birthdate, $address, $contact, $level, $uid)
    {
        $query = "UPDATE user_information SET fname = ?, mname = ?, lname = ?, gender = ?, birthdate = ?,  address = ?, contact = ?, level = ? WHERE uid = ?";
        $params = array(  
            array(
                "param_type" => "s",
                "param_value" => $fname
            ),
            array(
                "param_type" => "s",
                "param_value" => $mname
            ),
            array(
                "param_type" => "s",
                "param_value" => $lname
            ),
            array(
                "param_type" => "s",
                "param_value" => $gender
            ),
            array(
                "param_type" => "s",
                "param_value" => $birthdate
            ),
            array(
                "param_type" => "s",
                "param_value" => $address
            ),
            array(
                "param_type" => "s",
                "param_value" => $contact
            ),
            array(
                "param_type" => "i",
                "param_value" => $level
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );
        $this->updateDB($query, $params);
    }

    function getUserDetails($session_id){
         $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON UL.designation = D.id WHERE UL.user_id = ?";

         $params = array(
            
            array(
                "param_type" => "i",
                "param_value" => $session_id
            )
        );
        
        $userCredentials = $this->getDBResult($query, $params);
        return $userCredentials;

    }

    function totalRegisteredAdmin()
    {
       
      $query = "SELECT COUNT(*) as total FROM user_login WHERE designation = 1";
      $registeredAdmin = $this->getDBResult($query);
      return $registeredAdmin;
       
    }

    function totalRegisteredTeacher()
    {
     
      $query = "SELECT COUNT(*) as total FROM user_login WHERE designation = 2";
      $registeredTeacher = $this->getDBResult($query);
      return $registeredTeacher;
    }

    function totalRegisteredStudent()
    {

       $query = "SELECT COUNT(*) as total FROM user_login WHERE designation = 3";
       $registeredStudent = $this->getDBResult($query);
       return $registeredStudent;

    }

    function RegisteredUser()
    {
         $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON
          UL.designation = D.id  LEFT JOIN user_information UI ON UL.uid = UI.uid";        
         $overallUser = $this->getDBResult($query);
         return $overallUser;
        
    }


    function getSpecificDetails($uid){
        $query = "SELECT * FROM user_login UL LEFT JOIN designation D ON
        UL.designation = D.id  LEFT JOIN user_information UI ON UL.uid = UI.uid WHERE UL.uid = ?";

        $params = array(
           
           array(
               "param_type" => "s",
               "param_value" => $uid
           )
       );
       
       $userSpecs = $this->getDBResult($query, $params);
       return $userSpecs;

   }

   function subjectMatterAdd($grade, $subject, $subjcode, $time, $room)
    {
        $query = "INSERT INTO subject_matter (grade, subject, subjcode, time, room) VALUES (?,?,?,?,?)";
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $grade
            ),  
            array(
                "param_type" => "s",
                "param_value" => $subject
            ),
            array(
                "param_type" => "s",
                "param_value" => $subjcode
            ),
            array(
                "param_type" => "s",
                "param_value" => $time
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            )
        );
        $this->updateDB($query, $params);
    }

    function subjectAssignedStudent($grade)
    {
        $query = "SELECT * FROM subject_matter WHERE grade = ?"; 
        $params = array(
            array(
                "param_type" => "i",
                "param_value" => $grade
            )
        );

       $subjectAssignedStudent = $this->getDBResult($query, $params);
       return $subjectAssignedStudent;

    }

    function schoolAttendanceTimeIn($uid)
    {

        date_default_timezone_set('Asia/Manila');

         $query = "INSERT INTO user_attendance (time_in, uid, date) VALUES (?,?,?)"; 
         
         $params = array(
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );

        $this->insertDB($query, $params);

    }


    function schoolAttendanceTimeOut($uid)
    {

        date_default_timezone_set('Asia/Manila');

        $query = "UPDATE user_attendance SET time_out = ? WHERE uid = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

        $this->updateDB($query, $params);
    }

    function schoolAttendanceValidation($uid)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "SELECT * FROM user_attendance WHERE uid = ? AND date = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );

       $schoolVal = $this->getDBResult($query, $params);
       return $schoolVal;

    }

    function schoolOverallAttendance($uid)
    {
        $query = "SELECT * FROM user_attendance WHERE uid = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

       $schoolAttendance = $this->getDBResult($query, $params);
       return $schoolAttendance;

    }

    function schoolWhereAboutTimeIn($uid, $room)
    {

        date_default_timezone_set('Asia/Manila');

         $query = "INSERT INTO school_whereabout (uid, time_in, room, date) VALUES (?,?,?,?)"; 
         
         $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            )
        );

        $this->insertDB($query, $params);

    }

    function schoolWhereAboutTimeOut($uid, $room)
    {

        date_default_timezone_set('Asia/Manila');

        $query = "UPDATE school_whereabout SET time_out = ? WHERE uid = ? AND room = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d h:i:s")
            ),
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            )
        );

        $this->updateDB($query, $params);
    }

    function schoolWhereAboutValidation($uid, $room)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "SELECT * FROM school_whereabout WHERE uid = ? AND date = ? AND room = ?"; 

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => date("Y-m-d")
            ),
            array(
                "param_type" => "s",
                "param_value" => $room
            )
        );

       $schoolWhere = $this->getDBResult($query, $params);
       return $schoolWhere;

    }

    function schoolOverallWhereAbout($uid)
    {
        $query = "SELECT * FROM school_whereabout WHERE uid = ?";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            )
        );

       $schoolWhere = $this->getDBResult($query, $params);
       return $schoolWhere;

    }

    function requestCreation($uid, $request)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO user_request (uid, request_type, date_requested, status) VALUES (?,?,?,?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $uid
            ),
            array(
                "param_type" => "s",
                "param_value" => $request
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            ),
            array(
                "param_type" => "s",
                "param_value" => 'OPEN'
            )
        );

        $this->insertDB($query, $params);
    }

    function getRequest()
    {
        $query = "SELECT * FROM user_request UR LEFT JOIN user_information UI ON UR.uid = UI.uid"; 
        $overallRequest = $this->getDBResult($query);
        return $overallRequest;
    }

    function announcementCreation($title, $body)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO announcement (title, body, date_created) VALUES (?,?,?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $title
            ),
            array(
                "param_type" => "s",
                "param_value" => $body
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        $this->insertDB($query, $params);
    }

    function getAnnouncement()
    {
        $query = "SELECT * FROM announcement"; 
        $overallAnnouncement = $this->getDBResult($query);
        return $overallAnnouncement;
    }


    function lostCreation($item, $foundby, $foundin)
    {
        date_default_timezone_set('Asia/Manila');

        $query = "INSERT INTO lostandfound (item, foundby, foundin, status, date) VALUES (?,?,?,?,?)";

        $params = array(
            array(
                "param_type" => "s",
                "param_value" => $item
            ),
            array(
                "param_type" => "s",
                "param_value" => $foundby
            ),
            array(
                "param_type" => "s",
                "param_value" => $foundin
            ),
            array(
                "param_type" => "s",
                "param_value" => 'OPEN'
            ),
            array(
                "param_type" => "s",
                "param_value" => date('Y-m-d')
            )
        );

        $this->insertDB($query, $params);
    }


    function getFound()
    {
        $query = "SELECT * FROM lostandfound"; 
        $overallLost = $this->getDBResult($query);
        return $overallLost;
    }


    function totalLost()
    {
       
      $query = "SELECT COUNT(*) as total FROM lostandfound";
      $totalLost = $this->getDBResult($query);
      return $totalLost;
       
    }


    function totalAnnouncement()
    {
       
      $query = "SELECT COUNT(*) as total FROM announcement";
      $totalAnnouncement = $this->getDBResult($query);
      return $totalAnnouncement;
       
    }


    function totalRequest()
    {
       
      $query = "SELECT COUNT(*) as total FROM user_request";
      $totalRequest = $this->getDBResult($query);
      return $totalRequest;
       
    }
    



}