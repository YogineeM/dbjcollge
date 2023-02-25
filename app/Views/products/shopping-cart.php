<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
#items-quantity {
	width: 120px;
}

#quantity {
	max-width: 100%;
	white-space: nowrap;
}

#cartitems tr:hover {
	background-color: #f5f5f5;
}

table td {
	vertical-align: baseline;
	align-items: center;
	text-align: center;
	table-layout: fixed;
	width: 20px;
	overflow: hidden;
	word-wrap: break-word;
}
</style>
<!-- Page header -->
<div class="elh-page-header elh-img-bg elh-bg-9">
	<div class="elh-overlay">
		<div class="container text-center">
			<h3 class="elh-page-title">Shopping Cart</h3>
			<ol class="breadcrumb">
				<li><a href="course_hub.html">Home</a></li>
				<li><a href="shop.html">Shop</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		</div>
	</div>
</div>

<!-- Page header End -->
<div class="container">
	<div class="row p-5" id="main">
		<div class="col-md-8 col-sm-12">
			<div class="table-responsive">
				<table class="table p-5" id="cartitems"
					style="white-space: nowrap; width: 100%; overflow-x: auto;">
					<thead>
						<!-- <tr class="text-center">
							
							<th scope="col"></th>
							<th scope="col"></th>
							<th scope="col" width="100px"></th>
							<th scope="col"></th>
							<th scope="col"></th>
						</tr> -->
					</thead>
				</table>
			</div>
		</div>

		<!--  -->
		<div id="order-summery" class="col-md-4 col-sm-12">
			<div class="mb-5 card">
				<div class="py-4 card-body">
					<div class="table-responsive">
						<table class="table card-text border-0" Id="order_summery_tb">
							<h4 class="my-3 text-center">Order Summary</h4>
							<tbody>
								<tr>
									<th class="py-4">Order Subtotal</th>
									<td class="py-4 text-right text-muted" id="order-subtotal"></td>
								</tr>
								<tr>
									<th class="py-4">Discount</th>
									<td class="py-4 text-right text-muted" id="order-discount"></td>
								</tr>
								<tr>
									<th class="py-4">Shipping and handling</th>
									<td class="py-4 text-right text-muted" id="order-shipping"></td>
								</tr>
								<tr>
									<th class="py-4">Tax</th>
									<td class="py-4 text-right text-muted" id="order-tax"></td>
								</tr>
								<tr>
									<th class="pt-4">Total</th>
									<td class="pt-4 text-right h3 font-weight-normal"
										id="order-total"></td>
								</tr>
							</tbody>
						</table>
						<!--  -->
						<div class="text-right">
							<button class="btn btn-warning btn-block" type="submit"
								onclick="getOrderDetails()">Checkout</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script
	src="<?php echo base_url()?>/resources/assets/sweetalert2/dist/sweetalert2.all.min.js"></script>

<script
	src="<?php echo base_url()?>/resources/assets/sweetalert2/sweet-alert.init.js"></script>

