<?php 
	require '../../config/config.php';
	$client_id='';

	$sql_all="SELECT * FROM tbl_clients";
	$result_all=mysqli_query($con,$sql_all);
	$count_all=mysqli_num_rows($result_all);

	$sql_enable="SELECT * FROM tbl_clients WHERE enable='1'";
	$result_enable=mysqli_query($con,$sql_enable);
	$count_enable=mysqli_num_rows($result_enable);


				if (isset($_POST['search'])){

						$company=$_POST['company'];
						$code=$_POST['code'];
						$address=$_POST['address'];
						//echo $address;
						$bldg_name=$_POST['bldg_name'];
						$pic=$_POST['pic'];
						//echo $company;

						$search_com = '';
						$search_code = '';
						$search_address = '';
						$search_blg_name = '';			
						//echo $company;
						$result1='';


						if($company!=null || $code!=null  || $address!=null || $bldg_name!=null){

				    		if($company != ''){
				    			$search_com = " AND (company_name LIKE '%$company%')";
				    		}

				    		if($code != ''){
				    			$search_code = " AND (postal_code LIKE '%$code%')";
				    		}

				    		if($address != ''){
				    			$search_address = " AND (address LIKE '%$address%')";
				    		}
									
							if($bldg_name != ''){
				    			$search_blg_name = " AND (bldg_name LIKE '%$bldg_name%')";    					
				    		}
				    							
							$query1 ="SELECT * FROM  tbl_clients WHERE enable='1' ".$search_com.$search_code.$search_address.$search_blg_name ; 
							$result1=mysqli_query($con,$query1);
							$count_search=mysqli_num_rows($result1);

					}elseif($pic!=null){
							$id="";

					    	$select="SELECT * FROM tbl_personsincharge WHERE CONCAT(name_sei,' ',name_mei) LIKE  '$pic%' OR CONCAT(name_mei,' ',name_sei) LIKE  '$pic%' AND enable='1'  ";
							$result2=mysqli_query($con,$select);
								while($row=mysqli_fetch_array($result2)){
										$id=$row['client_id'];
															//echo $id;
								}	
								$sel2="SELECT * FROM tbl_clients WHERE client_id='$id' AND  enable='1' ";
								$query2=mysqli_query($con,$sel2);
								$count_search=mysqli_num_rows($query2);					 
						}
		}
	
		
?>
<!DOCTYPE html>
<html>
<head>
	<title>Client List</title>
	<meta charset="utf-8">
	<base href="<?php echo $_SERVER['PHP_SELF']; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/side-bar.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/client_list.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

