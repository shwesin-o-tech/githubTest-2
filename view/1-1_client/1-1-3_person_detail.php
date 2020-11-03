<?php 
require '../../config/config.php';
	if(isset($_GET['pic_id'])){
		
		$pic_id=$_GET['pic_id'];	

		$sel="SELECT * FROM tbl_personsincharge WHERE personic_id ='$pic_id'";
		$query=mysqli_query($con,$sel);
		while($row=mysqli_fetch_assoc($query)){
			$c_id=$row['client_id'];
			$name_sei=$row['name_sei'];
			$name_mei=$row['name_mei'];
			$tel=$row['tel'];
			$email=$row['email'];
			$enable=$row['enable'];

		}

		$sel_client="SELECT company_name FROM tbl_clients WHERE client_id = '$c_id' ";
		$query=mysqli_query($con,$sel_client);
		while($row=mysqli_fetch_assoc($query)){
			$company_name=$row['company_name'];
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
	<form method="post">
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
									<h4>Person in Charge</h4>
								</div>
								
							</div>

							<!-- start client  create -->
							<div class="client_create">
								<!-- Start Switch Toggle -->
								<div class="switch_toggle">
									<div class="switch_button">
										<div class="toggle">
											<input type="checkbox" name=""  <?php echo $enable== '0' ? ' checked' : ''; ?> >
											<label for="" class="onbtn">Enable</label>
											<label for="" class="offbtn">Disable</label>
										</div>
									</div>
								</div>
									<!--End Switch Toggle -->

								<div class="search_content_row">
									
										<label>Company name</label>
										<input type="" name="" placeholder="Morikawa Kougyou.Inc." value="<?php echo $company_name ?>" >

										<label>Name Sei</label>
										<input type="" name="" placeholder="Isono" value="<?php echo $name_sei ?>">

										<label>Name Mei</label>
										<input type="" name="" class="input_box"  value="<?php echo $name_mei ?>">

										<label>Tel</label>
										<input type="" name="" class="input_box" value="<?php echo $tel ?>">

										<label>Mail</label>
										<input type="" name="" class="input_box" value="<?php echo $email ?>" id="input_mail">
									

								</div>
							</div>
							
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
</form>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 	crossorigin="anonymous"></script>
<script src="../../js/main.js"></script>