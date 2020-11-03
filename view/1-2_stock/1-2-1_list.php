<!DOCTYPE html>
<html>
<head>
	<title>Stock List</title>
	<meta charset="utf-8">
	<base href="<?php echo $_SERVER['PHP_SELF']; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/side-bar.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/client_list.css">
	<link rel="stylesheet" type="text/css" href="../../css/stock.css">
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
							<a href="../../index.php"><i class="fas fa-angle-double-left "></i></a>
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
							<h4 class="text">Stock List</h4>
							<div class="card_body_row">
								<div class="card_body_left">
									<h5>999 / 999</h5>
								</div>
								<div class="card_body_right">
									<a href="#" class="btn">
										<i class="fas fa-trash-alt"></i>
									</a>
									<a href="#" class="btn">
										<i class="fas fa-pencil-alt"></i>
									</a>
									<a href="1-2-2_create.php" class="btn">
										<i class="fas fa-plus"></i>
									</a>
									<a href="#" class="btn">
										<i class="fas fa-search"></i>
									</a>
								</div>
							</div>
							<!-- start table -->
							<div class="card_body_table">
								<table class="table">
									<thead>
										<tr>
											<th>Name</th>
											<th>Modal</th>
										</tr>
									</thead>
									<tbody>
										<tr class='tr_row'>
											<td>Pillar</td>
											<td class="td_row">SA-36</td>
										</tr>
										<tr class='tr_row'>
											<td>Pillar</td>
											<td class="td_row">SA-36</td>
										</tr>
										<tr class='tr_row'>
											<td>Pillar</td>
											<td class="td_row">SA-36</td>
										</tr>
										<tr class='tr_row'>
											<td>Pillar</td>
											<td class="td_row">SA-36</td>
										</tr>
										<tr class='tr_row'>
											<td>Pillar</td>
											<td class="td_row">SA-36</td>
										</tr>
										<tr class='tr_row'>
											<td>Pillar</td>
											<td class="td_row">SA-36</td>
										</tr>
										<tr class='tr_row'>
											<td>Pillar</td>
											<td class="td_row">SA-36</td>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- end table -->

							

						</div>
						<!-- end card body -->
					</div>
					<!-- start card -->

				</div>

			</div> 

	

	</div>	
	<!-- wrapper -->		
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
 	crossorigin="anonymous"></script>
<script src="../../js/main.js"></script>