</head>
<body>
	<div class="wrapper">
		<!-- sidebar -->
			<?php include_once '../dashboard/side-bar.php'; ?>
		<!-- end sidebar -->

		<!-- main container -->
		<div class="main_container"> 
			<!-- top bar -->
				<?php include_once '../dashboard/top-bar.php'; ?>
			<!-- top bar -->

		<!-- container -->
			<div class="card_header">
					<div class="icon">
						<div class="icon_inner">
							<a href="../../index.php"><i class="fas fa-angle-double-left" style="padding: 5px"></i></a>
						</div>
					</div>
					<h3 style="font-weight: bold;">Clients</h3>
			</div>

				
				<div class="row">
					<!-- start card -->
					<div class="card">

						<!-- start card body -->
						<div class="card_body">
							<h4 class="text">Clients List</h4>
							<div class="card_body_row">
								<div class="card_body_left">
									<h5>
									<?php 
										if(isset($_POST['search'])){
											echo  $count_search;
										}else{
											echo $count_all;
										}
									
									?> 
									/
									<?php echo $count_enable; ?></h5>
								</div>
								<div class="card_body_right">
									<a href="javascript:void(0);" class="btn"  onclick="formToggle('importFrm');">
			                       		<i class="fas fa-file-import"></i>
			                    	</a>
									<a href="export.php" class="btn">
					                    <i class="fas fa-file-download"></i>
					                </a>
									<a href="#" class="btn">
										<i class="fas fa-trash-alt"></i>
									</a>
									<a href="#" class="btn">
										<i class="fas fa-pencil-alt"></i>
									</a>
									<a href="1-1-4_create.php" class="btn">
										<i class="fas fa-plus"></i>
									</a>
									<a href="#" class="btn" id="myBtn">
										<i class="fas fa-search" ></i>
									</a>
								</div>
							</div>

							 <!-- CSV file upload form -->
					             <div class="col-md-12" style="display: none;" id="importFrm">
					              <span id="message"></span>
					                <form  method="post" enctype="multipart/form-data" id="import_excel_form" >
					                  <table class="import_table">
					                    <tr>
					                      <td width="25%" align="right" class="import_td"> Select Excel File</td>
					                      <td width="50%" class="import_td"><input type="file" name="import_excel"></td>
					                      <td width="25%" class="import_td">
					                        <input type="submit" name="import" id="import" value="Import">
					                      </td>
					                    </tr>
					                    
					                  </table> 
					                </form>
					             </div>
				           <!-- End CSV file upload form -->



							<!-- start table -->
							<div class="card_body_table">
								<table class="table" id="table">
									<thead>
										<tr>
											
											<th onclick="sortTable(1)" style="text-align: left;">Company Name<span class="icon-embed icon-embed--vertical"></span></th>
											<th onclick="sortTable(2)" style="text-align: left;">Company Address<span class="icon-embed icon-embed--vertical"></span></th>
											
										

										</tr>
									</thead>
									<tbody>
										<?php

										//Search
						 	if (isset($_POST['search'])){
							
							// search keyword result show
								if($result1){
									 if(mysqli_num_rows($result1) <= 0){

											echo '<tr class="solid">
												  <td></td>
												  <td style="padding: 10px;text-align:left;vertical-align: middle;font-size:20px"> No Result
												  </td>
												 
												  </tr>';
										
									}else{
										 while($row=mysqli_fetch_array($result1)){
										 	

												$company_name=$row['company_name'];
												$address=$row['address'];
												$client_id=$row['client_id'];

										?>
												
											<tr class="solid" onClick="showDetails('<?php echo $client_id;?>')">
												<td class="solid_td_1"><?php echo mb_strimwidth($company_name, 0, 30, "...") ?></td>
												<td class="solid_td_1"><?php echo mb_strimwidth($address, 0, 30, "...") ?></td>
														
											 </tr>
									<?php 				 	
										}
									}	


								}
							// search keyword result show
								
							// search keyword result show (pic)
							elseif($query2){
										$id="";

									if(mysqli_num_rows($query2) <= 0){

										echo '<tr class="solid" >
												  <td></td>
												  <td style="padding: 10px;text-align:left;vertical-align: middle;font-size:20px"> No Result
												  </td>
												  <td></td>
												  </tr>';
										
									}else{
											while($row=mysqli_fetch_assoc($query2)){
												$company_name=$row['company_name'];
												$address=$row['address'];
												$client_id=$row['client_id'];
											?>
												<tr class="solid" onClick="showDetails('<?php echo $client_id;?>')">
													<td class="solid_td_1"><?php echo mb_strimwidth($company_name, 0, 30, "...") ?></td>
													<td class="solid_td_1"><?php echo mb_strimwidth($address, 0, 30, "...") ?></td>	
											  </tr>

										<?php				
										
													 }
											}	 
								
								}	
							// search keyword result show (pic)	
										
							}

							else{

										$sql="SELECT * FROM tbl_clients WHERE enable='1' ORDER BY client_id DESC ";
										$result=mysqli_query($con,$sql);

										while($row=mysqli_fetch_array($result)){
												
											$company_name=$row['company_name'];
											$address=$row['address'];
											$client_id=$row['client_id'];
										
									?>
										
											<tr class='solid' onClick="showDetails('<?php echo $client_id;?>');">
												
													<div class="">
														<td  class="solid_td_1" ><?php  echo mb_strimwidth($company_name, 0, 30, "..."); ?></td>
														<td  class="solid_td_2" ><?php echo mb_strimwidth($address, 0, 30, "..."); ?></td>
													</div>		
											</tr>
										
											
									<?php

									 	} 
									}
								?>
									</tbody>
								</table>
							</div>
							<!-- end table -->
					
							<!--start search modal -->
							<form method="post">
								<div id="myModal" class="modal">
								  <!-- Modal content -->
								  <div class="modal-content">
								  		
								  	<i class="fas fa-times fa-2x closeBtn"></i>
									   <div class="paragraph">
										   	<label>Company name</label>
											<input type="" name="company">

											<label>Postal Code</label>
											<input type="" name="code" >

											<label>Address</label>
											<input type="" name="address" >

											<label>Bldg name</label>
											<input type="" name="bldg_name" >

											<label>Person in charge</label>
											<input type="" name="pic" >

											<i class="fas fa-arrow-alt-circle-left fa-2x"></i>
											
											<button type="submit" name="search">
												<i class="fas fa-search fa-2x"></i>
											</button>
											
														
									   </div>
									   
								  </div>
								</div>
							</form>	
							<!--end search modal -->

						</div>
						<!-- end card body -->
					</div>
					<!-- start card -->

				</div>

			</div> 
		<!-- end container -->

	
	<!-- main container -->
	</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 	crossorigin="anonymous"></script>
   	
<script src="../../js/main.js"></script>
<script src="../../js/sortTable.js"></script>
<script src="js/ajaxzip3.js" charset="UTF-8"></script>
<script type="text/javascript">
	function showDetails(id)
	{
		var id = id;
		window.location.href = "1-1-2_detail.php?client_id="+id;
		
	}


function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}

$(document).ready(function(){
  $('#import_excel_form').on('submit',function(event){
    event.preventDefault();
    console.log("hello");
    $.ajax({
      url:"import.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      beforeSend:function(){
        $('#import').attr('disabled','disabled');
        $('#import').val('Importing...');
      },
      success:function(data)
      {
        $('#message').html(data);
        $('#import_excel_form')[0].reset();
        $('#import').attr('disabled',false);
        $('#import').val('Import');
      }

    });
  });
});



</script>

