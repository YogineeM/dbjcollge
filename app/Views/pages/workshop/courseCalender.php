<div class="elh-page-header elh-img-bg elh-bg-9"
	style="background-image: url('../resources/atoconn/digital-marketing/4-w.jpg'); background-size: 100% 100%">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Course Calender</h3>
			<ol class="breadcrumb">
				<li><a href="../home/index">Home</a></li>
				<li class="active">Courses Calender</li>
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
				<p style="font-size: 20px; padding-left: 30px">At Move Heal, we've
					designed our academic calendar to help you balance your academic
					schedule with family and job commitments. We offer multiple
					sessions, so you can fit one or more courses into your life each
					fall, spring, and summer.</p>
			</div>
			<div class="row" style="padding: 50px 50px">
				<div class="col-sm-12" id="batches"></div>

			</div>

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
					batches=course.scheduleBatch;
					for(let batch of batches){
						courseName=course.courseName.replaceAll("<br/>", "");
						courseName=courseName.replaceAll("<br>", "");
						batchRow=`<div class="row">
							<div class="col-sm-10">
								<h5>#94 :${batch.batchName} : <small> ${batch.scheduleBatchLocation.city}</small></h5>
								
								<p>
									<strong>${courseName}</strong><br/>
									<strong>Faculty : Dr Abhiya Gupta</strong><br/>
									<strong>Duration:</strong> ${batch.startDate} to ${batch.endDate}
								</p>
							</div>
							<div class="col-sm-2">
								<h5>INR. ${batch.grossTotal}</h5>
								<a href="../home/registration?course_id=${course.courseId}&course_name=${course.courseName}&batch_id=${batch.batchId}&batch_name=${batch.batchName}&city=${batch.scheduleBatchLocation.city}" class="btn btn-warning">Register</a>
							</div>
						</div><br/>
						<hr/>`;
						
						$('#batches').append(batchRow);	
					}
			
				}

			})		
	}
</script>
