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
	<link rel="stylesheet" type="text/css" href="../../css/stock.css">
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
				<div class="icon_left">
					<div class="icon_inner">
						<a href="../1-2_stock/1-2-1_list.php"><i class="fas fa-angle-double-left fa-2x"></i></a>
					</div>
					<div class="text">
						<h3 style="font-weight: bold;">Stock</h3>
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
						<div class="card_body">
							
								<h4 class="text">Stock Info</h4>
							

							<!-- start stock create -->
							<div class="client_create">
								<div class="search_content_row">
									<label>Name</label>
									<input type="" name="" placeholder="Pillar">

									<label>Modal</label>
									<input type="" name="" class="input_box" placeholder="SA-36">

									<label>Manufacture</label>
									<input type="" name="" class="input_box" placeholder="KRH">

									<label>Unit Weight [kg]</label>
									<input type="" name="" class="input_box" placeholder="999,999.99" style="text-align: right;">

									<div class="input_row">
										<div class="width-50">
											<label>Base Rental Price[X/Unit]</label>
											<input type="" name="" placeholder="999,999" style="text-align: right;">
										</div>
										<div class="width-10"></div>
										<div class="width-50" id="w-50">
											<label>Base Selling Price[X/Unit]</label>
											<input type="" name="" placeholder="999,999" style="text-align: right;" id="input_w_50">
										</div>
									</div>
							</div>
							<!-- start stock  create -->

							<div class="stock_border"></div>

							<!-- circle -->
							<div class="width-100">
								<div class="circle">
									 <canvas id="myChart" class="chart"></canvas>
								</div>
								<div class="total">

									<div class="titleWrap">
								        <p class="totals">Total</p>
										<p class="value">999,999</p>
								    </div>

									<div class="titleWrap">
									   	<div class="rent_value"></div>
									        <p class="rent">Rent</p>
											<p class="value">999,999</p>
									    </div>

								     <div class="titleWrap">
								     	<div class="stock_value"></div>
								        <p class="stock">Stock</p>
										<p class="value">999,999</p>
								    </div>
								</div>
							</div>
							<!-- end circle -->

	
							
						</div>
						<!-- end card body -->
					</div>
					<!-- start card -->

				</div>
			</div> 
		<!-- end container -->

		</div>
	<!-- main container -->
	</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 	crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script src="../../js/main.js"></script>