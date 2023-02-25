<div class="blog_1">
	<!-- Contact Area section -->
	<section class="contact-area-02 blog-area">
		<div class="container">
			<div class="row">

				<div class="col-sm-7 contact-form">
					<div class="row">
						<div class="col-sm-12 contact-title-btm">
							<h2>Feel Free to Fill this Feedback Form</h2>
							<p class="content-sub_p">Welcome to our Website. We are glad to
								have you around.</p>
						</div>
					</div>
					<div class="input-contact-form">


						<div id="contact">
							<div id="message"></div>
							<form onsubmit="return feedbacks();">
								<div class="row">
									<div class="row">
										<div class="col-sm-6">
											<label>Feedback Type<span style="color: red">*</span></label>
											<div class="form-group">
												<select class="form-control" name="name" id="feedback_type">
													<option>--Feedback Type--</option>
													<option value="General">General</option>
													<option value="Administrive">Administrive</option>
													<option value="Acadmic">Acadmic</option>
													<option value="Examination">Examination</option>
													<option value="Web site Related">Web site Related</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6">
											<label>First Name<span style="color: red">*</span></label>
											<div class="form-group">
												<input type="text" class="form-control"
													placeholder="First Name*" name="name" id="fname">
											</div>
										</div>
										<div class="col-sm-6">
											<label>Last Name<span style="color: red">*</span></label>
											<div class="form-group">
												<input type="text" class="form-control"
													placeholder="Last Name*" name="name" id="lname">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-sm-6">
											<label>Email ID<span style="color: red">*</span></label>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="Email"
													name="email" id="email">
											</div>
										</div>
										<div class="col-sm-6">
											<label>Contact Number<span style="color: red">*</span></label>
											<div class="form-group">
												<input type="text" class="form-control"
													placeholder="Contact Number*" name="name"
													id="contact_number">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label>Address<span style="color: red">*</span></label>
											<div class="form-group">
												<textarea class="form-control" rows="6"
													placeholder="Address" name="comments" id="address"></textarea>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12">
											<label>Feedback<span style="color: red">*</span></label>
											<div class="form-group">
												<textarea class="form-control" rows="6"
													placeholder="Feedback" name="comments" id="feedback"></textarea>
											</div>
										</div>
									</div>
									<div class="col-sm-12">
										<div class="full-width">
											<button class="btn btn-primary" type="submit"
												style="background-color: gold; color: black" name="submit">Submit</button>
										</div>
									</div>
								</div>
							</form>
						</div>


					</div>
				</div>
				
				<div class="col-sm-4 col-sm-offset-1">
					<div class="">
						<div class="blog_side-right">
							<div class="sidebar-content">
								<div class="row">
									<div class="col-sm-12">
										<div class="categories-item">
											<h3>Quick Links</h3>
											<ul class="list-unstyled">
												<li><a href="<?php echo base_url();?>/college/contact"><i
														class="fa fa-angle-right"></i>Contact Us</a></li>
												<li><a
													href="<?php echo base_url();?>/college/alumni"><i
														class="fa fa-angle-right"></i>Alumni</a></li>
												<li><a
													href="<?php echo base_url();?>/college/feedback"><i
														class="fa fa-angle-right"></i>Feedback</a></li>
												<li><a
													href="<?php echo base_url();?>/about/message/chairman"><i
														class="fa fa-angle-right"></i>Chairman's Message</a></li>
												<li><a
													href="<?php echo base_url();?>/about/message/principal"><i
														class="fa fa-angle-right"></i>Principal's Message</a></li>
												<li><a href="<?php echo base_url();?>/about/features"><i
														class="fa fa-angle-right"></i>NE Society Features</a></li>
											</ul>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-sm-12">
										<div class="social-icon">
											<h3>Follow us</h3>
											<div class="row">
												<div class="col-sm-12">
													<ul class="list-unstyled">
														<li><a href="#" class="rss"><i class="fa fa-rss"></i>rss
																feed</a></li>
														<li><a href="#" class="twitter"><i class="fa fa-twitter"></i>Follow
																us</a></li>
														<li><a href="#" class="facebook"><i class="fa fa-facebook"></i>like
																us</a></li>
														<li><a href="#" class="pinterest"><i
																class="fa fa-pinterest"></i>follow us</a></li>
														<li><a href="#" class="instagram"><i
																class="fa fa-instagram"></i>follow us</a></li>
														<li><a href="#" class="google"><i
																class="fa fa-google-plus"></i>plus 1 us</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-12 recent-post-01">
										<h3>Latest Events</h3>
										<div class="row">
											<div class="col-sm-12 recent-single">
												<div class="recent-content-item">
													<div class="img-box">
														<a href="#"><img
															src="<?php echo base_url(); ?>/resources/images/blog/recent-01.jpg"
															alt=""></a>
													</div>
													<div class="recent-text pull-right">
														<a href="#">COVID-19 Safty Awareness Live Broadcast...</a>
														<p>
															22Aug, 2020 <span class="content"><i
																class="fa fa-comments"></i>12</span>
														</p>
													</div>
												</div>
											</div>
											<!-- /.recent-single-item -->

										</div>
									</div>

									<div class="col-sm-12 recent-work">
										<h3>Recent Posts</h3>
										<div class="blog-img-wrapper owl-carousel owl-theme"
											id="bolg-carousel-01" style="opacity: 1; display: block;">
											<div class="owl-wrapper-outer">
												<div class="owl-wrapper"
													style="width: 2160px; left: 0px; display: block;">
													<div class="owl-item" style="width: 360px;">
														<div class="item">
															<div class="row-padding-bottom">
																<img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-01.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-02.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-03.jpg"
																	alt="" class="img-responsive">
															</div>
															<div class="row-padding-bottom">
																<img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-04.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-05.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-06.jpg"
																	alt="" class="img-responsive">
															</div>
														</div>
													</div>
													<div class="owl-item" style="width: 360px;">
														<div class="item">
															<div class="row-padding-bottom">
																<img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-01.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-02.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-03.jpg"
																	alt="" class="img-responsive">
															</div>
															<div class="row-padding-bottom">
																<img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-04.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-05.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-06.jpg"
																	alt="" class="img-responsive">
															</div>
														</div>
													</div>
													<div class="owl-item" style="width: 360px;">
														<div class="item">
															<div class="row-padding-bottom">
																<img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-01.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-02.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-03.jpg"
																	alt="" class="img-responsive">
															</div>
															<div class="row-padding-bottom">
																<img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-04.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-05.jpg"
																	alt="" class="img-responsive"> <img
																	src="<?php echo base_url(); ?>/resources/images/blog/recent-work-06.jpg"
																	alt="" class="img-responsive">
															</div>
														</div>
													</div>
												</div>
											</div>




											<div class="owl-controls clickable">
												<div class="owl-buttons">
													<div class="owl-prev">
														<i class="fa fa-angle-left"></i>
													</div>
													<div class="owl-next">
														<i class="fa fa-angle-right"></i>
													</div>
												</div>
											</div>
										</div>
									</div>





								</div>
							</div>

						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- ./ End Contact Area section -->


	<script type="text/javascript">

function feedbacks(){

	alert('submitting');
	event.preventDefault();

	$("#ajax").css("visibility", "visible");
	var fname = $("#fname").val();
	var lname = $("#lname").val();
	var email = $("#email").val();
	var contact_number = $("#contact_number").val();
	var address = $("#address").val();
	var feedback_type = $("#feedback_type").val();
	var feedback = $("#feedback").val();

	$.post("http://localhost/dbj/public/college/feedback",{	
		fname:fname,
		lname:lname,
		email:email,
		contact_number:contact_number,
		address:address,
		feedback_type:feedback_type,
		feedback:feedback,
		},function(data, status){				  
				  try {
					  var res=JSON.parse(data);
					  } catch (e) {					  
					  }					  
				  if(res["status"]){
					  alert(" success");
					  Swal.fire(
							  'Thank You!',
							  res["message"],
							  'success'
							);
					  $("#ms").css("display", "block");
					  $("#mf").css("display", "none");
					  $("#ajax").css("visibility", "hidden");
					  document.getElementById('cf').reset();
				  }else{
					  $("#mf").css("display", "block");
					  $("#ms").css("display", "none");
					  $("#ajax").css("visibility", "hidden");
				  }
			  });
	
	return false;
}

</script>
</div>