<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9">
  <div class="elh-overlay">
    <div class="container text-center">
      <h3 class="elh-page-title">Checkout</h3>
      <ol class="breadcrumb">
        <li><a href="course_hub.html">Home</a></li>
        <li><a href="shop.html">Shop</a></li>
        <li class="active">Checkout</li>
      </ol>
    </div>
  </div>
</div>
<!-- Page header End -->

<!-- Main wrapper start -->
<div class="elh-main-wrap">
  <!-- Registration Body -->
  <div class="elh-section elh-section-padding">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 offset-md-3">

          <form onsubmit="addUserData(this)" id="userDetails">
            <div class="form-row">
              <div class="col form-group">
                <label>First name </label>
                <input type="text" class="py-2" placeholder="First Name" name="firstname" id="fname">
              </div>
            </div>
            <div class="form-row">
              <div class="col form-group">
                <label>Last Name </label>
                <input type="text" class="py-2" placeholder="Last Name" name="lastname" id="lname">
              </div>
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="email" class="py-2" placeholder="Email" name="email" id="email">
            </div>

            <div class="form-group">
              <label>Phone</label>
              <input type="phone" class="py-2" placeholder="Phone" name="phone" id="phone">
            </div>

            <div class="form-group">
              <label>Address</label>
              <textarea type="text" class="py-2" id="address"></textarea>
            </div>

            
            <div class="form-group mt-4 text-center">
              <button type="submit" class="btn btn-primary"> Submit & Pay </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Registration Body End -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  	var personId=0;
    function addUserData(ev) {
      alert('submitting');

      event.preventDefault();

      $("#ajax").css("visibility", "visible");
      var fname = $("#fname").val();
      var lname = $("#lname").val();
      var email = $("#email").val();
      var phone = $("#phone").val();
      var address = $("#address").val();

      alert(fname);
      $.post("http://localhost/shopoo/public/shopping/cart/checkout", {
        fname: fname,
        lname: lname,
        email: email,
        phone: phone,
        address: address,
        updated_by: '',
        created_by: ''

      }, function(data, status) {
        try {
          var res = JSON.parse(data);
          if (res["status"] === "success") {
              personId=res.data.personId;
              console.log(personId);
              //window.location.href = "../shop/payment?pid="+personId;
              document.getElementById('userDetails').reset();
              placeOrder();
            }
        } catch (e) {}
        
      });
      return false;
    }
  </script>
  
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
function placeOrder(){	
	status=0;
	amount=<?php echo $_SESSION["total"]?>;
	  $.post("http://localhost/shopoo/public/payment/razorpay/order",
	  {
		  personId: personId,
		  status:status,
		  amount:amount
	  },
	  function(data, status){
	   res=JSON.parse(data);
	   if(res["status"]=="created"){
		   proceedPayment(res);
	}else{
		$("#fail").html("Member with given credentiats does not exists");
	   }
	  });
}

function proceedPayment(res){
	var fname = $("#fname").val();
    var lname = $("#lname").val();
    var fullName=fname+" "+lname
    var email = $("#email").val();
    var phone = $("#phone").val();
	var options = {
		    "key": "rzp_test_GJXY5Zln0Cdkol", 
		    "amount": res["amount"],
		    "currency": "INR",
		    "name": "MOVEHEAL",
		    "description": "MOVEHEAL",
		    "image": "http://www.moveheal.in/resources/images/moveheal/logo.png",
		    "callback_url": "http://localhost/shopoo/public/payment/razorpay/verify",
		    "prefill": {
		        "name": fullName,
		        "email": email,
		        "contact": phone
		    },
		    "notes": {
		        "address": "Enjoy jouney with MOVEHEAL"
		    },
		    "theme": {
		        "color": "#ffaf00"
		    }
		};
	var myArray = Object.values(options);
		console.log(myArray.toString());
		var rzp1 = new Razorpay(options);
    rzp1.open();
    e.preventDefault();
}
</script>