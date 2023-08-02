<?php 
session_start();
$con = mysqli_connect('localhost', 'root', '', 'schedulingsystem');

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


if(isset($_POST['save_excel_data'])){
    $filename = $_FILES['import_file']['name'];
    $file_ext = pathinfo($filename, PATHINFO_EXTENSION);

    $allowed_ext = ['xls', 'csv', 'xlsx'];

    if(in_array($file_ext, $allowed_ext)){
        $inputFileNamePath =  $_FILES['import_file']['tmp_name'];
        $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = "0";
       
        
        foreach($data as $row){

            if($count > 0){

            $employee_id = $row['0'];
            $fname = $row['1'];
            $lname = $row['2'];
            $mname = $row['3'];
      

           
            $studentQuery = "INSERT INTO `login` (employee_id, lname, fname, mname, username, password, usertype) 
            VALUES ('$employee_id', '$fname', '$lname', '$mname', '$employee_id', '$lname', 'staff')";
            $check = mysqli_query($con,"SELECT * FROM `login` WHERE employee_id='$employee_id'");

            if(mysqli_num_rows($check) > 0){    
                $msg1=true;
            }
            else{
                $result = mysqli_query($con, $studentQuery);
            $msg = true;  
            }
        }
            else{
                $count = "1";
            }
        }

        if(isset($msg)){
            $_SESSION['message'] = "File Successfully Imported";
            header('Location: accountmg.php');
            exit(0);
        } 
        elseif(isset($msg1)){
            $_SESSION['message'] = "File Not Imported Duplicate Account Detected";
            header('Location: accountmg.php');
            exit(0);
        }else{}

    }
    else{
        $_SESSION['message'] = "Invalid File";
        header('Location: accountmg.php');
        exit(0);
    }
   
}






?>