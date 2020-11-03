<?php
require '../../config/config.php';

//call autoload
require '../../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
use PhpOffice\PhpSpreadsheet\Reader\Xls;
//Date class
use PhpOffice\PhpSpreadsheet\Shared\Date;
//echo $_FILES['import_excel']['name'];

if($_FILES["import_excel"]["name"] != ''){

	//print_r($_FILES["import_excel"]["tmp_name"]);
	$allowed_extension=array('xls','csv','xlsx');
	$file_array=explode(".", $_FILES["import_excel"]["name"]);
	$file_extension=end($file_array);//csv or xls, xlsx

	  if($file_extension == 'csv'){
              $reader = new Csv();
        }elseif($file_extension == 'xlsx'){
              $reader = new Xlsx();
        }else{
              $reader = new Xls();
        }

        // file path
               // $spreadsheet = $reader->load($_FILES['import_excel']['tmp_name']);
                //$allDataInSheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true)
	 	 if(in_array($file_extension, $allowed_extension)){
		 	 		
				 	$spreadsheet = $reader->load($_FILES['import_excel']['tmp_name']);
				 	$data=$spreadsheet->getActiveSheet()->toArray();
				 	//echo count($data);
				 	//print_r($data);
				        if(!empty($data)){
				            for ($i=1; $i<count($data); $i++) {
				            	$client_id    = $data[$i][0];
				                $company_name = $data[$i][1];
				                $postal_code  = $data[$i][2];
				                $address	  = $data[$i][3];
				                $bldg_name    = $data[$i][4];
				                
				                $reg_date	  =$data[$i][5];
				                $date= date('y-m-d',strtotime($reg_date));
				               
				                $upd_date     = $data[$i][6];
				                $date_upd= date('y-m-d',strtotime($upd_date));

				                $enable       = $data[$i][7];
				                $inser="INSERT INTO tbl_clients(client_id,company_name, postal_code, address, bldg_name, reg_date, upd_date, enable) VALUES ('$client_id','$company_name','$postal_code','$address','$bldg_name','$date','$date_upd','$enable')";
				                $query=mysqli_query($con,$inser);
				                if($query){
				                	$message='<div  style="background:#b8dbd9; padding:10px;"> Data Imported Successfully. </div>';
				                }else{
				                	$message='<div  style="background:#ffe3e0; padding:10px;">Your Import File is Error... </div>';
				                }
				            
				            }
				       }

		}else{
		 	$message='<div style="background:#ffe3e0; padding:10px;"> Only xls,csv or xlsx file allowed </div>';
			}
}	
else{
	$message='<span class="closebtn">&times;</span><div style="background:#ffe3e0; padding:10px;"> Please Select File </div>'; 
}
echo $message;
?>

<script type="text/javascript">
		var close = document.getElementsByClassName("closebtn");
		var i;

	for (i = 0; i < close.length; i++) {
	  	close[i].onclick = function(){
	    var div = this.parentElement;
	    div.style.opacity = "0";
	    setTimeout(function(){ div.style.display = "none"; }, 600);
	  }
	}
</script>