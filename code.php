<?php 
session_start();
$con = mysqli_connect('localhost', 'root', '', 'schedulingsystem');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
date_default_timezone_set('Asia/Manila');
	
	
	

	$userde = $_SESSION['userde'];

if(isset($_POST['save_excel_data'])){
  
		 $filename = $_FILES['import_file']['name'];
    $file_ext = pathinfo($filename, PATHINFO_EXTENSION);

    $allowed_ext = ['xls', 'csv', 'xlsx'];

    if(in_array($file_ext, $allowed_ext)){
        $inputFileNamePath =  $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";

     
       
        
        foreach($data as  $row){

             if($count > 0){
        
            $subcode = $row['0'];
            $section = $row['1'];
            $tittle = $row['2'];
            $status = $row['3'];
            $start = $row['4'];
            $end = $row['5'];
            $schedule = $row['6'];
            $getbuilding = $row['7'];
            $getroom = $row['8'];
            
           
            $studentQuery = "INSERT INTO uploadoutput (upload_subcode, upload_section, upload_tittle, upload_start, upload_end, upload_schedule, upload_status, upload_getbuilding, upload_getroom, upload_userlogged, upload_timesave) 
            VALUES ('$subcode', '$section', '$tittle', '$start', '$end', '$schedule', '$status', '$getbuilding', '$getroom','$userde',now())";
            $check = mysqli_query($con,"SELECT * FROM db_sub WHERE start='$start' AND schedule='$schedule' AND getbuilding='$getbuilding' AND getroom='$getroom'");

            if(mysqli_num_rows($check) > 0){    
                $msg1=true;
            }
            else{
                $result = mysqli_query($con, $studentQuery);
            $msg = true;  
            }
        }
            if($count > 0){
        
            $subcode = $row['0'];
            $section = $row['1'];
            $tittle = $row['2'];
            $status = $row['3'];
            $start = $row['4'];
            $end = $row['5'];
            $schedule = $row['6'];
            $getbuilding = $row['7'];
            $getroom = $row['8'];
            
           
            $studentQuery = "INSERT INTO db_sub (subcode, section, tittle, start, end, schedule, status, getbuilding, getroom, userlogged, timesave) 
            VALUES ('$subcode', '$section', '$tittle', '$start', '$end', '$schedule', '$status', '$getbuilding', '$getroom','$userde',now())";
            $check = mysqli_query($con,"SELECT * FROM db_sub WHERE start='$start' AND schedule='$schedule' AND getbuilding='$getbuilding' AND getroom='$getroom'");

            if(mysqli_num_rows($check) > 0){    
                $msg1=true;
            }
          else{
                $result = mysqli_query($con, $studentQuery);
            $msg = true;  
            }
        }
            else{
                $count= "1";
            }
        }

        if(isset($msg)){
            $_SESSION['message'] = "File Successfully Imported";
            header('Location: subjectManagement.php');
            exit(0);
        } 
        elseif(isset($msg1)){
            $_SESSION['message'] = "File Not Imported Duplicate Data Detected";
            header('Location: subjectManagement.php');
            exit(0);
        }else{}

    }
    else{
        $_SESSION['message'] = "Invalid File";
        header('Location: subjectManagement.php');
        exit(0);
    }
   
}






?>