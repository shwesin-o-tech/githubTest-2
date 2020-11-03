<!DOCTYPE html>
<html>
<head>
	<title>Rental</title>
	<meta charset="utf-8">
	<base href="<?php echo $_SERVER['PHP_SELF']; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/side-bar.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/rental.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>
	<!-- wrapper -->
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
				<div class="icon_left">
					<div class="icon_inner">
						<a href="../1-3_rental/1-3-1_list.php"><i class="fas fa-angle-double-left fa-2x"></i></a>
					</div>
					<div class="text">
						<h3 style="font-weight: bold;">Rental</h3>
					</div>
				</div>
							
				<div class="icon_right">
					<div class="icon_right_inner">
						<i class="fas fa-cog"></i>
					</div>	
				</div>

			</div>
			<!-- end card header -->

				<div class="row">
					<!-- start card -->
					<div class="card"> 
						<!-- start card body -->
					<div class="body">
						<div class="body_inner">
							<div class="card_body_id">
								<div class="id">ID: 99999999</div>
							</div>
							<div class="card_body_row">
								<div class="card_row_text">
									<p>Request Sheet</p>
								</div>
								<div class="card_row_date">
									<p class="p-right">Reg: yy/mm/dd hh:mm:ss</p>
									<p>Updated: yy/mm/dd hh:mm:ss</p>
								</div>
							</div>

							<div class="card_body_client">
								<label class="client_label">Client Name</label>
								<input type="" name="" placeholder="Matsuda Kougyou Ltd.">
							</div>

							<div class="border_line"></div>

							<!-- Start Switch Toggle -->
							<div class="switch_toggle">
								<div class="switch_button">
									<div class="toggle">
										<input type="checkbox" name="">
										<label for="" class="onbtn">TakeOut</label>
										<label for="" class="offbtn">Delivery</label>
									</div>
								</div>
								<div class="switch_button1">
									<div class="toggle">
										<input type="checkbox" name="">
										<label for="" class="onbtn">BringIn</label>
										<label for="" class="offbtn">Salvage</label>
									</div>
								</div>
								<div class="location">
									<div class="location_inner">
										<i class="fas fa-map-marker-alt"></i>
									</div>
								</div>
							</div>
							<!--End Switch Toggle -->	

							<!-- Start Term  -->
							<div class="term">
								<label class="term_label">Term</label>
								<div class="input-group">
									<div class="term_input">
										<p>form</p>
										<input type="" name="" placeholder="yy/mm/dd">
									</div>
									<div class="term_input " id="input">
										<p>unti</p>
										<input type="" name="" class="unti_input" placeholder="yy/mm/dd">
									</div>
								</div>
							</div>
							<!-- End Term  -->

							<div class="border_line"></div>

							<!-- Start Total -->
							<div class="total">
								<div class="total_input">
									<label>Total Weight</label>
									<input type="" name="" placeholder="9,999,999.99kg">
								</div>
								<div class="total_input1">
									<label>Total Price</label>
									<input type="" name="" class="unti_input" placeholder="999,999,999">
								</div>
							</div>
							<!-- End Total -->

							<div class="border_line"></div>

							<!-- Start Table-->
							<div class="scroll_table">
								<table class="tableBodyScroll">
									  <thead>
									    <th>Name / Modal</th>
									    <th>Quantity</th>
									    <th>Price
									    	<i class="fas fa-plus"></i>
									    	<i class="fas fa-minus"></i>
									    </th>
									   
									  </thead>
									  <tbody>
									    <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									    <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>

									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>

									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>

									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>

									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>

									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>
									     <tr class="tr_row">
									      <td>
									      	<p class="p">Pillar</p>
									      	<p>SA-36</p>
									      </td>
									      <td>999,999</td>
									      <td>999,999,999</td>
									    </tr>

									    
									  </tbody>
									</table>
							</div>
							<!-- End Table-->

							</div>
						</div>
						<!-- end card body -->
					</div>
					<!-- start card -->
				</div>
			</div> 

		<!-- main container -->
	</div>	
	<!-- wrapper -->
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 	crossorigin="anonymous"></script>
<script src="../../js/main.js"></script>