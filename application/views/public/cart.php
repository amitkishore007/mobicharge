<div class="main-container container">
		
		
		<div class="row">
		<!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h2 class="title">Shopping Cart</h2>
            <div class="table-responsive form-group">
              
              <?php if(isset($cart_items)): ?>
	              <table class="table table-bordered cart">
	                <thead>
	                  <tr>
	                    <td class="text-center">Image</td>
	                    <td class="text-left">Product Name</td>
	                    <td class="text-left">Quantity</td>
	                    <td class="text-right">Unit Price</td>
	                    <td class="text-right">Total</td>
	                  </tr>
	                </thead>
	                <tbody>
	                 <?php foreach($cart_items as $item): ?>
	                  <tr class='row_<?php echo $item['rowid']; ?>'>
	                    <td class="text-center"><a href="<?php echo base_url('product/'.$item['id']); ?>"><img width="70px" src="<?php echo base_url(); ?>uploads/<?php echo $item['thumbnail']; ?>" alt="<?php echo $item['name']; ?>" title="<?php echo $item['name']; ?>" class="img-thumbnail"></a></td>
	                    <td class="text-left"><a href="product.html"><?php echo ucwords($item['name']); ?></a><br>
	                     </td>
	                  
	                    <td class="text-left" width="200px"><div class="input-group btn-block quantity">
	                        <input type="number" min='0' name="quantity" id='<?php echo $item['rowid']; ?>' value="<?php echo $item['qty']; ?>" size="1" class="form-control">
	                        <span class="input-group-btn">
	                        <button type="submit"  class="btn btn-primary updateCart" data-productid='<?php echo $item['id']; ?>' data-productHash='<?php echo $item['rowid']; ?>' data-productThumb='<?php echo  base_url(); ?>uploads/<?php echo $item['thumbnail']; ?>' data-productName='<?php echo $item['name']; ?>' data-original-title="Update"><i class="fa fa-clone"></i></button>
	                        <button type="button" class="btn btn-danger removeProduct" data-productid='<?php echo $item['id']; ?>' data-productHash='<?php echo $item['rowid']; ?>'  data-productThumb='<?php echo  base_url(); ?>uploads/<?php echo $item['thumbnail']; ?>' data-productName='<?php echo $item['name']; ?>' data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
	                        </span></div></td>
	                    <td class="text-right">Rs.<?php  echo $item['price']; ?></td>
	                    <td class="text-right" id='price_<?php echo $item['rowid']; ?>'>Rs.<?php echo $item['subtotal']; ?></td>
	                  </tr>
	              <?php endforeach; ?>
	                
	                </tbody>
	              </table>
	          <?php else: ?>
	          	<h3>Your cart is empty</h3>
          <?php endif; ?>



            </div>
         
		
		<div class="row">
			<div class="col-sm-4 col-sm-offset-8">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td class="text-right">
								<strong>Sub-Total:</strong>
							</td>
							<td class="text-right cart-price">Rs.<?php echo $total_cart_price; ?></td>
						</tr>
					<!-- 	<tr>
							<td class="text-right">
								<strong>Flat Shipping Rate:</strong>
							</td>
							<td class="text-right">$4.69</td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>Eco Tax (-2.00):</strong>
							</td>
							<td class="text-right">$5.62</td>
						</tr>
						<tr>
							<td class="text-right">
								<strong>VAT (20%):</strong>
							</td>
							<td class="text-right">$34.68</td>
						</tr> -->
						<tr>
							<td class="text-right">
								<strong>Total:</strong>
							</td>
							<td class="text-right cart-price">Rs.<?php echo $total_cart_price; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		 <div class="buttons">
            <div class="pull-left"><a href="<?php echo base_url('shop'); ?>" class="btn btn-primary">Continue Shopping</a></div>
            <div class="pull-right"><a href="<?php echo base_url('checkout'); ?>" class="btn btn-primary">Checkout</a></div>
          </div>
        </div>
        <!--Middle Part End -->
			
		</div>
	</div>