<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Shop</h3>
			<ol class="breadcrumb">
				<li><a href="course_hub.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li class="active">Shop Single</li>
			</ol>
		</div>
	</div>
</div>
<!-- Page header End -->

<!-- Main wrapper start -->
<div class="elh-main-wrap">
	<!-- Shop Single -->
	<div class="elh-section elh-section-padding shop-section">
		<div class="container" id="product-details">

			<!-- product-details-here -->
			<div class="elh-product elh-product-single">
				<div class="row">
					<div class="col-lg-6">
						<div class="elh-product-thumb">
							<div
								class="owl-carousel elh-single-product-gallery owl-loaded owl-drag"
								id="elh-single-product-gallery">
								<div class="owl-stage-outer">
									<div class="owl-stage" id="owl-stage">
										<!--<div class="owl-item cloned" style="width: 555px;">
											 <img class="img-fluid"
												src="../../resources/images/shop/3.jpg" alt="..."> 
										</div>-->
									</div>
								</div>
								<div class="owl-nav">
									<button type="button" role="presentation" class="owl-prev">
										<i class="fa fa-angle-left"></i>
									</button>
									<button type="button" role="presentation" class="owl-next">
										<i class="fa fa-angle-right"></i>

									</button>
								</div>

								<div class="owl-dots disabled"></div>
							</div>
							<div class="elh-product-attr">
								<span class="sale">Sale!</span>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="elh-product-body">
							<h4 class="elh-product-name" id="product_name"></h4>
							<div class="elh-product-review">
								<div class="elh-rating-star">
									<span class="rate-star on"></span> <span class="rate-star on"></span>
									<span class="rate-star on"></span> <span class="rate-star on"></span>
									<span class="rate-star"></span>
								</div>
								<p class="elh-product-review-count">(15 Customer Reviews)</p>
							</div>
							<p class="elh-product-price">
								&#8377; <span class="elh-product-price-now" id="product_price"></span>
							</p>
							<div class="elh-product-entry">
								<p id="product_brief"></p>
							</div>

							<!--attributes-->
							<div class="elh-product-entry"">

								<div class="elh-product-entry">
									<div id="product_attributes_label"></div>
									<div id="product_attributes" class="form-inline"></div>
								</div>
								<!-- 
								<form id="orderForm" class="elh-order-form ml-auto"
									onsubmit="return addToCart();">
									<input type="number" min="1" max="12" value="1"
										id="items-quantity">
									<button type="submit" id="add_to_cart_btn">Add to Cart</button>
									<br /> <small>Free Shipping. Delivery in 7 to 14 Days</small>
								</form>
 -->
								<form id="orderForm" class="elh-order-form ml-auto"
									onsubmit="return addToCart();">
									<input type="number" min="1" max="12" value="1"
										id="items-quantity">
									<button type="submit" id="add_to_cart_btn">Buy Now</button>
									<br /> <small>Free Shipping. Delivery in 7 to 14 Days</small>
								</form>

								<!--  <div class="elh-product-category">
								<label>Categories:</label> <a href="#">Music</a> <a href="#">Headphone</a>
								<a href="#">Beats</a>
							</div>  -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="elh-product-single-tab">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item"><a class="nav-link active"
								id="description-tab" data-toggle="tab" href="#description"
								role="tab" aria-controls="description" aria-selected="true">Description</a>
							</li>
							<li class="nav-item"><a class="nav-link" id="comment-tab"
								data-toggle="tab" href="#comment" role="tab"
								aria-controls="comment" aria-selected="false">Comments</a></li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="description"
								role="tabpanel" aria-labelledby="description-tab">
								<div class="elh-product-description">
									<h3>Description</h3>
									<p id="product_desc">${product.itemDescription.description}</p>
								</div>
							</div>
							<div class="tab-pane fade" id="comment" role="tabpanel"
								aria-labelledby="comment-tab">
								<table class="review-table">
									<tr class="review-item">
										<td class="review-head">
											<h5 class="review-reviewer">Oliver Liam</h5>
											<div class="elh-rating-star">
												<span class="rate-star on"></span> <span
													class="rate-star on"></span> <span class="rate-star on"></span>
												<span class="rate-star on"></span> <span class="rate-star"></span>
											</div> <span class="review-date">03/23/2020</span>
										</td>
										<td class="review-body">
											<h5 class="review-title">Great product I know</h5>
											<p>Ut metus. Maecenas dapibus nibh eu est. Proin faucibus
												pharetra nibh. Integer aliquet tellus in felis. Quisque mi
												pede, imperdiet a, dapibus vel, bibendum rhoncus, nulla.</p>
										</td>
									</tr>
									<tr class="review-item">
										<td class="review-head">
											<h5 class="review-reviewer">Oliver Liam</h5>
											<div class="elh-rating-star">
												<span class="rate-star on"></span> <span
													class="rate-star on"></span> <span class="rate-star on"></span>
												<span class="rate-star on"></span> <span class="rate-star"></span>
											</div> <span class="review-date">03/23/2020</span>
										</td>
										<td class="review-body">
											<h5 class="review-title">Great product I know</h5>
											<p>Ut metus. Maecenas dapibus nibh eu est. Proin faucibus
												pharetra nibh. Integer aliquet tellus in felis. Quisque mi
												pede, imperdiet a, dapibus vel, bibendum rhoncus, nulla.</p>
										</td>
									</tr>
									<tr class="review-item">
										<td class="review-head">
											<h5 class="review-reviewer">Oliver Liam</h5>
											<div class="elh-rating-star">
												<span class="rate-star on"></span> <span
													class="rate-star on"></span> <span class="rate-star on"></span>
												<span class="rate-star on"></span> <span class="rate-star"></span>
											</div> <span class="review-date">03/23/2020</span>
										</td>
										<td class="review-body">
											<h5 class="review-title">Great product I know</h5>
											<p>Ut metus. Maecenas dapibus nibh eu est. Proin faucibus
												pharetra nibh. Integer aliquet tellus in felis. Quisque mi
												pede, imperdiet a, dapibus vel, bibendum rhoncus, nulla.</p>
										</td>
									</tr>
								</table>
								<a class="btn to-reviewform-btn" href="#"><i
									class="fa fa-pencil-square-o"></i> Write your review</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- product-details-here -->


	</div>
	<!-- Shop -->



	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
