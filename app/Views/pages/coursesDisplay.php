<div class="elh-page-header elh-img-bg elh-bg-9"
	style="background-image: url('../resources/atoconn/digital-marketing/4-w.jpg'); background-size: 100% 100%">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Kinasio</h3>
			<ol class="breadcrumb">
				<li><a href="../home/index">Home</a></li>
				<li class="active">Courses</li>
			</ol>
		</div>
	</div>
</div>
<!-- Page header End -->

<!-- Main wrapper start -->
<div class="elh-main-wrap">

	<!-- Blog Style 1 -->
	<div class="elh-section elh-section-padding">
		<div class="container">
			<div class="row">
				<h3>Description</h3>
				<p style="text-align: justify; font-size: 15px">Kinesio Taping
					method and courses are provided by Kinesio University and are
					closely monitored by Dr Kenzo Kase, founder of Kinesio tape. In
					practical training, we aim is to develop and refine a high degree
					of skill and intuition in the assessment and evaluation of patient
					needs, whether for support, correction or rehabilitation. In any
					form of treatment, it is important that the patient's condition is
					assessed properly so that the most effective treatment may be
					applied. Without this training, the person applying the tape may
					lack a deep understanding of what is needed.</p>
			</div>
			<br> <br>
			<div class="row">
				<h3>Credential</h3>
				<p style="text-align: justify; font-size: 15px">Kinesio University Seminars are accepted by many professional
					credentialing organizations and American state professional
					regulatory boards, to name a few, American Occupational Therapy
					Association, Inc. (AOTA) for Occupational Therapists AOTA, NCBTMB:
					National Certification Board for Therapeutic Massage & Bodywork
					(NCBTMB), NCCAOM: National Certification Commission for Acupuncture
					and Oriental Medicine.</p>
			</div>
			<br> <br> <br>
			<div class="row elh-posts-listing" id="courses"></div>

			<!-- 		<div class="container" id="consultation"> -->
			<!-- 			<h3 class="elh-section-title" -->
			<!-- 				style="text-align: center; margin-bottom: 40px">Consultation</h3> -->
			<!-- 			<div class="row elh-posts-listing"> -->

			<!-- 				<div class="col-lg-2 col-md-12"></div> -->

			<!-- 				<div class="col-lg-4 col-md-6"> -->
			<!-- 					<article class="elh-post style-3"> -->
			<!-- 						<a class="elh-post-thumb" href="../services/business/consultation"> -->
			<!-- 							<img class="img-fluid" -->
			<!-- 							src="../resources/images/kaizen/Advisory-services-on-services-and-consultation-page.jpg" -->
			<!-- 							alt="..."> -->
			<!-- 						</a> -->
			<!-- 						<div class="elh-post-body"> -->
			<!-- 							<h4 class="elh-post-title"> -->
			<!-- 								<a href="../services/business/consultation">Advisory Services<br /> -->
			<!-- 									<br /></a> -->
			<!-- 							</h4> -->
			<!-- 							<a class="elh-post-link" href="../services/business/consultation">Read -->
			<!-- 								More<i class="fas fa-long-arrow-alt-right"></i> -->
			<!-- 							</a> -->
			<!-- 						</div> -->
			<!-- 					</article> -->
			<!-- 				</div> -->

			<!-- 				<div class="col-lg-4 col-md-6"> -->
			<!-- 					<article class="elh-post style-3"> -->
			<!-- 						<a class="elh-post-thumb" href="../services/business/consultation"> -->
			<!-- 							<img class="img-fluid" -->
			<!-- 							src="../resources/images/kaizen/Content-creation-on-services-and-consultation-page.jpg" -->
			<!-- 							alt="..."> -->
			<!-- 						</a> -->
			<!-- 						<div class="elh-post-body"> -->
			<!-- 							<h4 class="elh-post-title"> -->
			<!-- 								<a href="../services/business/consultation">Content Creation -->
			<!-- 									&amp; Review for Businesses</a> -->
			<!-- 							</h4> -->
			<!-- 							<a class="elh-post-link" href="../services/business/consultation">Read -->
			<!-- 								More<i class="fas fa-long-arrow-alt-right"></i> -->
			<!-- 							</a> -->
			<!-- 						</div> -->
			<!-- 					</article> -->
			<!-- 				</div> -->


			<!-- 			</div> -->
			<!-- 		</div> -->
		</div>
	</div>
	<!-- Blog Style 1 End -->

	<!-- Subscription -->
	<div class="elh-section elh-theme-bg elh-subscribe-section style-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="elh-subscribe-heading">
						<h3>Subscribe to us for Future Updates</h3>
					</div>
				</div>
				<div class="col-md-6">
					<form id="" class="elh-subscribe-form pull-right xs-pull-center"
						onsubmit="return subscribe();">
						<input type="email" name="email" id="nlemail"
							placeholder="Enter your mail here">
						<button type="submit">
							<i class="fas fa-paper-plane"></i>
						</button>
						<p id="ms" class="newsletter-success"></p>
						<p id="mf" class="newsletter-error"></p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Subscription End -->

</div>
<!-- Main wrapper start end -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
	$(document).ready(function(){
		
		getCourse();
           
	});


	function getCourse(){

		$.get("http://localhost/moveheal-crm/public/learning/courses/all", function(data, status){
				courses = JSON.parse(data);
				console.dir(courses);
				for(course of courses){
					imageUrl="../resources/images/kaizen/Advisory-services-on-services-and-consultation-page.jpg";
					if(course.courseImageVideo!=null){
						imageUrl=course.courseImageVideo.courseIvPath;
					}

					if(course.CourseHead=="1"){
					
					$('#courses').append(`							
				<div class="col-lg-4 col-md-6" style="height:600%">
					<article class="elh-post style-3">
						<a class="elh-post-thumb" href="../course/${course.courseId}"> <img
							class="img-fluid"
							src="${imageUrl}"
							alt="...">
						</a>
						<div class="elh-post-body">
							<h4 class="elh-post-title">
								<a href="../course/${course.courseId}"> ${course.courseName}<br/>
									<br/></a>
							</h4>
							
							 <a class="elh-post-link" href="../course/${course.courseId}">Read
								 More<i class="fas fa-long-arrow-alt-right"></i> 
							</a> 
						</div>
					</article>
				</div>
							
			`);
					}
			
				}

			})		
	}
</script>