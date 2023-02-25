<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Shop</h3>
			<ol class="breadcrumb">
				<li><a href="course_hub.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li class="active">Payment</li>
			</ol>
		</div>
	</div>
</div>
<!-- Page header End -->

<div class="container p-5">
	<div class="row">
		
		<section class="hero py-6">
		<div class="container">
			<div class="hero-content py-4" id="order_status">
				
			</div>
		</div>
	</section>
	<section class="pb-6">
		<div class="container">
			<p class="lead">
				Thank you, <span id="username">User</span>. For Choosing Moveheal.
			</p>
			<p class="lead mb-5" id="order_note">Your order hasn't shipped yet but we will send
				you ane email when it does.</p>
			
			
		</div>
	</section>
		
		
	</div>
</div>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    var cartId = <?php echo $_SESSION["cartId"]; ?>;
    var personId = <?php echo $_SESSION["personId"]; ?>;
    var status= <?php echo  $paymentStatus; ?>;
    var subtotal=<?php echo $_SESSION["subtotal"]; ?>;
    var discount=<?php echo $_SESSION["discount"]; ?>;
    var tax= <?php echo $_SESSION["tax"]; ?>;
    var shipping= <?php echo $_SESSION["shipping"]; ?>;
    var total=<?php echo $_SESSION["total"]; ?>;
</script>
<script> 
    $(document).ready(function() {
        
        /*var queries = {};
        $.each(document.location.search.substr(1).split('&'), function(c, q) {
            var i = q.split('=');
            queries[i[0].toString()] = i[1].toString();
        });
        console.log(queries.pid);
        personId = queries.pid;
        */
    	if(status==1){
        	$("#order_status").html(
			`<div class="d-flex align-items-center alert alert-success fade show"
					role="alert">
					<p>Payment successfull</p>
				</div>`
            );
            doPayment();
        }else{
        	$("#order_status").html(
        			`<div class="d-flex align-items-center alert alert-fail fade show"
        					role="alert">
        					<p>Transaction Failed</p>
        				</div>`
                    );
        }
        
    });

    function doPayment() {
    	$.post("http://localhost/shopoo/public/sales/salesOrder", {
            cart_id: cartId,
            person_id: personId,
            subtotal:subtotal,
            discount:discount,
            tax:tax,
            shipping:shipping,
            total:total
        }, function(data, status) {
            alert("function");
            alert(data);
            try {
                result = JSON.parse(data);
                var soid=result["soid"];
                alert(soid);                        
            } catch (e) {}
            if (result["status"] === "success") {
                alert("sales order success");
                window.location.href = "../shop/confirmed/"+soid;
            }
        });
    }
</script>






































