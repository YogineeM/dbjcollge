<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Products</h3>
			<ol class="breadcrumb">
				<li><a href="course_hub.html">Home</a></li>
				<li class="active">Shop</li>
			</ol>
		</div>
	</div>
</div>
<!-- Page header End -->

<!-- Main wrapper start -->
<div class="elh-main-wrap">

	<!-- Shop -->
	<div class="elh-section elh-section-padding shop-section">
		<div class="container">
			<!-- <form class="shop-filter-short" id="shop-filter-short" action="#"
				method="post">
				<div class="row">
					<div class="col-6">
						<select class="shop-category-select" name="shop-category">
							<option selected>Category</option>
							<option value="shoes">Shoes</option>
							<option value="dress">Dress</option>
							<option value="books">Books</option>
						</select>
					</div>
					<div class="col-6 text-right">
						<select class="shop-shorting" name="shop-shorting">
							<option value="default" selected>Short By</option>
							<option value="a-z">A - Z</option>
							<option value="z-a">Z - A</option>
							<option value="price-l-h">Price: Low to High</option>
							<option value="price-h-l">Price: High to Low</option>
						</select>
					</div>
				</div>
			</form> -->
			<div class="row elh-products" id="products">
				<!--  -->

				<!--  -->

			</div>
			<div class="row elh-products" id="products_combo">
				<!--  -->

				<!--  -->

			</div>

			<!-- <div class="col-12 text-center">
				<nav class="navigation post-pagination" role="navigation">
					<div class="nav-links">
						<a class="prev page-numbers" href="#"><i
							class="fa fa-angle-double-left"></i></a> <a class="page-numbers"
							href="#">1</a> <span class="page-numbers current">2</span> <a
							class="page-numbers" href="#">3</a> <a class="page-numbers"
							href="#">4</a> <a class="page-numbers" href="#">5</a> <a
							class="next page-numbers" href="#"><i
							class="fa fa-angle-double-right"></i></a>
					</div>
				</nav>
			</div> -->
		</div>
	</div>
	<!-- Shop -->

	<!-- Subscription -->
	<div class="elh-section elh-theme-bg elh-subscribe-section style-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="elh-subscribe-heading">
						<h3>Subscribe us for Future Updates</h3>
					</div>
				</div>
				<div class="col-md-6">
					<form id="subscription"
						class="elh-subscribe-form pull-right xs-pull-center" action="#"
						method="post">
						<input type="email" name="email"
							placeholder="Enter your mail here">
						<button type="submit">
							<i class="fa fa-paper-plane"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- Subscription End -->
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<script>
    var products = [];
    $(document).ready(function() {

        getProducts();

    });

    function getProducts() {

        $.get("http://localhost/shopoo/public/inventory/items", function(data, status) {

            products = JSON.parse(data);
            console.dir("Data: " + JSON.stringify(data));


            productHtml = "";
            for (var product of products) {

                let price = "";
                if (product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesDiscount == 0) {
                    price = product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesNetPrice;
                } else {
                    cost = parseFloat(product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0]
                        .salesNetPrice) - parseFloat(product.inventoryDetails[0]
                        .itemInventoryQuantityCustomPricing[0].salesDiscount);
                    price = "<strike>" + product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0]
                        .salesNetPrice + "</strike>&nbsp;" + cost;
                }
                
                productHtml += `<div class="col-lg-4 col-sm-6">
					<div class="elh-product">
						<div class="elh-product-thumb">
							<img class="img-fluid" src="<?php echo base_url(); ?>/${product.itemImageVideo[0].itemIvPath}" alt="...">
							<div class="elh-product-hover">
								<div class="elh-product-btns">
									<a class="add-to-cart" href="<?= base_url('/shop/products/')?>/${product.itemId}"><i class="fa fa-shopping-cart"></i></a>
									<a class="go-to-link" href="<?= base_url('/shop/products/')?>/${product.itemId}"><i class="fas fa-external-link-alt"></i></a>
									
								</div>
							</div>
						</div>
						<div class="elh-product-body">
							<h4 class="elh-product-name">
								<a href="<?= base_url('/shop/products/')?>/${product.itemId}">${product.itemName}</a>
							</h4>
							<p class="elh-product-price">
							
								<span class="elh-product-price-now">&#8377; ${product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesGrossPrice}</span>
							</p>
						</div>
					</div>
				</div>`


            }

            $("#products").html(productHtml);

        });
        getComboProducts();
    }
    
    /*  */
    function getComboProducts() {

    $.get("http://localhost/moveheal/public/resources/data/data.json", function(data, status) {

        productHtml = "";
        for (var product of data) {

            let price = "";
            if (product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesDiscount == 0) {
                price = product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesNetPrice;
            } else {
                cost = parseFloat(product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0]
                    .salesNetPrice) - parseFloat(product.inventoryDetails[0]
                    .itemInventoryQuantityCustomPricing[0].salesDiscount);
                price = "<strike>" + product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0]
                    .salesNetPrice + "</strike>&nbsp;" + cost;
            }

            productHtml += `<div class="col-lg-4 col-sm-6">
					<div class="elh-product">
						<div class="elh-product-thumb">
							<img class="img-fluid" src="<?= base_url('/shop/combo/products/')?>/${product.itemImageVideo[0].itemIvPath}" alt="...">
							<div class="elh-product-hover">
								<div class="elh-product-btns">
									<a class="add-to-cart" href="<?= base_url('/shop/combo/products/')?>/${product.itemId}"><i class="fa fa-shopping-cart"></i></a>
									<a class="go-to-link" href="<?= base_url('/shop/combo/products/')?>/${product.itemId}"><i class="fas fa-external-link-alt"></i></a>									
								</div>
								</div>
								</div>
								<div class="elh-product-body">
								<h4 class="elh-product-name">								
								<a href="<?= base_url('/shop/products/')?>/${product.itemId}">${product.itemName}</a>
								</h4>
								<p class="elh-product-price">															
								<span class="elh-product-price-now">&#8377; ${product.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesGrossPrice}</span>
								</p>
								</div>
								</div>
								</div>`
        }
        $("#products_combo").html(productHtml); 
        
        

    });
    }
    /*  */    
    
    </script>

</div>
<!-- Main wrapper start end -->