<!DOCTYPE html>
<html>
<head>
	<title>Sample</title>
	<meta charset="utf-8">
	<base href="<?php echo $_SERVER['PHP_SELF']; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/side-bar.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!-- sidebar -->
		<?php include_once 'dashboard/side-bar.php'; ?>
		<!-- end sidebar -->

		<!-- main container -->
		<div class="main_container"> 

			<!-- top bar -->
			<?php include_once 'dashboard/top-bar.php'; ?>
			<!-- top bar -->

			<div class="container"> 
				<div class="row">
					<!-- start card -->
					<div class="card"> 
						<!-- start card header -->
						<div class="card_header">
							<div class="icon_left">
								<div class="icon_inner">
									<a href=""><i class="fas fa-angle-double-left fa-2x"></i></a>
								</div>
								<div class="text">
									<h3 style="font-weight: bold;">Stock</h3>
								</div>
							</div>
							
							<div class="icon_right">
								<i class="fas fa-cog fa-2x"></i>
							</div>
						</div>
						<!-- end card header -->


						<!-- start card body -->
						<div class="card_body">
						

						</div>
						<!-- end card body -->
					</div>
					<!-- start card -->
				</div>
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