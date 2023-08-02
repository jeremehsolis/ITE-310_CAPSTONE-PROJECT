<?php


require('library/spreadsheet-reader-master/php-excel-reader/excel_reader2.php');
require('library/spreadsheet-reader-master/SpreadsheetReader.php');
require('db_config.php');if(isset($_POST['Submit'])){


$mimes = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.oasis.opendocument.spreadsheet'];
if(in_array($_FILES["file"]["type"],$mimes)){


$uploadFilePath = 'uploads/'.basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $uploadFilePath);


$Reader = new SpreadsheetReader($uploadFilePath);
$totalSheet = count($Reader->sheets());

echo "You have total ".$totalSheet." sheets<br>".


$Reader->ChangeSheet(0);
echo "count=" .count($Reader)." added <br>";
$count = 0;
foreach ($Reader as $Row)
{
	
	$count++;
	$id = isset($Row[0]) ? $Row[0] : '';
	$productname = isset($Row[1]) ? $Row[1] : '';
	$description = isset($Row[2]) ? $Row[2] : '';
	
	if($count == 1)   continue;   //  skips titles from excel file while inserting
	
	$query = "insert into tbl_products(productname, description) values('".$productname."','".$description."')";
	$result = mysqli_query($conn,$query);
}

echo "<br />Data Inserted in dababase";

 
}else { 
die("<br/>Sorry, File type error. Only Excel file allowed."); 
}

mysqli_close($conn);
}


?>