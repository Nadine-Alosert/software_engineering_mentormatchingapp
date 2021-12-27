<?php
$pageTitle="Mentee";
  ob_start() ?>
<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
										
						<!-- Sidebar -->
						<div class="profile-sidebar">
							<div class="user-widget">
								<img src="profile.png" alt="" width="160" height="110">
								
								<div class="user-info-cont">
									<h4 class="usr-name">Jane Smith</h4>
									<p class="mentor-type">Computer Science (B.S) </p>
								</div>
							</div>
							<div class="custom-sidebar-nav">
								<ul>
									<li><a href="" class="active"><i class="fa fa-home"></i>Dashboard </a></li>
									<li><a href="index.php?page=search"><i class="fa fa-search"></i>Search Mentor </a></li>
									<li><a href="index.php?page=booking"><i class="fa fa-history"></i>Bookings </a></li>
									<li><a href="index.php?page=chatee"><i class="fa fa-comments"></i>Messages</a></li>
									<li><a href="index.php?page=menteeprofile"><i class="fa fa-user"></i>Profile </a></li>
									<li><a href="index.php?page=logout"><i class="fa fa-sign-out"></i>Logout </a></li>
								</ul> 
							</div> 
						</div>
						<!-- /Sidebar -->

						</div>
						
						<div class="col-md-7 col-lg-8 col-xl-9">
						
							<div class="row">
								<div class="col-md-12 col-lg-4 dash-board-list blue">
									<div class="dash-widget">
										<div class="circle-bar">
											<div class="icon-col">
												<i class="fa fa-calendar"></i>
											</div>
										</div>
										<div class="dash-widget-info">
											<h3>13</h3>
											<h6>Appointments</h6>															
										</div>
									</div>
								</div>
								
								<div class="col-md-12 col-lg-4 dash-board-list green">
									<div class="dash-widget">
										<div class="circle-bar">
											<div class="icon-col">
												<i class="fa  la-star"></i>
											</div>
										</div>
										<div class="dash-widget-info">
											<h3>2</h3>
											<h6>Pending</h6>															
										</div>
									</div>
								</div>
								
								
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<h4 class="mb-4">Mentor Lists</h4>
									
									<div class="card card-table">
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-hover table-center mb-0">
													<thead>
														<tr>
															<th>BASIC INFO</th>
															<th >CREATED DATE</th>
															<th class="text-center">STATUS</th>
															
														</tr>
													</thead>
													<tbody>
														  <tr>
															  <td>
																  <h5 class="table-avatar">
																	<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
																	<a href="">Tyrone Roberts <span>(tyroneroberts@hotmail.com)</span></a>

																	  </h5>
																	  </td>
															  <td>09 April 2021</td>
															  <td class="text-center"><span class="pending">PENDING</span></td>
														  </tr>
														  <tr>
															<td>
																<h5 class="table-avatar">
																	<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
																	<a href="">Mary Moe <span>(MaryMoe@hotmail.com)</span></a>
																</h5>
															</td>
															<td>11 October 2021</td>
															<td class="text-center"><span class="accept">ACCEPTED</span></td>
														  </tr>
														  <tr>
															<td>
																<h5 class="table-avatar">
																	<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
																	<a href="">Johnathon Doe <span>(JohnDoe@hotmail.com)</span></a>
																</h5>
															 </td>
															<td>22 May 2021</td>
															<td class="text-center"><span class="accept">ACCEPTED</span></td>

														  </tr>
														  <tr>
															  <td>
																  <h5 class="table-avatar">
																	<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
																	<a href="">Rick John <span>(rickjohn@hotmail.com)</span></a>

																	  </h5>
																	  </td>
															  <td>15 June 2021</td>
															  <td class="text-center"><span class="pending">PENDING</span></td>
														  </tr>
														<tr>
															  <td>
																  <h5 class="table-avatar">
																	<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
																	<a href="">Stacy Adam<span>(stacyadam@hotmail.com)</span></a>

																	  </h5>
																	  </td>
															  <td>09 April 2021</td>
															   <td class="text-center"><span class="reject">REJECTED</span></td>
														  </tr>
														
		
													</tbody>
												</table>		
											</div>
										</div>
									</div>
									   
								</div>
							</div>

						</div>
					</div>

				</div>

			</div>	
<?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>
