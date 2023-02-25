<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">ENROLL NOW</h3>
			<ol class="breadcrumb">
				<li><a href="../../home/index">Home</a></li>
				<li><a href="../../services/all">Services</a></li>
				<li class="active">training</li>
			</ol>
		</div>
	</div>
</div>
<!-- Page header End -->

<!-- Main wrapper start -->
<div class="elh-main-wrap">

	<!-- Blog Style 3 -->
	<div class="elh-section elh-section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="elh-post-single">
						<article class="elh-post style-4">
							<div class="elh-post-thumb">
								<img class="img-fluid"
									src="../../resources/images/blog/large-1.jpg" alt="...">
							</div>
							<h4 style="font-size: 18px; margin-top: 20px; line-height: 40px">
								Upskill yourself with one of the most demanding Quality
								Management skills<br />
							</h4>


						</article>





						<div class="elh-section elh-section-padding"
							style="margin-top: -30px;">
							<div class="container">
								<div class="row">
									<input type="hidden" id="pageid" value="3">
									<div class="col-lg-12">
										<div class="quick-contact">
											<h3>Enroll Training!</h3>
											<div class="col-lg-12" style="text-align: center;">
												<div class="col-lg-2"></div>
												<div class="col-lg-12" id="banner"
													style="padding: 10px; background: linear-gradient(-45deg, #981c3e, #f13236); margin-bottom: 60px; font-size: 16px; color: #fff">
													
												</div>
												<div class="col-lg-2"></div>
											</div>
											<p style="margin-top: -20px">Please fill the details. We will
												get back to you very soon.</p>
											<h5 style="color: red">Course: <?php echo $course;?></h5>
											<br />
											<form id="ef" onsubmit="return enrollment()"
												style="text-align: left;">
												<div class="row">
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Name (First &
															Last Name):</label> <input type="text" id="name"
															name="name" placeholder="Name *" required>
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Email Address:</label>
														<input type="email" id="email" name="email"
															placeholder="Email *" required>
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Phone Number:</label>
														<input type="tel" id="phone" name="phone"
															pattern="[6789][0-9]{9}" placeholder="Phone"
															required="required">
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Training :</label>
														<input type="text" id="course" name="course"
															value="<?php echo $course;?>" readonly="readonly"
															placeholder="Course Name" required>
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Orgnization:</label>
														<input type="text" id="orgnization" name="orgnization"
															placeholder="organization">
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Profession</label>
														<input type="text" id="profession" name="profession"
															placeholder="profession">
													</div>
													<div class="w-100"></div>
													<div class="col">
														<textarea id="message" name="message"
															placeholder="Message *" rows="5"></textarea>
														<button class="btn" type="submit">Enroll</button>

														<img id="ajax" alt=""
															src="../../resources/images/load.gif"
															style="width: 50px; height: 50px; , margin-top: -5px; margin-left: 20px; visibility: hidden;">
													</div>
													<div class="w-100"></div>
													<div class="col">
														<p id="ms" class="input-success">Thank for enrollment
															request!! Our Consultant will get back to you soon.</p>
														<p id="mf" class="input-error">Something went wrong. try
															again later</p>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Contact Form End -->



						<!-- Related News -->
						<!-- 						<div class="elh-blog-related"> -->
						<!-- 							<h4 class="elh-related-news-title">Blogs</h4> -->
						<!-- 							<div class="row"> -->
						<!-- 								<div class="col-md-6"> -->
						<!-- 									<article class="elh-post style-3"> -->
						<!-- 										<a class="elh-post-thumb" href="blog-single.html"> <img -->
						<!-- 											class="img-fluid" -->
						<!-- 											src="../../resources/images/blog/medium-7.jpg" alt="..."> -->
						<!-- 										</a> -->
						<!-- 										<div class="elh-post-body"> -->
						<!-- 											<h4 class="elh-post-title"> -->
						<!-- 												<a href="blog-single.html">Important Traits of subject -->
						<!-- 													Matter Expert</a> -->
						<!-- 											</h4> -->
						<!-- 											<a class="elh-post-link" href="blog-single.html">Read More<i -->
						<!-- 												class="fas fa-long-arrow-alt-right"></i></a> -->
						<!-- 										</div> -->
						<!-- 									</article> -->
						<!-- 								</div> -->
						<!-- 								<div class="col-md-6"> -->
						<!-- 									<article class="elh-post style-3"> -->
						<!-- 										<a class="elh-post-thumb" href="blog-single.html"> <img -->
						<!-- 											class="img-fluid" -->
						<!-- 											src="../../resources/images/blog/medium-8.jpg" alt="..."> -->
						<!-- 										</a> -->
						<!-- 										<div class="elh-post-body"> -->
						<!-- 											<h4 class="elh-post-title"> -->
						<!-- 												<a href="blog-single.html">What is Lean Six Sigma </a> -->
						<!-- 											</h4> -->
						<!-- 											<a class="elh-post-link" href="blog-single.html">Read More<i -->
						<!-- 												class="fas fa-long-arrow-alt-right"></i></a> -->
						<!-- 										</div> -->
						<!-- 									</article> -->
						<!-- 								</div> -->
						<!-- 							</div> -->
						<!-- 						</div> -->
						<!-- Related News End -->



					</div>
				</div>

				<script type="text/javascript">

function enrollment(){

	$("#ajax").css("visibility", "visible");
	var name=$("#name").val();
	var email=$("#email").val();
	var phone=$("#phone").val();
	var training=$("#course").val();
	var orgnization=$("#orgnization").val();
	var profession=$("#profession").val();
	var message=$("#message").val();
	$.post("http://localhost/abs_kaizen/public/enrollment",
			  {
				name:name,
				email:email,
				phone:phone,
				training:training,
				orgnization:orgnization,
				profession:profession,
				message:message,
				medium:'WEB',
				ip:''
			  },
			  function(data, status){
				 
				  try {
					  res=JSON. parse(data);
					  } catch (e) {
					 
					  }
					  
				  if(res["status"]){
					  Swal.fire(
							  'Thank You!',
							  res["message"],
							  'success'
							);
					  $("#ms").css("display", "block");
					  $("#mf").css("display", "none");
					  $("#ajax").css("visibility", "hidden");
					  document.getElementById('ef').reset();
				  }else{
					  $("#mf").css("display", "block");
					  $("#ms").css("display", "none");
					  $("#ajax").css("visibility", "hidden");	
				  }
			  });
	return false;
}

</script>