var product;
var idstate = {};
var invAtrs = [];
var invValues = []
var state = {};
var currentInvDetail = 0;
var itemCount = 0;
var attrs=[]; 
attrs = $(".item_attributes");

var itemId = <?php echo $productId; ?>;

$(document).ready(function() {
    getProduct(itemId);
});

function getProduct(itemId) {

    $.get("http://localhost/moveheal/public/resources/data/data.json", function(data, status) {

        product = data.find(d => d.id === itemId);
        console.dir("product: " + product);

        var product_price = $('#product_price');
        itemCount = product.itemCount;
        
        $("#elh-page-title").text(product.itemName);
        $("#breadcrumb_active").text(product.itemName)
        
        $('#product_name').text(product.itemName);  
              
        product_price.text("0");
        $('#product_brief').html(product.itemDescription.brief);
        $('#product_desc').html(product.itemDescription.description);

        let images = "";
        product.itemImageVideo.forEach(iv => {
            //console.log(product.itemImageVideo.itemIvPath[i]);					
            images +=
                `<div class="owl-item"><img class="img-fluid" src="${iv.itemIvPath}" alt="..."></div>`
        });
        $("#owl-stage").append(images);

        // display attributes
        atr_html = "";
        val_html = "";

        product.itemAttributes.forEach((atr) => {

            atr_html = `<div class="font-weight-bold">${atr.attribute}</div>`;

            var val = atr.value.split("#");
            for (let i = 1; i < val.length; i++) {

                val_html += `					
					<div class="container form-group my-2 ">
					<div class="col-md-3 col-sm-6 d-flex justify-content-start">						
						<label class="text-left">${val[i]}</label>
					</div>
					<div class="col-md-4 col-sm-3 d-flex justify-content-center">
						<input type="text" class="item_attributes" value="1" id="${val[i]}" name=${atr.attribute} onblur=validateCount(this)>
					</div>
					</div>					
					`
            };

            $('#product_attributes').append(val_html);
            $('#product_attributes_label').append(atr_html);
        });
        
        $("#Black").val(1);
        $("#Blue").val(2);
        $("#Beige").val(2);

        currentInvDetail = product.inventoryDetails[0].inventoryId;

        product.inventoryDetails.forEach(detail => {
            detail.itemInventoryAttribute.forEach(attr => {
                invAtrs.push(attr.attributes.split(","));
            });
            detail.itemInventoryAttribute.forEach(val => {
                invValues.push(val.values.split(","));
            });
            idstate["values"] = invValues[0];
            idstate["price"] = detail.itemInventoryQuantityCustomPricing[0].salesGrossPrice;
            product_price.text(detail.itemInventoryQuantityCustomPricing[0].salesGrossPrice);
            console.log(idstate);
        });

        setInitailState();
    });
}

