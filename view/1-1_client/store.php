<?php
require_once '../../config/config.php';

function filterText($text){
    $text = trim($text);
    $text = htmlentities($text,ENT_QUOTES);
    $text = stripcslashes($text);
    return $text;
}

 function dec2hex($number)
{
    $hexvalues = array('0','1','2','3','4','5','6','7',
               '8','9','A','B','C','D','E','F');
    $hexval = '';
     while($number != '0')
     {
        $hexval = $hexvalues[bcmod($number,'16')].$hexval;
        $number = bcdiv($number,'16',0);
    }
    return $hexval;
}


$sel_sql="SELECT * FROM tbl_clients";
$run_sql=mysqli_query($con,$sel_sql);
$count=mysqli_num_rows($run_sql);                                
$count=$count+1;
 //echo $count;
$number = $count; 
//var_dump(dec2hex($number)); 

$client_id= sprintf("%04s", dec2hex($number));
//echo $client_id;
 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){

	global $con;

	$today = date("Y-m-d H:i:s");  
	$enable_disable=filterText($_POST['toggle_checkbox']);
	$company_name=filterText($_POST['company_name']);
	$postal_code=filterText($_POST['postal_code']);
	$address=filterText($_POST['address']);
	$bldg_name=filterText($_POST['bldg_name']);	
		
		$insert="INSERT INTO tbl_clients(client_id,company_name, postal_code, address, bldg_name, reg_date, upd_date, enable) 
		VALUES('$client_id','$company_name','$postal_code','$address','$bldg_name','$today','NULL','$enable_disable')";
		$query=mysqli_query($con,$insert);
		if($query){
			header( "Location: ../../client" );
		}else{
			echo "Error";
		}	

}	