<script>
    var row = 0;
    var itemId;
    var subtotal = 0;
    var tax = 0;
    var discount = 0;
    var shipping = 0;
    var total = 0;

    var cartId = <?php echo $_SESSION["cartId"]; ?>;

    $(document).ready(function() {
        getShoppingCart(cartId);
    });

    function getShoppingCart($cartId) {

        $.get("http://localhost/shopoo/public/shopping/cart/" + cartId, function(data, status) {

            items = JSON.parse(data);
            console.dir("items: " + items);
            console.dir("Data: " + data);
            console.log(Array.isArray(items));

            if (items.length !== 0) {
                let attributes = items[0].item.inventoryDetails[0].itemInventoryAttribute[0].attributes.split(",");
                let values = items[0].item.inventoryDetails[0].itemInventoryAttribute[0].values;

                //if length == 0 print cart is empty

                for (cartItem of items) {
                    $("#cartitems").append(`
                <tbody id="cart-body">
                <tr style="height:75px">                    
                    <td><img class="" src="<?php echo base_url()?>/${cartItem.item.itemImageVideo[0].itemIvPath}" alt="..." height="120" width="100"></td>
                    <td class="text-left">
                        <h5 class="text-capitalize">${cartItem.item.itemName}</h5>
                        <div class="details text-muted">
                            <span>${values}</span>
                        </div>
                        <div><h6>&#8377; ${cartItem.item.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesGrossPrice}</h6></div>
                    </td>                    
                    <td id="quantity" class="" style="white-space: nowrap;" width="100px">
                    	<form onsubmit="return updateItem(${cartItem.item.itemId},${cartId});">                                        
                            <input type="number" min="1" max="12" value=${cartItem.quantity} id="items-quantity" class="mr-2 px-5">                        
                            <button type="submit" class="border-0 bg-white text-warning"><i class="fa fa-refresh" aria-hidden="true"></i></button></td>
                        </form>
                    <td><h5>
                        &#8377; ${cartItem.quantity * cartItem.item.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesGrossPrice}
                    </h5></td>
                    <td><a href="#" onclick="removeItem(${cartItem.item.itemId},${cartId})" class="text-danger"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                </tr>               
                
            </tbody>`)
                    subtotal = subtotal + (cartItem.quantity * cartItem.item.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesGrossPrice);
                    tax = tax + (cartItem.quantity * cartItem.item.inventoryDetails[0].itemInventoryQuantityCustomPricing[0].salesTax);                    
					
                    // creating order-summery
                    $("#order-subtotal").html(`<span>&#8377; ${subtotal}</span>`);
                    $("#order-discount").html(`<span>&#8377; ${discount}</span>`);
                    $("#order-shipping").html(`<span>&#8377; ${shipping}</span>`);
                    $("#order-tax").html(`<span>&#8377; ${tax}</span>`);
                    total = (subtotal + tax + shipping) - discount;
                    $("#order-total").html(`<span>&#8377; ${total}</span>`);
                    
                }
            } else {
                $("#main").html(`
                
                	<p class="h4 mx-auto">Shopping Cart is Empty 😔</p>                	
                	<br />
                	<a href="<?php echo base_url();?>/shop/products"><button class="btn btn-warning">Continue Shopping</button></a>                	                
                `);
            }
        });
    }

    function removeItem(itemId, cartId) {

        $.post("http://localhost/shopoo/public/shopping/cart/remove/" + itemId, {
            item_id: itemId,
            cart_id: cartId
        }, function(data, status) {
            try {
                res = JSON.parse(data);
            } catch (e) {
                console.log(e);
            }
            if (res["status"] === "success") {
                Swal.fire(
                    "Item Removed from Cart"
                );
                $("#ms").css("display", "block");
                $("#mf").css("display", "none");
                $("#ajax").css("visibility", "hidden");
            } else {
                $("#mf").css("display", "block");
                $("#ms").css("display", "none");
                $("#ajax").css("visibility", "hidden");
            }
        });
    }

    function updateItem(itemId, cartId) {

        event.preventDefault();

        let quantity = $("#items-quantity").val();
        alert(quantity);
         
        if (quantity !== 0) {
            $.post("http://localhost/shopoo/public/shopping/cart/update/" + itemId, {

                cart_id: cartId,
                quantity: quantity

            }, function(data, status) {
                try {
                    res = JSON.parse(data);
                } catch (e) {
                    console.log(e);
                }
                if(res["status"] === "success"){
                    Swal.fire(
                        "Item Updated"
                    );
                    $("#ms").css("display", "block");
                    $("#mf").css("display", "none");
                    $("#ajax").css("visibility", "hidden");
                } else {
                    $("#mf").css("display", "block");
                    $("#ms").css("display", "none");
                    $("#ajax").css("visibility", "hidden");
                }
            });
        } else {
            removeItem(itemId, cartId)
        }
    }

    </script>
    <script type="text/javascript">

    function getOrderDetails() {
        subtotal = subtotal;
        discount = discount;
        shipping = shipping;
        tax = tax;
        total = total;
        cartId=<?php echo  $_SESSION["cartId"];?>;

        $.post("http://localhost/shopoo/public/sales/order/details", {
            subtotal: subtotal,
            discount: discount,
            shipping: shipping,
            tax: tax,
            total: total,
            cartId:cartId
            
        }, function(data, status) {
            try {
                res = JSON.parse(data);
                if (res["status"] === "success") {

                	$.post("../../shopping/orderDetails", {
                        subtotal: subtotal,
                        discount: discount,
                        shipping: shipping,
                        tax: tax,
                        total: total,
                        cartId:cartId
                        
                    }, function(data, status) {
                        try {
                            res = JSON.parse(data);
                            if (res["status"] === "success") {
                                window.location.href = "<?php echo base_url();?>/shop/checkout";
                            }
                        } catch (e) {
                            console.log(e);
                        }
                        
                    });
                }
            } catch (e) {
                console.log(e);
            }
            
        });
    }
    
</script>
