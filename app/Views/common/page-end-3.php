<script type="text/javascript">
$("#banner").css("display","none");
function subscribe(){
	var email=$("#nlemail").val();
	$.post("http://localhost/abs_kaizen/public/newsletter",
			  {
				email:email,
				medium:'WEB'
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
					  $("#ms").html("You have beeen subscribe successfully for updates!!!")
				  }else{
					  Swal.fire(
							  'Try Again',
							  'Something went wrong',
							  'fail'
							);
					  $("#mf").css("display", "block");
					  $("#ms").css("display", "none");
					  $("#mf").html("Please try again. Something went wrong");
				  }
			  });
	return false;
}

</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eddfd6d9e5f694422901c43/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

<!--End of Tawk.to Script-->
<!-- Script -->
<script src="../../resources/assets/js/jquery.min.js"></script>
<script src="../../resources/assets/js/popper.min.js"></script>
<script src="../../resources/assets/js/bootstrap.min.js"></script>
<script src="../../resources/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="../../resources/assets/js/visible.js"></script>
<script src="../../resources/assets/js/isotope.pkgd.min.js"></script>
<script src="../../resources/assets/js/owl.carousel.min.js"></script>
<script src="../../resources/assets/js/slick.min.js"></script>
<script src="../../resources/assets/js/plyr.js"></script>
<script src="../../resources/assets/js/jquery.countTo.js"></script>
<script src="../../resources/assets/js/jquery.countdown.min.js"></script>
<script src="../../resources/assets/js/jquery.magnific-popup.min.js"></script>
<script src="../../resources/assets/js/jquery.ajaxchimp.min.js"></script>
<script src="../../resources/js/custom.js"></script>
<script src="../../resources/assets/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script src="../../resources/assets/sweetalert2/sweet-alert.init.js"></script>
<script
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
<script src="../../resources/js/map.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
		
		function getPageTopBanner(){
			pageid = $("#pageid").val();

			$.post("http://abs.kaizenxs.com/course/getpagetopbanner",{pageid : pageid}, 
					function(data, status){
				try {
					  res=JSON. parse(data);

					  if(res.pagename!=null){
						  $("#banner").css("display","block");
					  $("#banner").html(res.banner);
					  }else{
						  $("#banner").css("display","none");
					  }
					  } catch (e) {
					 
					  }
				  
			});
		}
		getPageTopBanner();

		function getCourseDetails(){
			courseid = $("#courseid").val();
			$.post("http://abs.kaizenxs.com/course/getCourse",{courseid : courseid}, 
					function(data, status){
				try {
					  res=JSON.parse(data);

					  if(res.coursename!=null){

					  $(".price").html(res.price);

					  $(".discount").html(res.discount);

					  }else{
						  $(".price").html("--");

						  $(".discount").html("Contact Support Team");
					  }
					  } catch (e) {
					 
					  }
				  
			});
		}
		getCourseDetails();
		
		
	});
	
</script>

</body>

</html>