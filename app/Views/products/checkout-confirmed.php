<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Order Confirmed</h3>
			<ol class="breadcrumb">
				<li><a href="course_hub.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li class="active">confirmed</li>
			</ol>
		</div>
	</div>
</div>
<!-- Page header End -->

<main>
	<section class="hero py-6">
		<div class="container">
			<div class="hero-content py-4">
				<div class="d-flex align-items-center alert alert-success fade show"
					role="alert">
					<p>Order confirmed</p>
				</div>
			</div>
		</div>
	</section>
	<section class="pb-6">
		<div class="container">
			<p class="lead">
				Thank you, <span id="username">User</span>. Your order is confirmed.
			</p>
			<p class="lead mb-5">Your order hasn't shipped yet but we will send
				you ane email when it does.</p>
			<p class="mb-6">
				<a href="/customer-order" class="btn btn-outline-dark">View or
					manage your order</a>
			</p>
			<div class="p-5 alert alert-info" id="order-details"></div>
			<div class="text-right my-5">
				<a href="../shop/products"><button class="btn btn-warning">Continue
						Shopping</button></a>
			</div>
		</div>
	</section>
</main>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
   var soid;
   soid = <?php echo $soid; ?>

   $(document).ready(function() {
      alert("hello");
      alert(soid);
      getOrderDetails(soid);
   });

   function getOrderDetails(soid) {
      $.get("http://localhost/shopoo/public/sales/order/details/" + soid, function(data, status) {
alert('details');
         order = JSON.parse(data);
         console.dir("order: " + order);
         console.dir("Data: " + data);
         console.log(Array.isArray(order));

         $("#order-details").append(`
         <div class="row">
               <div class="mb-5 mb-lg-0 col-6 col-lg-3">
                  <div class="text-sm text-uppercase text-muted mb-3">Order no.</div>
                  <span class="h5">2019</span>
               </div>
               <div class="mb-5 mb-lg-0 col-6 col-lg-3">
                  <div class="text-sm text-uppercase text-muted mb-3">Date</div>
                  <span class="h5">Dec 30, 2020</span>
               </div>
               <div class="mb-5 mb-lg-0 col-6 col-lg-3">
                  <div class="text-sm text-uppercase text-muted mb-3">Total</div>
                  <span class="h5">$250</span>
               </div>
               <div class="mb-5 mb-lg-0 col-6 col-lg-3">
                  <div class="text-sm text-uppercase text-muted mb-3">Shipping</div>
                  <span class="h5">Usps next day</span>
               </div>
            </div>
         `);


      });
   }
</script>