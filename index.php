<?php include('header.php');
require_once('../Config/covipedia.php');

	$users = "SELECT count(*) as total_users FROM `user`";
	$result = mysqli_query($conn,$users);
	$row = mysqli_fetch_array($result);
	$users_count = $row['total_users'];
	
	$product = "SELECT count(*) as total_product FROM `products`";
	$result1 = mysqli_query($conn,$product);
	$row1 = mysqli_fetch_array($result1);
	$product_count = $row1['total_product'];
	
	$order = "SELECT count(*) as total_order FROM `order_master`";
	$result = mysqli_query($conn,$order);
	$row = mysqli_fetch_array($result);
	$order_count = $row['total_order'];
	
	$feedback = "SELECT count(*) as total_feedback FROM `feedback_master`";
	$result = mysqli_query($conn,$feedback);
	$row = mysqli_fetch_array($result);
	$feedback_count = $row['total_feedback'];
	?>
        <!--**********************************
            Header end ti-comment-altp
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<!-- <div class="form-head" style="background-image:url('images/background/bg3.jpg');background-position: bottom; ">
				<div class="container max d-flex align-items-center mt-0">
					<h2 class="font-w600 title text-white mb-2 mr-auto ">Dashboard</h2>
					<div class="weather-btn mb-2">
						<span class="mr-3 font-w600 text-black"><i class="fa fa-cloud mr-2"></i>21</span>
						<select class="form-control style-1 default-select  mr-3 ">
							<option>Medan, IDN</option>
							<option>Jakarta, IDN</option>
							<option>Surabaya, IDN</option>
						</select>
					</div>
					<a href="javascript:void(0);" class="btn white-transparent mb-2"><i class="las la-calendar scale5 mr-3"></i>Filter Periode</a>
				</div>
			</div> -->
			<div class="container-fluid">
				<div class="form-head mb-sm-5 mb-3 d-flex flex-wrap align-items-center">
					<h2 class="font-w600 title mb-2 mr-auto ">Dashboard</h2>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="40" cy="40" r="40" fill="white"/>
									<path d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#00ADA3"/>
									<path d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM40.0033 19.1441L49.272 35.6798L40.8133 30.973C40.3083 30.693 39.6966 30.693 39.1916 30.973L30.7329 35.6798L40.0033 19.1441ZM40.0033 60.8509L30.7329 44.3152L39.1916 49.022C39.4433 49.162 39.7233 49.232 40.0016 49.232C40.28 49.232 40.56 49.162 40.8117 49.022L49.2703 44.3152L40.0033 60.8509ZM40.0033 45.6569L29.8296 39.9967L40.0033 34.3364L50.1754 39.9967L40.0033 45.6569Z" fill="#00ADA3"/>
								</svg>
								<h2 class="text-black mb-2 font-w600"><?php echo $users_count;?></h2>
								<p class="mb-0 fs-14">
									<svg  width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d1)">
										<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
										</g>
										<defs>
										<filter id="filter0_d1" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
										<feOffset dy="1"/>
										<feGaussianBlur stdDeviation="2"/>
										<feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0"/>
										<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
										<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
										</filter>
										</defs>
									</svg>
									<span class="text-success mr-1"></span>Total user
								</p>	
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="40" cy="40" r="40" fill="white"/>
									<path d="M40 0C17.9083 0 0 17.9083 0 40C0 62.0917 17.9083 80 40 80C62.0917 80 80 62.0917 80 40C80 17.9083 62.0917 0 40 0ZM40 72.5C22.0783 72.5 7.5 57.92 7.5 40C7.5 22.08 22.0783 7.5 40 7.5C57.9217 7.5 72.5 22.0783 72.5 40C72.5 57.9217 57.92 72.5 40 72.5Z" fill="#FFAB2D"/>
									<path d="M42.065 41.2983H36.8133V49.1H42.065C43.125 49.1 44.1083 48.67 44.7983 47.9483C45.52 47.2566 45.95 46.275 45.95 45.1833C45.9517 43.0483 44.2 41.2983 42.065 41.2983Z" fill="#FFAB2D"/>
									<path d="M40 10.8333C23.9167 10.8333 10.8333 23.9166 10.8333 40C10.8333 56.0833 23.9167 69.1666 40 69.1666C56.0833 69.1666 69.1667 56.0816 69.1667 40C69.1667 23.9183 56.0817 10.8333 40 10.8333ZM45.935 53.5066H42.495V58.9133H38.8867V53.5066H36.905V58.9133H33.28V53.5066H26.9067V50.1133H30.4233V29.7799H26.9067V26.3866H33.28V21.0883H36.905V26.3866H38.8867V21.0883H42.495V26.3866H45.6283C47.3783 26.3866 48.9917 27.1083 50.1433 28.26C51.295 29.4116 52.0167 31.025 52.0167 32.775C52.0167 36.2 49.3133 38.995 45.935 39.1483C49.8967 39.1483 53.0917 42.3733 53.0917 46.335C53.0917 50.2816 49.8983 53.5066 45.935 53.5066Z" fill="#FFAB2D"/>
									<path d="M44.385 36.5066C45.015 35.8766 45.3983 35.0316 45.3983 34.08C45.3983 32.1916 43.8633 30.655 41.9733 30.655H36.8133V37.52H41.9733C42.91 37.52 43.77 37.12 44.385 36.5066Z" fill="#FFAB2D"/>
								</svg>
								<h2 class="text-black mb-2 font-w600"><?php echo $product_count;?></h2>
								<p class="mb-0 fs-13">
									<svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d2)">
										<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
										</g>
										<defs>
										<filter id="filter0_d2" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
										<feOffset dy="1"/>
										<feGaussianBlur stdDeviation="2"/>
										<feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0"/>
										<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
										<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
										</filter>
										</defs>
									</svg>
									<span class="text-success mr-1"></span>Total Product
								</p>	
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="40" cy="40" r="40" fill="white"/>
									<path d="M40.725 0.00669178C18.6241 -0.393325 0.406678 17.1907 0.00666126 39.275C-0.393355 61.3592 17.1907 79.5933 39.2749 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8092 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17362 57.3257 7.50697 39.4083C7.82365 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8096 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#374C98"/>
									<path d="M40.5283 10.8305C24.4443 10.5471 11.1271 23.3976 10.8438 39.4816C10.5438 55.549 23.3943 68.8662 39.4783 69.1662C55.5623 69.4495 68.8795 56.599 69.1628 40.5317C69.4462 24.4477 56.6123 11.1305 40.5283 10.8305ZM52.5455 56.9324H26.0111L29.2612 38.9483L25.4944 39.7317V36.6649L29.8279 35.7482L32.6447 20.2809H43.2284L40.8283 33.4481L44.5285 32.6647V35.7315L40.2616 36.6149L37.7949 50.2154H54.5122L52.5455 56.9324Z" fill="#374C98"/>
								</svg>
								<h2 class="text-black mb-2 font-w600"><?php echo $order_count;?></h2>
								<p class="mb-0 fs-14">
									<svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d4)">
										<path d="M5 4C5.91797 5.08433 8.89728 8.27228 10.5 10L16.5 7L23.5 16" stroke="#FF2E2E" stroke-width="2" stroke-linecap="round"/>
										</g>
										<defs>
										<filter id="filter0_d4" x="-3.05176e-05" y="0" width="28.5001" height="22.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
										<feOffset dy="1"/>
										<feGaussianBlur stdDeviation="2"/>
										<feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 0.180392 0 0 0 0 0.180392 0 0 0 0.61 0"/>
										<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
										<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
										</filter>
										</defs>
									</svg>
									<span class="text-danger mr-1"></span>Total Order
								</p>	
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-sm-6 m-t35">
						<div class="card card-coin">
							<div class="card-body text-center">
								<svg class="mb-3 currency-icon" width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="40" cy="40" r="40" fill="white"/>
									<path d="M40.725 0.00669178C18.6241 -0.393325 0.406708 17.1907 0.00669178 39.275C-0.393325 61.3592 17.1907 79.5933 39.275 79.9933C61.3592 80.3933 79.5933 62.8093 79.9933 40.7084C80.3933 18.6241 62.8093 0.390041 40.725 0.00669178ZM39.4083 72.493C21.4909 72.1597 7.17365 57.3257 7.507 39.4083C7.82368 21.4909 22.6576 7.17365 40.575 7.49033C58.5091 7.82368 72.8097 22.6576 72.493 40.575C72.1763 58.4924 57.3257 72.8097 39.4083 72.493Z" fill="#FF782C"/>
									<path d="M40.525 10.8238C24.441 10.5405 11.1238 23.391 10.8405 39.475C10.7455 44.5352 11.9605 49.3204 14.1639 53.5139H23.3326V24.8027C23.3326 23.0476 25.7177 22.4893 26.4928 24.0643L40 51.4171L53.5072 24.066C54.2822 22.4893 56.6674 23.0476 56.6674 24.8027V53.5139H65.8077C67.8578 49.6171 69.0779 45.2169 69.1595 40.525C69.4429 24.441 56.609 11.1238 40.525 10.8238Z" fill="#FF782C"/>
									<path d="M53.3339 55.1806V31.943L41.4934 55.919C40.9334 57.0574 39.065 57.0574 38.5049 55.919L26.6661 31.943V55.1806C26.6661 56.1007 25.9211 56.8474 24.9994 56.8474H16.2474C21.4326 64.1327 29.8629 68.9795 39.475 69.1595C49.4704 69.3362 58.3908 64.436 63.786 56.8474H55.0006C54.0789 56.8474 53.3339 56.1007 53.3339 55.1806Z" fill="#FF782C"/>
								</svg>
								<h2 class="text-black mb-2 font-w600"><?php echo $feedback_count;?></h2>
								<p class="mb-0 fs-14">
									<svg width="29" height="22" viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g filter="url(#filter0_d5)">
										<path d="M5 16C5.91797 14.9157 8.89728 11.7277 10.5 10L16.5 13L23.5 4" stroke="#2BC155" stroke-width="2" stroke-linecap="round"/>
										</g>
										<defs>
										<filter id="filter0_d5" x="-3.05176e-05" y="-6.10352e-05" width="28.5001" height="22.0001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
										<feFlood flood-opacity="0" result="BackgroundImageFix"/>
										<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
										<feOffset dy="1"/>
										<feGaussianBlur stdDeviation="2"/>
										<feColorMatrix type="matrix" values="0 0 0 0 0.172549 0 0 0 0 0.72549 0 0 0 0 0.337255 0 0 0 0.61 0"/>
										<feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
										<feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
										</filter>
										</defs>
									</svg>
									<span class="text-success mr-1"></span>Total Feedback
								</p>	
							</div>
						</div>
					</div>
				</div>
				
				
					<div class="col-xl-6 col-xxl-12">
						<div class="row">
							
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header pb-2 d-block d-sm-flex flex-wrap border-0">
										<div class="mb-3">
											<h4 class="fs-20 text-black">Today Latest Product</h4>
											
										</div>
										
									</div>
									<div class="card-body tab-content p-0">
										<div class="tab-pane active show fade" id="monthly">
											<div class="table-responsive">
												<table class="table shadow-hover card-table border-no tbl-btn short-one">
													 <thead>
                                            <tr>
                                                 <th>Order Id</th>
												 <th>Order Date</th>
												  <th>User Id</th>
												  <th>User Name</th>
												  <th>Order Status</th>
												  <th>Payment Status</th>
												   <th>Order details</th>
												  <th>Quantity</th>
												  <th>Amount</th>
												  <th>Action</th>
												  <th>View Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											$date=date('y-m-d');
											$sql="select * from order_master o Join cart c Join user u where o.Cart_Id=c.Cart_Id and o.User_Id=u.User_Id and Order_Date='".$date."'";
											$result=mysqli_query($conn,$sql);
										while($row=mysqli_fetch_array($result))
										{
												$oid=$row['Order_Id'];
												$uid=$row['User_Id'];
												?>
												<tr>
														<td><?php echo $row['Order_Id'];?></td>
														<td><?php echo $row['Order_Date'];?></td>
														<td><?php echo $row['User_Id'];?></td>
														<td><?php echo $row['User_Name'];?></td>
														<td><?php echo $row['Order_Status'];?></td>
														<td><?php echo $row['Payment_Status'];?></td>
														<td><?php echo $row['Order_details'];?></td>
														<td><?php echo $row['Quantity'];?></td>
														<td><?php echo $row['Amount'];?></td>
														<td>
														<?php
															if($row['Order_Status']==0)
															{
																?>
																
														<a href="order_accept.php?id=<?php echo $oid?>&uid=<?php echo $uid?>"
														style="color:18F70D;cursor:pointer"> Accept</a> &nbsp;
														<a href="order_reject.php?id=<?php echo $oid?>&uid=<?php echo $uid?>"
														style="color:red;cursor:pointer"> Reject</a>
														<?php
															}
															else if($row['Order_Status']==1)
															{
																echo "<h6 style='color:18F70D'>ACCEPTED</h6>";
															}
															else if($row['Order_Status']==2)
															{
																echo "<h6 style='color:red'>REJECTED</h6>";
															}
														?>
															</td>
															<td>
														
															<a href="OrderDetail.php?id=<?php echo $oid?>&uid=<?php echo $uid?>"> View Details</a>
															
														</td>
												</tr>
                                           <?php
											}
										?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                               <th>Order Id</th>
												 <th>Order Date</th>
												  <th>User Id</th>
												   <th>User Name</th>
												  <th>Order Status</th>
												  <th>Payment Status</th>
												   <th>Order details</th>
												  <th>Quantity</th>
												  <th>Amount</th>
												  <th>Action</th>
												  <th>View Details</th>
                                            </tr>
                                        </tfoot>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="Weekly">
											<div class="table-responsive">
												<table class="table shadow-hover card-table border-no tbl-btn short-one">
													<tbody>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#71B945"/>
																		<path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg  class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
																<span class="font-w600 text-black">Bitcoin</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$5,553</span>
															</td>
															<td><a class="btn btn-outline-success float-right" href="javascript:void(0);">Completed</a></td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#747474"/>
																		<path d="M22.1318 30.9043L22.1318 30.9043L22.1151 23.9961C22.1151 23.9922 22.1151 23.9887 22.1152 23.9854M22.1318 30.9043L22.6152 23.9909L22.1152 23.99C22.1152 23.9769 22.1157 23.9667 22.116 23.9623L22.1161 23.9608C22.1159 23.9641 22.1154 23.973 22.1152 23.9843C22.1152 23.9847 22.1152 23.985 22.1152 23.9854M22.1318 30.9043C22.1338 31.6982 22.7788 32.3403 23.5728 32.3384C24.3667 32.3365 25.0088 31.6914 25.0069 30.8975L25.0069 30.8975L24.9986 27.4687M22.1318 30.9043L24.9986 27.4687M22.1152 23.9854C22.1176 23.1968 22.7574 22.5545 23.5488 22.5524C23.5504 22.5524 23.5522 22.5523 23.554 22.5523L23.5561 22.5523L23.5732 22.5524L30.4671 22.569L30.4658 23.069L30.4671 22.569C31.2608 22.571 31.903 23.2159 31.9011 24.01C31.8992 24.8039 31.2541 25.446 30.4602 25.4441L30.4602 25.4441L27.0315 25.4358L40.2141 38.6184C40.7755 39.1798 40.7755 40.0899 40.2141 40.6513C39.6527 41.2127 38.7426 41.2127 38.1812 40.6513L24.9986 27.4687M22.1152 23.9854C22.1152 23.9874 22.1152 23.9894 22.1152 23.9914L24.9986 27.4687M23.5541 22.5524C23.5547 22.5524 23.5554 22.5524 23.5561 22.5524L23.5541 22.5524Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.3182 13.6531C12.1139 13.7348 11.8863 13.7348 11.682 13.6531L9.48944 12.7761L12.0001 17.7974L14.5107 12.7761L12.3182 13.6531Z" fill="#DC3CCC"/>
																	<path d="M12.0001 11.9341L15.0156 10.7279L12.0001 5.90308L8.98456 10.7279L12.0001 11.9341Z" fill="#DC3CCC"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0ZM17.0524 11.5263L12.7667 20.0977C12.5551 20.5212 12.04 20.6928 11.6168 20.4812C11.4507 20.3983 11.3162 20.2638 11.2333 20.0977L6.94757 11.5263C6.81443 11.2589 6.8296 10.9416 6.9876 10.6882L11.2733 3.83111C11.5582 3.42984 12.114 3.33515 12.5153 3.62001C12.5972 3.67808 12.6686 3.74923 12.7267 3.83111L17.0121 10.6882C17.1704 10.9416 17.1856 11.2589 17.0524 11.5263Z" fill="#DC3CCC"/>
																</svg>
																<span class="font-w600 text-black">Ethereum</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$5,553</span>
															</td>
															<td>
																<a class="btn btn-outline-light float-right" href="javascript:void(0);">Pending</a>
															</td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#FF5757"/>
																		<path d="M22.1318 30.9043L22.1318 30.9043L22.1151 23.9961C22.1151 23.9922 22.1151 23.9887 22.1152 23.9854M22.1318 30.9043L22.6152 23.9909L22.1152 23.99C22.1152 23.9769 22.1157 23.9667 22.116 23.9623L22.1161 23.9608C22.1159 23.9641 22.1154 23.973 22.1152 23.9843C22.1152 23.9847 22.1152 23.985 22.1152 23.9854M22.1318 30.9043C22.1338 31.6982 22.7788 32.3403 23.5728 32.3384C24.3667 32.3365 25.0088 31.6914 25.0069 30.8975L25.0069 30.8975L24.9986 27.4687M22.1318 30.9043L24.9986 27.4687M22.1152 23.9854C22.1176 23.1968 22.7574 22.5545 23.5488 22.5524C23.5504 22.5524 23.5522 22.5523 23.554 22.5523L23.5561 22.5523L23.5732 22.5524L30.4671 22.569L30.4658 23.069L30.4671 22.569C31.2608 22.571 31.903 23.2159 31.9011 24.01C31.8992 24.8039 31.2541 25.446 30.4602 25.4441L30.4602 25.4441L27.0315 25.4358L40.2141 38.6184C40.7755 39.1798 40.7755 40.0899 40.2141 40.6513C39.6527 41.2127 38.7426 41.2127 38.1812 40.6513L24.9986 27.4687M22.1152 23.9854C22.1152 23.9874 22.1152 23.9894 22.1152 23.9914L24.9986 27.4687M23.5541 22.5524C23.5547 22.5524 23.5554 22.5524 23.5561 22.5524L23.5541 22.5524Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.2161 0.00189099C5.59822 -0.114662 0.118718 5.17136 0.00213245 11.7875C-0.0369579 13.869 0.462987 15.8373 1.36961 17.5623H5.14217V5.75207C5.14217 5.03013 6.12354 4.80045 6.44244 5.44835L12.0001 16.6998L17.5578 5.44903C17.8767 4.80045 18.8581 5.03013 18.8581 5.75207V17.5623H22.619C23.4625 15.9594 23.9645 14.1494 23.9981 12.2194C24.1147 5.60329 18.8341 0.1253 12.2161 0.00189099Z" fill="#FF782C"/>
																	<path d="M17.4865 18.2479V8.6892L12.6146 18.5516C12.3842 19.0199 11.6154 19.0199 11.385 18.5516L6.51376 8.6892V18.2479C6.51376 18.6264 6.20721 18.9335 5.82796 18.9335H2.22685C4.36036 21.9303 7.82911 23.9241 11.7841 23.9981C15.8968 24.0708 19.5672 22.0551 21.7871 18.9335H18.1723C17.793 18.9335 17.4865 18.6264 17.4865 18.2479Z" fill="#FF782C"/>
																</svg>
																<span class="font-w600 text-black">Monero</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">-$912</span>
															</td>
															<td>
																<a class="btn btn-outline-danger float-right" href="javascript:void(0);">Canceled</a>
															</td>
														</tr>
														<tr>
															<td>
															<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#71B945"/>
																		<path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM16.2857 18.0001H9.42866C8.9552 18.0001 8.57147 17.6164 8.57147 17.1429C8.57147 17.1024 8.57434 17.0618 8.5801 17.0216L9.22515 12.5054L7.92222 12.8313C7.85421 12.8486 7.78437 12.8572 7.71427 12.8572C7.24081 12.8567 6.85759 12.4727 6.85785 11.9992C6.85838 11.6063 7.12571 11.2642 7.50683 11.1684L9.48674 10.6735L10.2942 5.0213C10.3612 4.55254 10.7954 4.22714 11.2642 4.2941C11.7329 4.36107 12.0583 4.79529 11.9914 5.26404L11.2825 10.2247L14.3636 9.4543C14.8222 9.33737 15.2886 9.61439 15.4053 10.0729C15.5222 10.5315 15.2452 10.9979 14.7866 11.1148C14.784 11.1153 14.7814 11.1161 14.7788 11.1166L11.0204 12.0562L10.4164 16.2857H16.2857C16.7592 16.2857 17.1429 16.6695 17.1429 17.1429C17.1429 17.6161 16.7592 18.0001 16.2857 18.0001Z" fill="#5F5F5F"/>
																</svg>
																<span class="font-w600 text-black">Litecoin</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$7,762</span>
															</td>
															<td>
																<a class="btn btn-outline-success float-right" href="javascript:void(0);">Completed</a>
															</td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#71B945"/>
																		<path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg  class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
																<span class="font-w600 text-black">Bitcoin</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$5,553</span>
															</td>
															<td>
																<a class="btn btn-outline-success float-right" href="javascript:void(0);">Completed</a>
															</td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#FF5757"/>
																		<path d="M22.1318 30.9043L22.1318 30.9043L22.1151 23.9961C22.1151 23.9922 22.1151 23.9887 22.1152 23.9854M22.1318 30.9043L22.6152 23.9909L22.1152 23.99C22.1152 23.9769 22.1157 23.9667 22.116 23.9623L22.1161 23.9608C22.1159 23.9641 22.1154 23.973 22.1152 23.9843C22.1152 23.9847 22.1152 23.985 22.1152 23.9854M22.1318 30.9043C22.1338 31.6982 22.7788 32.3403 23.5728 32.3384C24.3667 32.3365 25.0088 31.6914 25.0069 30.8975L25.0069 30.8975L24.9986 27.4687M22.1318 30.9043L24.9986 27.4687M22.1152 23.9854C22.1176 23.1968 22.7574 22.5545 23.5488 22.5524C23.5504 22.5524 23.5522 22.5523 23.554 22.5523L23.5561 22.5523L23.5732 22.5524L30.4671 22.569L30.4658 23.069L30.4671 22.569C31.2608 22.571 31.903 23.2159 31.9011 24.01C31.8992 24.8039 31.2541 25.446 30.4602 25.4441L30.4602 25.4441L27.0315 25.4358L40.2141 38.6184C40.7755 39.1798 40.7755 40.0899 40.2141 40.6513C39.6527 41.2127 38.7426 41.2127 38.1812 40.6513L24.9986 27.4687M22.1152 23.9854C22.1152 23.9874 22.1152 23.9894 22.1152 23.9914L24.9986 27.4687M23.5541 22.5524C23.5547 22.5524 23.5554 22.5524 23.5561 22.5524L23.5541 22.5524Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.2161 0.00189099C5.59822 -0.114662 0.118718 5.17136 0.00213245 11.7875C-0.0369579 13.869 0.462987 15.8373 1.36961 17.5623H5.14217V5.75207C5.14217 5.03013 6.12354 4.80045 6.44244 5.44835L12.0001 16.6998L17.5578 5.44903C17.8767 4.80045 18.8581 5.03013 18.8581 5.75207V17.5623H22.619C23.4625 15.9594 23.9645 14.1494 23.9981 12.2194C24.1147 5.60329 18.8341 0.1253 12.2161 0.00189099Z" fill="#FF782C"/>
																	<path d="M17.4865 18.2479V8.6892L12.6146 18.5516C12.3842 19.0199 11.6154 19.0199 11.385 18.5516L6.51376 8.6892V18.2479C6.51376 18.6264 6.20721 18.9335 5.82796 18.9335H2.22685C4.36036 21.9303 7.82911 23.9241 11.7841 23.9981C15.8968 24.0708 19.5672 22.0551 21.7871 18.9335H18.1723C17.793 18.9335 17.4865 18.6264 17.4865 18.2479Z" fill="#FF782C"/>
																</svg>
																<span class="font-w600 text-black">Monero</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">-$912</span>
															</td>
															<td>
																<a class="btn btn-outline-danger float-right" href="javascript:void(0);">Canceled</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane fade" id="Today">
											<div class="table-responsive">
												<table class="table shadow-hover card-table border-no tbl-btn short-one">
													<tbody>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#71B945"/>
																		<path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg  class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
																<span class="font-w600 text-black">Bitcoin</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$5,553</span>
															</td>
															<td><a class="btn btn-outline-success float-right" href="javascript:void(0);">Completed</a></td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#747474"/>
																		<path d="M22.1318 30.9043L22.1318 30.9043L22.1151 23.9961C22.1151 23.9922 22.1151 23.9887 22.1152 23.9854M22.1318 30.9043L22.6152 23.9909L22.1152 23.99C22.1152 23.9769 22.1157 23.9667 22.116 23.9623L22.1161 23.9608C22.1159 23.9641 22.1154 23.973 22.1152 23.9843C22.1152 23.9847 22.1152 23.985 22.1152 23.9854M22.1318 30.9043C22.1338 31.6982 22.7788 32.3403 23.5728 32.3384C24.3667 32.3365 25.0088 31.6914 25.0069 30.8975L25.0069 30.8975L24.9986 27.4687M22.1318 30.9043L24.9986 27.4687M22.1152 23.9854C22.1176 23.1968 22.7574 22.5545 23.5488 22.5524C23.5504 22.5524 23.5522 22.5523 23.554 22.5523L23.5561 22.5523L23.5732 22.5524L30.4671 22.569L30.4658 23.069L30.4671 22.569C31.2608 22.571 31.903 23.2159 31.9011 24.01C31.8992 24.8039 31.2541 25.446 30.4602 25.4441L30.4602 25.4441L27.0315 25.4358L40.2141 38.6184C40.7755 39.1798 40.7755 40.0899 40.2141 40.6513C39.6527 41.2127 38.7426 41.2127 38.1812 40.6513L24.9986 27.4687M22.1152 23.9854C22.1152 23.9874 22.1152 23.9894 22.1152 23.9914L24.9986 27.4687M23.5541 22.5524C23.5547 22.5524 23.5554 22.5524 23.5561 22.5524L23.5541 22.5524Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.3182 13.6531C12.1139 13.7348 11.8863 13.7348 11.682 13.6531L9.48944 12.7761L12.0001 17.7974L14.5107 12.7761L12.3182 13.6531Z" fill="#DC3CCC"/>
																	<path d="M12.0001 11.9341L15.0156 10.7279L12.0001 5.90308L8.98456 10.7279L12.0001 11.9341Z" fill="#DC3CCC"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9927 5.37574 18.6243 0.00732425 12 0ZM17.0524 11.5263L12.7667 20.0977C12.5551 20.5212 12.04 20.6928 11.6168 20.4812C11.4507 20.3983 11.3162 20.2638 11.2333 20.0977L6.94757 11.5263C6.81443 11.2589 6.8296 10.9416 6.9876 10.6882L11.2733 3.83111C11.5582 3.42984 12.114 3.33515 12.5153 3.62001C12.5972 3.67808 12.6686 3.74923 12.7267 3.83111L17.0121 10.6882C17.1704 10.9416 17.1856 11.2589 17.0524 11.5263Z" fill="#DC3CCC"/>
																</svg>
																<span class="font-w600 text-black">Ethereum</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$5,553</span>
															</td>
															<td>
																<a class="btn btn-outline-light float-right" href="javascript:void(0);">Pending</a>
															</td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#FF5757"/>
																		<path d="M22.1318 30.9043L22.1318 30.9043L22.1151 23.9961C22.1151 23.9922 22.1151 23.9887 22.1152 23.9854M22.1318 30.9043L22.6152 23.9909L22.1152 23.99C22.1152 23.9769 22.1157 23.9667 22.116 23.9623L22.1161 23.9608C22.1159 23.9641 22.1154 23.973 22.1152 23.9843C22.1152 23.9847 22.1152 23.985 22.1152 23.9854M22.1318 30.9043C22.1338 31.6982 22.7788 32.3403 23.5728 32.3384C24.3667 32.3365 25.0088 31.6914 25.0069 30.8975L25.0069 30.8975L24.9986 27.4687M22.1318 30.9043L24.9986 27.4687M22.1152 23.9854C22.1176 23.1968 22.7574 22.5545 23.5488 22.5524C23.5504 22.5524 23.5522 22.5523 23.554 22.5523L23.5561 22.5523L23.5732 22.5524L30.4671 22.569L30.4658 23.069L30.4671 22.569C31.2608 22.571 31.903 23.2159 31.9011 24.01C31.8992 24.8039 31.2541 25.446 30.4602 25.4441L30.4602 25.4441L27.0315 25.4358L40.2141 38.6184C40.7755 39.1798 40.7755 40.0899 40.2141 40.6513C39.6527 41.2127 38.7426 41.2127 38.1812 40.6513L24.9986 27.4687M22.1152 23.9854C22.1152 23.9874 22.1152 23.9894 22.1152 23.9914L24.9986 27.4687M23.5541 22.5524C23.5547 22.5524 23.5554 22.5524 23.5561 22.5524L23.5541 22.5524Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.2161 0.00189099C5.59822 -0.114662 0.118718 5.17136 0.00213245 11.7875C-0.0369579 13.869 0.462987 15.8373 1.36961 17.5623H5.14217V5.75207C5.14217 5.03013 6.12354 4.80045 6.44244 5.44835L12.0001 16.6998L17.5578 5.44903C17.8767 4.80045 18.8581 5.03013 18.8581 5.75207V17.5623H22.619C23.4625 15.9594 23.9645 14.1494 23.9981 12.2194C24.1147 5.60329 18.8341 0.1253 12.2161 0.00189099Z" fill="#FF782C"/>
																	<path d="M17.4865 18.2479V8.6892L12.6146 18.5516C12.3842 19.0199 11.6154 19.0199 11.385 18.5516L6.51376 8.6892V18.2479C6.51376 18.6264 6.20721 18.9335 5.82796 18.9335H2.22685C4.36036 21.9303 7.82911 23.9241 11.7841 23.9981C15.8968 24.0708 19.5672 22.0551 21.7871 18.9335H18.1723C17.793 18.9335 17.4865 18.6264 17.4865 18.2479Z" fill="#FF782C"/>
																</svg>
																<span class="font-w600 text-black">Monero</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">-$912</span>
															</td>
															<td>
																<a class="btn btn-outline-danger float-right" href="javascript:void(0);">Canceled</a>
															</td>
														</tr>
														<tr>
															<td>
															<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#71B945"/>
																		<path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM16.2857 18.0001H9.42866C8.9552 18.0001 8.57147 17.6164 8.57147 17.1429C8.57147 17.1024 8.57434 17.0618 8.5801 17.0216L9.22515 12.5054L7.92222 12.8313C7.85421 12.8486 7.78437 12.8572 7.71427 12.8572C7.24081 12.8567 6.85759 12.4727 6.85785 11.9992C6.85838 11.6063 7.12571 11.2642 7.50683 11.1684L9.48674 10.6735L10.2942 5.0213C10.3612 4.55254 10.7954 4.22714 11.2642 4.2941C11.7329 4.36107 12.0583 4.79529 11.9914 5.26404L11.2825 10.2247L14.3636 9.4543C14.8222 9.33737 15.2886 9.61439 15.4053 10.0729C15.5222 10.5315 15.2452 10.9979 14.7866 11.1148C14.784 11.1153 14.7814 11.1161 14.7788 11.1166L11.0204 12.0562L10.4164 16.2857H16.2857C16.7592 16.2857 17.1429 16.6695 17.1429 17.1429C17.1429 17.6161 16.7592 18.0001 16.2857 18.0001Z" fill="#5F5F5F"/>
																</svg>
																<span class="font-w600 text-black">Litecoin</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$7,762</span>
															</td>
															<td>
																<a class="btn btn-outline-success float-right" href="javascript:void(0);">Completed</a>
															</td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#71B945"/>
																		<path d="M40.6186 32.7207L40.6186 32.7207L40.6353 39.6289C40.6354 39.6328 40.6354 39.6363 40.6353 39.6396M40.6186 32.7207L40.1353 39.6341L40.6353 39.635C40.6353 39.6481 40.6347 39.6583 40.6345 39.6627L40.6344 39.6642C40.6346 39.6609 40.6351 39.652 40.6353 39.6407C40.6353 39.6403 40.6353 39.64 40.6353 39.6396M40.6186 32.7207C40.6167 31.9268 39.9717 31.2847 39.1777 31.2866C38.3838 31.2885 37.7417 31.9336 37.7436 32.7275L37.7436 32.7275L37.7519 36.1563M40.6186 32.7207L37.7519 36.1563M40.6353 39.6396C40.6329 40.4282 39.9931 41.0705 39.2017 41.0726C39.2 41.0726 39.1983 41.0727 39.1965 41.0727L39.1944 41.0727L39.1773 41.0726L32.2834 41.056L32.2846 40.556L32.2834 41.056C31.4897 41.054 30.8474 40.4091 30.8494 39.615C30.8513 38.8211 31.4964 38.179 32.2903 38.1809L32.2903 38.1809L35.719 38.1892L22.5364 25.0066C21.975 24.4452 21.975 23.5351 22.5364 22.9737C23.0978 22.4123 24.0079 22.4123 24.5693 22.9737L37.7519 36.1563M40.6353 39.6396C40.6353 39.6376 40.6353 39.6356 40.6353 39.6336L37.7519 36.1563M39.1964 41.0726C39.1957 41.0726 39.1951 41.0726 39.1944 41.0726L39.1964 41.0726Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg  class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M16 9.50011C15.9992 8.67201 15.216 8.00092 14.2501 8H9V11H14.2501C15.216 10.9993 15.9992 10.328 16 9.50011Z" fill="#FFAB2D"/>
																	<path d="M9 16H14.2501C15.2165 16 16 15.3285 16 14.5001C16 13.6715 15.2165 13 14.2501 13H9V16Z" fill="#FFAB2D"/>
																	<path d="M12 0C5.3726 0 0 5.3726 0 12C0 18.6274 5.3726 24 12 24C18.6274 24 24 18.6274 24 12C23.9924 5.37574 18.6243 0.00758581 12 0ZM18.0001 14.5713C17.9978 16.4641 16.4641 17.9978 14.5716 17.9999V18.8571C14.5716 19.3305 14.1876 19.7143 13.7144 19.7143C13.2409 19.7143 12.8572 19.3305 12.8572 18.8571V17.9999H11.1431V18.8571C11.1431 19.3305 10.7591 19.7143 10.2859 19.7143C9.8124 19.7143 9.42866 19.3305 9.42866 18.8571V17.9999H6.85733C6.38387 17.9999 6.00013 17.6161 6.00013 17.1429C6.00013 16.6695 6.38387 16.2857 6.85733 16.2857H7.71427V7.71427H6.85733C6.38387 7.71427 6.00013 7.33053 6.00013 6.85707C6.00013 6.38361 6.38387 5.99987 6.85733 5.99987H9.42866V5.14293C9.42866 4.66947 9.8124 4.28573 10.2859 4.28573C10.7593 4.28573 11.1431 4.66947 11.1431 5.14293V5.99987H12.8572V5.14293C12.8572 4.66947 13.2409 4.28573 13.7144 4.28573C14.1879 4.28573 14.5716 4.66947 14.5716 5.14293V5.99987C16.4571 5.99202 17.992 7.5139 18.0001 9.39937C18.0043 10.3978 17.5714 11.3481 16.8152 12C17.5643 12.6445 17.9967 13.5828 18.0001 14.5713Z" fill="#FFAB2D"/>
																</svg>
																<span class="font-w600 text-black">Bitcoin</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">+$5,553</span>
															</td>
															<td>
																<a class="btn btn-outline-success float-right" href="javascript:void(0);">Completed</a>
															</td>
														</tr>
														<tr>
															<td>
																<span>
																	<svg width="50" height="50" viewBox="0 0 63 63" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect width="63" height="63" rx="14" fill="#FF5757"/>
																		<path d="M22.1318 30.9043L22.1318 30.9043L22.1151 23.9961C22.1151 23.9922 22.1151 23.9887 22.1152 23.9854M22.1318 30.9043L22.6152 23.9909L22.1152 23.99C22.1152 23.9769 22.1157 23.9667 22.116 23.9623L22.1161 23.9608C22.1159 23.9641 22.1154 23.973 22.1152 23.9843C22.1152 23.9847 22.1152 23.985 22.1152 23.9854M22.1318 30.9043C22.1338 31.6982 22.7788 32.3403 23.5728 32.3384C24.3667 32.3365 25.0088 31.6914 25.0069 30.8975L25.0069 30.8975L24.9986 27.4687M22.1318 30.9043L24.9986 27.4687M22.1152 23.9854C22.1176 23.1968 22.7574 22.5545 23.5488 22.5524C23.5504 22.5524 23.5522 22.5523 23.554 22.5523L23.5561 22.5523L23.5732 22.5524L30.4671 22.569L30.4658 23.069L30.4671 22.569C31.2608 22.571 31.903 23.2159 31.9011 24.01C31.8992 24.8039 31.2541 25.446 30.4602 25.4441L30.4602 25.4441L27.0315 25.4358L40.2141 38.6184C40.7755 39.1798 40.7755 40.0899 40.2141 40.6513C39.6527 41.2127 38.7426 41.2127 38.1812 40.6513L24.9986 27.4687M22.1152 23.9854C22.1152 23.9874 22.1152 23.9894 22.1152 23.9914L24.9986 27.4687M23.5541 22.5524C23.5547 22.5524 23.5554 22.5524 23.5561 22.5524L23.5541 22.5524Z" fill="white" stroke="white"/>
																	</svg>
																</span>
															</td>
															<td class="wspace-no">
																<svg class="mr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M12.2161 0.00189099C5.59822 -0.114662 0.118718 5.17136 0.00213245 11.7875C-0.0369579 13.869 0.462987 15.8373 1.36961 17.5623H5.14217V5.75207C5.14217 5.03013 6.12354 4.80045 6.44244 5.44835L12.0001 16.6998L17.5578 5.44903C17.8767 4.80045 18.8581 5.03013 18.8581 5.75207V17.5623H22.619C23.4625 15.9594 23.9645 14.1494 23.9981 12.2194C24.1147 5.60329 18.8341 0.1253 12.2161 0.00189099Z" fill="#FF782C"/>
																	<path d="M17.4865 18.2479V8.6892L12.6146 18.5516C12.3842 19.0199 11.6154 19.0199 11.385 18.5516L6.51376 8.6892V18.2479C6.51376 18.6264 6.20721 18.9335 5.82796 18.9335H2.22685C4.36036 21.9303 7.82911 23.9241 11.7841 23.9981C15.8968 24.0708 19.5672 22.0551 21.7871 18.9335H18.1723C17.793 18.9335 17.4865 18.6264 17.4865 18.2479Z" fill="#FF782C"/>
																</svg>
																<span class="font-w600 text-black">Monero</span>
															</td>
															<td>
																<span class="text-black">06:24:45 AM</span>
															</td>
															<td>
																<span class="font-w600 text-black">-$912</span>
															</td>
															<td>
																<a class="btn btn-outline-danger float-right" href="javascript:void(0);">Canceled</a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 p-0 caret mt-1">
										<a href="coin-details.html" class="btn-link"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
       <?php include('footer.php');?>
        <!--**********************************
            Footer end
        ***********************************-->
		
		
		
		
		
		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="js/dashboard/dashboard-1.js"></script>
	
	<script src="vendor/owl-carousel/owl.carousel.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/deznav-init.js"></script>
    <script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

</body>

<!-- Mirrored from zenix.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Oct 2021 05:51:50 GMT -->
</html>