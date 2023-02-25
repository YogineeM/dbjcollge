<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9" style="background-image: url('../../resources/atoconn/digital-marketing/banner-3.jpg'); background-size: 100% 100%">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Corporate</h3>
			<ol class="breadcrumb">
				<li><a href="../../home/index">Home</a></li>
				<li><a href="../../services/all">Services</a></li>
				<li class="active">Corporate</li>
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
<!-- 								<img class="img-fluid" -->
<!-- 									src="../../resources/images/blog/large-1.jpg" alt="..."> -->

								<iframe width="100%" height="400" src="https://www.youtube.com/embed/l1q2Jv3Rc_c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
							<h4 style="font-size: 18px; margin-top: 20px; line-height: 40px">
								Upskill your workforce with one of the most demanding Quality
								Management skills Use code <u>"CORP2020"</u> to avail Corporate
								discounts
							</h4>
							<p style="margin-top: 20px; font-size: 16px">Choose from any of
								our Customized Lean &amp; Six Sigma Courses. Reach out to us if
								you need our expertise in building up Business Excellence for
								your organization</p>
							
						</article>


						<div class="elh-section elh-section-padding">
							<div class="container">
								<div class="row">
									<div class="col-lg-12">
										<div class="quick-contact">
											<h3>Request For Service!</h3>
											<form id="cf" onsubmit="return corporate();"
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
														<input type="tel" id="phone" name="phone" pattern="[6789][0-9]{9}"
															placeholder="Phone">
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">City :</label>
														<input type="text" id="city" name="city"
															placeholder="City" required>
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Orgnization:</label>
														<input type="text" id="orgnization" name="orgnization"
															placeholder="organization">
													</div>
													<div class="col-md-6">
														<label for="pwd" style="font-weight: bold;">Request</label>
														<select id="request" name="request" required>
															<option selected>Request For *</option>
															<option value="admission">Corporate Training</option>
															<option value="fess">Consultation</option>
															<option value="accomodation">Content Creation & Review</option>
														</select>
													</div>
													<div class="w-100"></div>
													<div class="col">
														<textarea id="message" name="message"
															placeholder="Message *" rows="5" required></textarea>
														<button class="btn" type="submit">Submit</button>
														<img id="ajax" alt="" src="../../resources/images/load.gif" style="width:50px;height: 50px;,margin-top: -5px;margin-left: 20px;visibility: hidden;">
													</div>
													<div class="w-100"></div>
													<div class="col">
														<p id="ms" class="input-success">Your message has been recorded. Our consultant will get in touch with you very soon.
														<p id="ms" class="input-error">Something went wrong. try again
															later</p>
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

function corporate(){

	$("#ajax").css("visibility", "visible");
	var name=$("#name").val();
	var email=$("#email").val();
	var phone=$("#phone").val();
	var city=$("#city").val();
	var orgnization=$("#orgnization").val();
	var request=$("#request").val();
	var message=$("#message").val();
	$.post("http://localhost/abs_kaizen/public/corporate",
			  {
				name:name,
				email:email,
				phone:phone,
				city:city,
				orgnization:orgnization,
				request:request,
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