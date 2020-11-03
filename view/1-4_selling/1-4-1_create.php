<!DOCTYPE html>
<html>
<head>
	<title>Rental And Lease</title>
	<meta charset="utf-8">
	<base href="<?php echo $_SERVER['PHP_SELF']; ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/side-bar.css">
	<link rel="stylesheet" type="text/css" href="../../css/main.css">
	<link rel="stylesheet" type="text/css" href="../../css/rental.css">
	<link rel="stylesheet" type="text/css" href="../../css/client_list.css">
	<link rel="stylesheet" type="text/css" href="../../css/selling.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	<style type="text/css">
		.foo {
  background-color: green;
}
	</style>
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
						<div class="icon_inner inner">
							<a href="../../index.php"><i class="fas fa-angle-double-left fa-2x"></i></a>
						</div>
						<div class="text heading">
							<h3 class="heading-text">Step supporter Ltd.</h3>
							<p class="heading-text-sub">Reg. form(Rental and Selling service)<p>
						</div>
					</div>
					<div class="icon_right setting">
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
							<div class="card_row">
								<div class="multistep-container">
									<div class="multistep-form-area">
										<p class="heading">Easy Registration in 3 Steps</p>
										<ul class="active-button">
											<li class="active">
												<span class="round-btn"></span>
												<div class="step-bar"></div>
												<span class="round-text text-one">Company info</span>
											</li>
											<li>
												<span class="round-btn " id="s-round-btn"></span>
												<span class="round-text text-two">P.I.C info</span>
											</li>
											<li>
												<span class="round-btn" id="t-round-btn"></span>
												<span class="round-text text-three">Payment info</span>
											</li>

										</ul>
										<div class="global">
											<i class="fas fa-globe"></i>
										</div>
									</div>

									<div class="border_line"></div>

									<div class="company_info">
										<p>Company Info</p>
										<div class="company-container">
											<div class="company-txt">
												<label>Company name</label>
												<input type="text" name="">
											</div>
											<div class="company-txt">
												<div class="col-100">
													<div class="label-text">
														<label class="col-50-text">Industry types</label>
														<p class="line"></p>
														<span style="font-style: italic;"> Multiple</span>
													</div>
											   </div>
												<div class="industry-container">
													<div class="con">
														<p>Construction</p>
													</div>
													<div class="operation" id="construction_operation">
														<i class="fas fa-plus"></i>
														<div class="minus">
														 <i class="fas fa-minus"></i>
														</div>
													</div>	
												</div>	
												<div class="div-inner" id="add-date">
													
                								</div>

                								

												<div class="industry-container except" >
													<div class="except-con">
														<p>Except for Construction</p>
													</div>
													<div class=" except-operation" id="except-construction">
														<i class="fas fa-plus"></i>
														<div class="minus">
														 <i class="fas fa-minus"></i>
														</div>
													</div>
												</div>
												
											</div>
											<div class="company-txt">
												<p class="md">Managing Director</p>
												<div class="col-container">
													<div class="col-50">
														<label>Family name</label>
													    <input type="text" name="">
													</div>
													<div class="col-50">
														<label>Give name</label>
													    <input type="text" name="">
													</div>
												</div>	
											</div>

											<div class="company-txt">
												<div class="col-100">
													<div class="label-text">
														<label class="col-50-text">Office location</label>
														<p class="line"></p>
														<span>Up to 5</span>
														<i class="fas fa-plus"></i>
													</div>
														
												</div>
											</div>
											<div class="company-txt loc">
												<div class="col-100">
													<div class="label-text">
														<label class="col-50-text">Yard location</label>
														<p class="line"></p>
														<span> Up to 5</span>
														<i class="fas fa-plus"></i>
													</div>
													
												</div>
											</div>
											<div class="company-txt">
												<label>Main phone number</label>
												<input type="text" name="" id="show-input" class="w-50">
											</div>
											<div class="company-txt">
												<label>Main fax name</label>
												<input type="text" name="" id="fax-input"  class="w-50">
											</div>
											<div class="company-txt">
												<label>Main email address</label>
												<input type="text" name="">
											</div>

										</div>
									</div>
									<button class="Btn">次へ</button>

									<!-- Modal box for telephone number -->
										<div class="mobal-box" id="tel-modal">
											<i class="fas fa-times closeBtn" id="close"></i>

											 <div class="modal-container">
											 	<input type="text" name="" class="modal-text" style="padding-left: 15%;" id="txt_modal">
											 	<i class="fas fa-phone-alt phone"></i>
											 	<div class="table">
											 		<table>
								                      <tr>
								                        <td>
								                          <button type="button" class="tel-button" id="t1">1</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="t2">2</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="t3">3</button>
								                        </td>
								                      </tr>
								                      <tr>
								                        <td>
								                          <button type="button" class="tel-button" id="t4">4</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="t5">5</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="t6">6</button>
								                        </td>
								                      </tr>
								                      <tr>
								                        <td>
								                          <button type="button" class="tel-button" id="t7">7</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="t8">8</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="t9">9</button>
								                        </td>
								                      </tr>
								                      <tr class="btn-tr">
								                        <td>
								                          <button type="button" class="tel-button" id="t0">0</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="tc">C</button>
								                        </td>
								                       
								                      </tr>
								                    </table> 
								                    <a  class="btn-ok" id="tel_ok">OK</a>
											 	</div>		
											 </div>

										</div>
									<!-- End Modal box -->

									<!-- For Fax modal box -->
										 <div class="mobal-box" id="fax-modal">
											<i class="fas fa-times closeBtn" id="colse-btn"></i>
											 <div class="modal-container">
											 	<input type="text" name="" class="modal-text" style="padding-left: 15%;" id="fax">
											 	<i class="fas fa-fax"></i>
											 	<div class="table">
											 		<table>
								                      <tr>
								                        <td>
								                          <button type="button" class="tel-button" id="f1">1</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="f2">2</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="f3">3</button>
								                        </td>
								                      </tr>
								                      <tr>
								                        <td>
								                          <button type="button" class="tel-button" id="f4">4</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="f5">5</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="f6">6</button>
								                        </td>
								                      </tr>
								                      <tr>
								                        <td>
								                          <button type="button" class="tel-button" id="f7">7</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="f8">8</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="f9">9</button>
								                        </td>
								                      </tr>
								                      <tr class="btn-tr">
								                        <td>
								                          <button type="button" class="tel-button" id="f0">0</button>
								                        </td>
								                        <td>
								                          <button type="button" class="tel-button" id="fc">C</button>
								                        </td>
								                       
								                      </tr>
								                    </table>
								                    <a  class="btn-ok" id="fax_ok">OK</a>
											 	</div>		
											 </div>
										</div>
									<!-- End Modal box -->

									<!-- Construction Modal -->
									 <div class="mobal-box" id="construction-modal" >
											<i class="fas fa-times closeBtn" id="c_fa_times"></i>
											 <div class="modal-container">
											 	<h2>Select Industry Types</h2>
											 	<p>Construction</p>
											 	<div class="table table-container">
											 		<table class="inner-table" id="mytable">
											 		
								                      <tr id="tr_bg" >
								                      		<!-- <td class='msgRow' onclick='loadMsg(this);'>Content1</td> -->
									                     	<td class="td_circle" id="data">土 <span>Do</span></td>
									                        <td class="td-text" id="data">土木一式工事業 <span>Public engineering</span></td>
								                      </tr>
								                        <tr id="tr_bg" >
									                     	<td class="td_circle msgRow" onclick='loadMsg(this);'>建<span>Ken</span></td>
									                        <td class="td-text">建築一式工事業<span>Construction engineering</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">大<span>Dai</span></td>
									                        <td class="td-text">大工工事業<span>Carpentry</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">左<span>Sa</span></td>
									                        <td class="td-text">左官工事業<span>Plasterwork</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">と<span>To</span></td>
									                        <td class="td-text">とび・土工工事業<span>Scaffold/construction/concrete work</span></td>
								                      </tr >
								                      <tr id="tr_bg">
									                     	<td class="td_circle">石<span>Ishi</span></td>
									                        <td class="td-text">石工事業<span>Stone work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">屋<span>Ya</span></td>
									                        <td class="td-text">屋根工事業<span>Roof work</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">電<span>Den</span></td>
									                        <td class="td-text">電気工事業<span>Electrical work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">管<span>Kan</span></td>
									                        <td class="td-text">管工事業<span>Piping work</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">タ<span>Ta</span></td>
									                        <td class="td-text">タイル・レンガ工事業<span>Tile/brick/block work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">鋼<span>Kou</span></td>
									                        <td class="td-text">鋼構造物工事業<span>Steel construction work</span></td>
								                      </tr>
								                      <tr>
									                     	<td class="td_circle">筋<span>Kin</span></td>
									                        <td class="td-text">鉄筋工事業<span>Steel reinforcement work</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">ほ<span>Ho</span></td>
									                        <td class="td-text">舗装工事業<span>Paving work</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">しゅ<span>Syu</span></td>
									                        <td class="td-text">しゅんせつ工事業<span>Dredging work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">板<span>Ban</span></td>
									                        <td class="td-text">板金工事業<span>Sheet metal work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">ガ<span>Ga</span></td>
									                        <td class="td-text">ガラス工事業<span>Glass work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">塗<span>To</span></td>
									                        <td class="td-text">塗装工事業<span>Coating work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">防<span>Bou</span></td>
									                        <td class="td-text">防水工事業<span>Waterproofing work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">内<span>Nai</span></td>
									                        <td class="td-text">内装仕上工事業<span>Interior finishing</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">機<span>Ki</span></td>
									                        <td class="td-text">機械器具設置工事業<span>Machinery installation</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">絶<span>Zetsu</span></td>
									                        <td class="td-text">熱絶縁工事業<span>Thermal insulation work</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">通<span>Tsu</span></td>
									                        <td class="td-text">電気通信工事業<span>Telecommunications work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">園<span>En</span></td>
									                        <td class="td-text">造園工事業<span>Landscape gardening</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">井<span>I</span></td>
									                        <td class="td-text">さく井工事業<span>Well drilling work</span></td>
								                      </tr>
								                      <tr>
									                     	<td class="td_circle">具<span>Gu</span></td>
									                        <td class="td-text">建具工事業<span>Fittings work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">水<span>Sui</span></td>
									                        <td class="td-text">水道施設工事業<span>Water facilities work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">消<span>Syou</span></td>
									                        <td class="td-text">消防施設工事業<span>Firefighting facilities work</span></td>
								                      </tr>
								                      <tr id="tr_bg">
									                     	<td class="td_circle">清<span>Sei</span></td>
									                        <td class="td-text">清掃施設工事業<span>Waste facilities work</span></td>
								                      </tr>
								                       <tr id="tr_bg">
									                     	<td class="td_circle">解<span>Kai</span></td>
									                        <td class="td-text">解体工事業<span>Demolition work</span></td>
								                      </tr>

								                    </table>
								                     <a  class="btn-ok construction-ok" id="con_ok">OK</a>
								                    
											 	</div>		
											 </div>
										</div>
										<!-- End Construction Modal -->

										<!-- Except of Construction Modal -->
									 <div class="mobal-box" id="e_construction-modal">
											<i class="fas fa-times closeBtn" id="e_fa_times"></i>
											 <div class="modal-container">
											 	<h2>Select Industry Types</h2>
											 	<p>Except for construction</p>
											 	<div class="table table-container">
											 		<table class="inner-table">
											 		
								                      <tr>
									                        <td class="td-text td_except_text td_except_text">農業,林業 <span>Agriculture and forestry</span></td>
								                      </tr>
								                        <tr>
									                     	
									                        <td class="td-text td_except_text">漁業<span>Fisheries</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">鉱業,採石業,砂利採取業<span>Mining and quarrying of stone and gravel</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">製造業<span>Manufacturing</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">電気・ガス・熱供給・水道業<span>Electricity, gas, heat supply and water</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">情報通信業<span>Information and communications</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">運輸業,郵便業<span>Transport and postal activities</span></td>
								                      </tr>
								                       <tr>
									                     	
									                        <td class="td-text td_except_text">卸売業,小売業<span>Wholesale and retail trade</span></td>
								                      </tr>
								                       <tr>
									                     	
									                        <td class="td-text td_except_text">金融業,保険業<span>Finance and insurance</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">不動産業,物品賃貸業<span>Real estate and goods rental and leasing</span></td>
								                      </tr>
								                       <tr>
									                     	
									                        <td class="td-text td_except_text">学術研究,専門・技術サービス業<span>
									                        	<?php echo  mb_strimwidth('Scientific research, professional and technical services', 0, 50, "...")?></span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">宿泊業,飲食サービス業<span>Accommodations, eating and drinking services</span></td>
								                      </tr>
								                       <tr>
									                     	
									                        <td class="td-text td_except_text">生活関連サービス業,娯楽業<span><?php echo  mb_strimwidth('Living-related and personal services and amusement services', 0,40, "...")?></span></td>
								                      </tr>
								                       <tr>
									                     	
									                        <td class="td-text td_except_text">教育,学習支援業<span>Education, learning support</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">医療,福祉<span>Medical, health care and welfare</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">複合サービス事業<span>Compound services</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">サービス業(他に分類されないもの)<span>Services, n.e.c.</span></td>
								                      </tr>
								                       <tr>
									                     	
									                        <td class="td-text td_except_text">公務(他に分類されるものを除く)<span>Government, except elsewhere classified</span></td>
								                      </tr>
								                      <tr>
									                     	
									                        <td class="td-text td_except_text">分類不能の産業<span>Industries unable to classify</span></td>
								                      </tr>
  
								                    </table>
								                     <a  class="btn-ok e_construction-ok" id="fax_ok">OK</a>
								                    
											 	</div>		
											 </div>
										</div>
										<!-- End Excepte Construction Modal -->
									
								</div>
							</div>
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
<script type="text/javascript">
			

</script>
  
		 
</script>




