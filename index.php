<!DOCTYPE html>
<html>
<head>
  <title>Rental System</title>
  <meta charset="utf-8">
  <base href="<?php echo $_SERVER['PHP_SELF']; ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>
  <div class="wrapper">
    <!-- main container -->
    <div class="main_container">
     
   <!-- !-- top bar --> 
      <div class="top_navbar">

        <div class="left_bar">
          <div class="left_bar_inner">
            <dir class="bar-out"></dir>
                <dir class="bar-in"></dir>
                <dir class="bar-out"></dir>
          </div>
        </div>

        <div class="right_bar">
            <div class="right_bar-inner">
                <i class="far fa-bell" style="color: #cccccc78;font-size: 1.7em;"></i>
            </div>    
        </div>

      </div>
        <!-- top bar -->
    <!-- container -->
      <div class="container"> 
        <div class="row">
          <div class="card">
            <div class="card_header">
              <div class="icon">
                <div class="icon_inner">
                  <i class="fas fa-angle-double-left"></i>
                </div>
              </div>
              <h3 style="font-weight: bold;">Material Control</h3>
            </div>
            <div class="card_body">
              <!-- box 1 row -->
              <div class="box_container">
                <a href="client">
                  <div class="box">
                    <h3>Clients</h3>
                  </div>
                </a>
                <a href="stock">
                  <div class="box">
                    <h3>Stock</h3>
                  </div>
                </a>
              </div>
              <!-- end box 1 row  -->

              <!-- box 2 row -->
              <div class="box_container_one">
                <a href="rental">
                  <h3>Rental and Lease</h3>
                </a>
              </div>
              <!--end  box 2 row -->

              <!-- box 3 row -->
              <div class="box_container_one">
                <a href="selling">
                 <h3>Selling</h3>
                </a> 
              </div>
              <!--end  box 3 row -->

              <!-- box 4 row -->
              <div class="box_container_two">
                <div class="box_one">
                  
                </div>
                <div class="box_two">
                  <h3>Setting</h3>
                </div>
              </div>
              <!--end  box 4 row -->



            </div>
          </div>
          
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
<script src="../../js/main.js"></script>