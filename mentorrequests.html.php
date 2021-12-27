<?php
$pageTitle="Mentor requests";
  ob_start() ?>
    <div class="row">
					<div class="col-md-12">
						<h4 class="mb-4">MENTOR REQUESTS</h4>
						<div class="card card-table">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>BASIC INFO</th>
												<th >CREATED DATE</th>
												<th class="text-center">ACCEPT/REJECT</th>
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
												<td><a class="text-center btn btn-success"><span class="pending">x</span></a><a class="text-center btn btn-danger"><span class="pending">x</span></a></td>
											</tr>
											<tr>
												<td>
													<h5 class="table-avatar">
														<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
														<a href="">Mary Moe <span>(MaryMoe@hotmail.com)</span></a>
													</h5>
												</td>
												<td>11 October 2021</td>
												<td><a class="text-center btn btn-success"><span class="pending">x</span></a><a class="text-center btn btn-danger"><span class="pending">x</span></a></td>
												</tr>
												<tr>
													<td>
														<h5 class="table-avatar">
															<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
															<a href="">Johnathon Doe <span>(JohnDoe@hotmail.com)</span></a>
														</h5>
													</td>
													<td>22 May 2021</td>
													<td><a class="text-center btn btn-success"><span class="pending">x</span></a><a class="text-center btn btn-danger"><span class="pending">x</span></a></td>
												</tr>
												<tr>
													<td>
														<h5 class="table-avatar">
														<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
														<a href="">Rick John <span>(rickjohn@hotmail.com)</span></a>

															</h5>
															</td>
													<td>15 June 2021</td>
													<td><a class="text-center btn btn-success"><span class="pending">x</span></a><a class="text-center btn btn-danger"><span class="pending">x</span></a></td>
												</tr>
											<tr>
												<td>
													<h5 class="table-avatar">
													<img  src="templates/assets/profile.png" width="50px"  alt="User Image">
													<a href="">Stacy Adam<span>(stacyadam@hotmail.com)</span></a>

														</h5>
														</td>
												<td>09 April 2021</td>
												<td><a class="text-center btn btn-success"><span class="pending">x</span></a><a class="text-center btn btn-danger"><span class="pending">x</span></a></td>
											</tr>
										</tbody>
									</table>		
								</div>
							</div>
						</div>
					</div>
				</div>

    <?php

$content = ob_get_clean();

include "templates/layout.html.php";
?>