function setInitailState() {
    state = {
        ...idstate
    };
    console.log({
        state
    });
    product.itemAttributes.forEach((atr) => {
        var radios = document.getElementsByName(atr.attribute);
        radios.forEach(radio => {
            invValues[0].forEach(invValue => {
                if (radio.value === invValue) radio.checked = true;
            });
        });
    });
}

function validateCount(ev) {
    
    let count = 0;
    
    
    for(let i=0; i<attrs.length; i++){
    	count = count + parseInt(attrs[i].value);
    	attrs[i].style.borderColor = "";
    }
    
    if(count > itemCount){
    	 $("#add_to_cart_btn").attr("disabled", true);
    	 alert("Total Count must be " + itemCount);
    	 
    	 document.getElementById(ev.id).style.borderColor = "red";
    	 document.getElementById("add_to_cart_btn").style.cursor = "not-allowed";
    	     	 
    	 	
    }else{
    for(let i=0; i<attrs.length; i++){    	
    	attrs[i].style.borderColor = "";
    	$("#add_to_cart_btn").attr("disabled", false); 
    	document.getElementById("add_to_cart_btn").style.cursor = "pointer";
    }    		
    }
}



function getUpdate(newState) {
    // console.log({newState});
    newStateObj = Object.values(newState);
    // console.log({newStateObj});	
    product.inventoryDetails.forEach(detail => {
        currentInvDetail = detail.inventoryId;

        detail.itemInventoryAttribute.forEach(attr => {
            if (attr.values === newStateObj) {

                // fetch new price
                var newPrice = detail.itemInventoryQuantityCustomPricing.saleNetPriceBuom;

                // fetch new images
                //newImage[]
                var newImage = detail.itemImageVideo.itemIvPath;
                updateView(newPrice, newImage);

            } else {
                alert('No such combination Found.');
            }
        })
    })

}

function updateView(updatedPrice, updatedImage) {
    alert("updating view");

    //update price
    product_price = updatedPrice;

    //update images
}


function addToCart() {

    let quant = $("#items-quantity").val();
    let cartId = <?php echo $_SESSION["cartId"]?>;
    let specs = "";
    
    var attrs=[]; 
attrs = $(".item_attributes");
        
    for(let i=0; i<attrs.length; i++){
    	specs += attrs[i].id+":"+attrs[i].value+",";    	   	
    }
    	specs = specs.substring(0, specs.length - 1);

    $.post("http://localhost/shopoo/public/shopping/cart", {
        cart_id: cartId,
        item_id: product.itemId,
        itemInventoryId: product.inventoryDetails.inventoryId,
        skucode: '',
        quantity: quant,
    	specification:specs,
        store_id: 1,
        ref_id: 1,
        ref_type: "",
        created_by: ""
        
    }, function(data, status) {
        try {
            res = JSON.parse(data);

        } catch (e) {
            console.log(e);
        }

        if (res["status"] === "success") {
            let items = $("#cart-items").text();
            console.log(parseInt(items) + parseInt(quant));
            //$("#cart-items").text(parseInt(items) + parseInt(quant));
           // $("#shopping-cart-link").attr("href", "<?php echo base_url();?>/shop/cart/" + cartId);

//            Swal.fire(
  //              "Item added to Cart"
    //        );
            
            location.href="<?php echo base_url();?>/shop/checkout";
            
            $("#ms").css("display", "block");
            $("#mf").css("display", "none");
            $("#ajax").css("visibility", "hidden");

            $("#items-quantity").val(1);
        } else {
            $("#mf").css("display", "block");
            $("#ms").css("display", "none");
            $("#ajax").css("visibility", "hidden");
        }
    });
    return false;
}
</script>