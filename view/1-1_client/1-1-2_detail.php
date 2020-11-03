<?php 
	require '../../config/config.php';
	
	if(isset($_GET['client_id'])){
		$client_id=$_GET['client_id'];
		
		$sel="SELECT * FROM tbl_clients WHERE client_id='$client_id'";
		$query=mysqli_query($con,$sel);
		//$count=mysqli_num_rows($query);
		while($row=mysqli_fetch_assoc($query)){
			$company_name=$row['company_name'];
			$postal_code=$row['postal_code'];
			$address=$row['address'];
			$bldg_name=$row['bldg_name'];
			$reg_date=$row['reg_date'];
			$upd_date=$row['upd_date'];
			$enable=$row['enable'];
		}
	

	$sel1="SELECT * FROM tbl_personsincharge WHERE client_id='$client_id'";
	$query1=mysqli_query($con,$sel1);
	$count_person=mysqli_num_rows($query1);

	$sel2="SELECT * FROM tbl_personsincharge WHERE client_id='$client_id' AND enable='1'";
	$query2=mysqli_query($con,$sel2);
	$count_enable=mysqli_num_rows($query2);

	$result_search='';
	if(isset($_POST['search'])){
		$person_name=$_POST['person_name'];									
		$select="SELECT * FROM tbl_personsincharge WHERE CONCAT(name_sei,' ',name_mei) LIKE  '$person_name%' OR CONCAT(name_mei,' ',name_sei) LIKE  '$person_name%' AND client_id='$client_id'";
		$result_search=mysqli_query($con,$select);
		$count_search=mysqli_num_rows($result_search);

	}
		
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Client Create</title>
	<meta charset="utf-8">
	<base href="<?php echo $_SERVER['PHP_SELF']; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/side-bar.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/client_list.css">
	<link rel="stylesheet" type="text/css" href="../../css/client_create.css">
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
				<!-- start card header -->
					<div class="card_header">
						<div class="icon">
							<div class="icon_inner">
								<a href="1-1-1_list.php"><i class="fas fa-angle-double-left"></i></a>
							</div>
						</div>
						<h3 style="font-weight: bold;">Clients</h3>
					</div>
						<!-- end card header -->

				<!--row -->
				<div class="row">
					<!-- start card -->
					<div class="card"> 
						

						<!-- start card body -->
						<div class="card_body">
							
							<div class="card_row">
								<div class="left">
									<h4>Client Company</h4>
								</div>
								<div class="right">
									<p class="right_p">Reg  <?php echo $reg_date ?></p>
									<p>Updated  <?php echo $upd_date ?></p>
								</div>
							</div>
							<!-- start client  create -->
							<div class="client_create">
								<!-- Start Switch Toggle -->
								<div class="switch_toggle">
									<div class="switch_button">
										<div class="toggle">
											<input type="checkbox" name="" <?php echo $enable== '0' ? ' checked' : ''; ?> >
											<label for="" class="onbtn">Enable</label>
											<label for="" class="offbtn">Disable</label>
										</div>
									</div>
								</div>
									<!--End Switch Toggle -->
								<div class="search_content_row">
									<label>Company name</label>
									<input type="" name="" value="<?php echo $company_name; ?>" class="input">

									<label>Postal Code</label>
									<input type="" name="" class="postal_input input" value="<?php echo $postal_code ?>">

									<label>Address</label>
									<input type="" name="" class="input_box input" value="<?php echo $address?>" >

									<label>Bidg name  -	<i style="font-size: 10px">Optional</i></label>
									<input type="" name="" value="<?php echo $bldg_name;?>" class="input">
								</div>
							</div>
							<!-- start client  create -->
							<div class="border"></div>

							<!--start person in charge -->
							<div class="person_row">
								<h4 class="text">Person in charge</h4>

								<div class="card_body_row">
									<div class="card_body_left">
										<h5>
											<?php 
												if(isset($_POST['search'])){
													echo $count_search;
												}else{
													echo $count_person;

												}
											?>
											 	/ 
											  <?php echo $count_person;?></h5>
									</div>
									<div class="card_body_right">
										<a href="#" class="btn">
											<i class="fas fa-trash-alt"></i>
										</a>
										<a href="#" class="btn">
											<i class="fas fa-pencil-alt"></i>
										</a>
										<a href="#" class="btn">
											<i class="fas fa-plus"></i>
										</a>
										
										<i class="fas fa-search"  id="myBtn" class="Search"></i>
										
									</div>
								</div>
								<!-- start table -->
								<div class="card_body_table" id="pic_list">
									<table class="table" id="table">
										<thead>
											<tr>
												<th onclick="sortTable(0)" style="text-align: center;">Name<span class="icon-embed icon-embed--vertical"></span></th>
												<th onclick="sortTable(1)">Phone<span class="icon-embed icon-embed--vertical"></span></th>
												<th></th>
												<th onclick="sortTable(2)">Email<span class="icon-embed icon-embed--vertical"></span></th>
												<th></th>
												
											</tr>
										</thead>
										<tbody>
										<?php
											
		
										if($result_search){
											 if(mysqli_num_rows($result_search) <= 0){

												
												echo '<tr class="solid">
														  <td></td>
														  <td style="padding: 10px;text-align:left;vertical-align: middle;font-size:20px"> No Result
														  </td>
												 
												 	 </tr>';

											}else{
												while($row=mysqli_fetch_assoc($result_search)){
													$name_sei=$row['name_sei'];
													$name_mei=$row['name_mei'];
													$phone=$row['tel'];
													$email=$row['email'];
													if(isset($_POST['tel'])){
														$tel=$_POST['tel'];
													}else{
														$tel="***-****-****";
													}
													//phone

													if(isset($_POST['email'])){
														$email=$_POST['email'];
													}else{
														$email="****************@gmail.com";
													}
													//email											
													echo '<tr class="solid">
															<td class="solid_td_1 width_name" > '.$name_sei. "<br>" .$name_mei.'</td>
															<td class="width_tel">'.$tel.'</td>
															<td class="width_phone">
																<i class="fas fa-phone-volume"></i>
															</td>
															<td class="width_email">'. mb_strimwidth($email, 0,30, "...").' </td>
															<td class="width_envelope">
																<i class="fas fa-envelope"></i>	
															</td>	
														</tr>';
												}

											}

										}


										else{
											while($row=mysqli_fetch_assoc($query1)){
												$pic_id=$row['personic_id'];
												$name_sei=$row['name_sei'];
												$name_mei=$row['name_mei'];
												$tel=$row['tel'];
												$email=$row['email'];
												$enable=$row['enable'];
												echo $pic_id;
												//echo $enable;
											?>
											<?php

												if($enable==1){
												?>
													<tr class="solid" onClick="showDetails('<?php echo $pic_id ?>');">
														<td class="solid_td_1 width_name" >
															<?php echo $name_sei.'<br>'.$name_mei ?>
														</td>

														<td class="width_tel">
															<?php
																if(isset($row['tel'])){
																	 echo $tel;
																}else{
																	echo "***-****-****";
														 			
																}

															 ?>
														</td>
														<td class="width_phone">
															<i class="fas fa-phone-volume"></i>
														</td>

														<td class="width_email">
															<?php 
																if(isset($row['email'])){ 

																	echo mb_strimwidth($email, 0,30, "..."); 
																}else{
																	$string="****************@gmail.com";
																	echo mb_strimwidth($string, 0, 20, "...");
																}
															?>	
														</td>
														<td class="width_envelope">
															<i class="fas fa-envelope"></i>	
														</td>	
													</tr>

													

											<?php	
												}else{
												?>
													<tr class='solid' style="background: #cccccc59;"  onClick="showDetails('<?php echo $pic_id ?>');">
														<td class="solid_td_1 width_name" >
															<?php echo $name_sei.'<br>'.$name_mei ?>
														</td>

														<td class="width_tel">
															<?php echo $tel ?>
														</td>
														<td class="width_phone">
															<i class="fas fa-phone-volume"></i>
														</td>

														<td class="width_email">
															<?php  echo mb_strimwidth($email, 0,30, "...") ?>	
														</td>
														<td class="width_envelope">
															<i class="fas fa-envelope"></i>	
														</td>	
													</tr>
											<?php
												} 
											?>
											
										<?php }
										 } 
										?>
										</tbody>
									</table>
								</div>
								<!-- end table -->
							</div>
							<!--end person in charge -->


							<!--start search modal -->
							<form method="post">
								<div id="myModal" class="detail_modal">
								  <!-- Modal content -->
								  <div class="detail_modal-content">
								  		
								  	<i class="fas fa-times fa-2x closeBtn"></i>
									   <div class="paragraph">
										   	<label>Name</label>
											<input type="" name="person_name">

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
		<!-- end row -->

	
	<!-- main container -->
	</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 	crossorigin="anonymous"></script>
<script src="../../js/main.js"></script>
<script src="../../js/sortTable.js"></script>
<script type="text/javascript">
	function showDetails(id)
	{
		var id = id;
		window.location.href = "1-1-3_person_detail.php?pic_id="+id;
		
	}
</script>