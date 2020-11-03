<?php 

include 'store.php';

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
									<h4>Client Company</h4>
								</div>
								<div class="right">
									<p class="right_p">Reg  yy/mm/dd hh:mm:ss</p>
									<p>Updated  yy/mm/dd hh:mm:ss</p>
								</div>
							</div>
						

							<!-- start client  create -->
							<div class="client_create">
								<!-- Start Switch Toggle -->
								<div class="switch_toggle">
									<div class="switch_button">
										<div class="toggle">
											<input type="hidden" name="toggle_checkbox" value="1">
											<input type="checkbox" name="toggle_checkbox" value="0">
											<label for="" class="onbtn" >Enable</label>
											<label for="" class="offbtn" >Disable</label>
										</div>
									</div>
								</div>
									<!--End Switch Toggle -->
								<div class="search_content_row">
									<label>Company name</label>
									<input type="" name="company_name" value="">

									<label>Postal Code</label>
									  <input type="text" name="postal_code" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');"/>
									<!-- <input type="" name="postal_code" class="postal_input" value=""> -->

									<label>Address</label>
									<input type="text" name="address" />

									<!-- <input type="" name="address" class="input_box" value=""> -->

									<label>Bldg name  -	<i style="font-size: 10px">Optional</i></label>
									<input type="" name="bldg_name" value="">
								</div>
							</div>
							

							<div class="half-signup"> <!-- half Inner -->
										
								<button class="Btn btn-register" type="submit" name="register">Register</button>
								
								<button class="Btn btn-cancle" type="submit">Cancle</button>
						
							</div> <!--End half Inner -->

						</div>
						<!-- end card body -->
					</div>
					<!-- start card -->

				</div>
			</div> 
		<!-- end row -->

	
	<!-- main container -->
	</div>
</form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 	crossorigin="anonymous"></script>
<script src="../../js/main.js"></script>
<script src="../../js/sortTable.js"></script>
<!-- <script type="text/javascript" src="js/ajaxzip3.js"></script> -->
<!-- <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script> -->
<script src="../../js/ajaxzip3.js" charset="UTF-8"></script>