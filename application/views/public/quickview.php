<div class="main-container container quickview-container">
		
		 <div class="row">
			 <!--Middle Part Start-->
			 <div id="content" class="col-md-12 col-sm-12">
				
				 <div class="product-view row">
					 <div class="left-content-product col-lg-12 col-xs-12">
						 <div class="row">
							 <div class="content-product-left  col-sm-6 col-xs-12 ">
								 <div class="large-image  ">
									 <img itemprop="image" class="product-image-zoom" src="<?php echo base_url(); ?>uploads/<?php echo $quick_product->thumbnail; ?>" data-zoom-image="<?php echo base_url(); ?>uploads/<?php echo $quick_product->thumbnail; ?>" title="<?php echo $quick_product->title; ?>" >
								 </div>

								 <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider owl2-carousel owl2-theme owl2-loaded">
									 
									 
									 
									 
								<div class="owl2-stage-outer">
								<div class="owl2-stage" style="transform: translate3d(0px, 0px, 0px); transition: 0s; width: 873.332px;">
								<!-- <div class="owl2-item active" style="width: 208.333px; margin-right: 10px;">
								 	<a data-index="0" class="img thumbnail  active" data-image="image/demo/shop/product/J9.jpg" title="Bint Beef">
										 <img src="<?php// echo base_url(); ?>uploads/<?php //echo $quick_product->thumbnail; ?>" title="Bint Beef" alt="Bint Beef">
									 </a>
								</div> -->
								  <!-- <div class="owl2-item active" style="width: 208.333px; margin-right: 10px;">
								  <a data-index="1" class="img thumbnail" data-image="image/demo/shop/product/J6.jpg" title="Bint Beef">
										 <img src="image/demo/shop/product/J6.jpg" title="Bint Beef" alt="Bint Beef">
									 </a>
								  </div> -->
								 <!-- <div class="owl2-item active" style="width: 208.333px; margin-right: 10px;"><a data-index="2" class="img thumbnail" data-image="image/demo/shop/product/J5.jpg" title="Bint Beef">
										 <img src="image/demo/shop/product/J5.jpg" title="Bint Beef" alt="Bint Beef">
									 </a>
								 </div> -->
									<!--  <div class="owl2-item active" style="width: 208.333px; margin-right: 10px;"><a data-index="3" class="img thumbnail" data-image="image/demo/shop/product/J4.jpg" title="Bint Beef">
										 <img src="image/demo/shop/product/J4.jpg" title="Bint Beef" alt="Bint Beef">
									 </a></div> -->
									 </div>
									</div>

									 <div class="owl2-controls"><div class="owl2-nav"><div class="owl2-prev" style="">prev</div><div class="owl2-next" style="">next</div></div><div class="owl2-dots" style="display: none;"></div></div></div>
								 
							 </div>

							 <div class="content-product-right col-sm-6 col-xs-12">
								 <div class="title-product">
									 <h1><?php echo $quick_product->title; ?> </h1>
								 </div>
								 <!-- Review -->
								 <div class="box-review form-group">
									 <div class="ratings">
										 <div class="rating-box">
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
											 <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
										 </div>
									 </div>
									 <a class="reviews_button" href="<?php echo base_url('shop/quickview'); ?>" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews </a>	
								 </div>

								 <div class="product-label form-group">
									 <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
										 <span class="price-new" itemprop="price">Rs.<?php echo $quick_product->price; ?> </span>
										 <!-- <span class="price-old">$122.00 </span> -->
									 </div>
									 <div class="stock"><span>Availability: </span>  <span class="status-stock">In Stock </span></div>
								 </div>

								 <div class="product-box-desc">
									 <div class="inner-box-desc">
										 <div class="price-tax"><span>Shipping cost: </span> Rs.<?php echo $quick_product->shipping; ?> </div>
										 <!-- <div class="reward"><span>Price in reward points: </span> 400 </div> -->
										 <!-- <div class="brand"><span>Brand: </span><a href="#">Apple </a>		 </div> -->
										 <div class="model"><span>Product Code: </span><?php echo $quick_product->sku; ?></div>
										 <!-- <div class="reward"><span>Reward Points: </span> 100 </div> -->
									 </div>
								 </div>


								 <div id="product">
									 <h4>Available Options </h4>
									 <div class="image_option_type form-group required">
										 <label class="control-label">Colors </label>
										 <ul class="product-options clearfix" id="input-option231">
											 <li class="radio">
												 <label>
													 <input class="image_radio" type="radio" name="option[231]" value="33"> 
													 <img src="image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color">				 <i class="fa fa-check"></i>
													 <label>  </label>
												 </label>
											 </li>
											 <li class="radio">
												 <label>
													 <input class="image_radio" type="radio" name="option[231]" value="34"> 
													 <img src="image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color">				 <i class="fa fa-check"></i>
													 <label>  </label>
												 </label>
											 </li>
											 <li class="radio">
												 <label>
													 <input class="image_radio" type="radio" name="option[231]" value="35">  <img src="image/demo/colors/green.jpg" data-original-title="green +$12.00" class="img-thumbnail icon icon-color">				 <i class="fa fa-check"></i>
													 <label>  </label>
												 </label>
											 </li>
											 <li class="selected-option">
											 </li>
										 </ul>
									 </div>
									
								<!-- 	 <div class="box-checkbox form-group required">
										 <label class="control-label">Checkbox </label>
										 <div id="input-option232">
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="36"> Checkbox 1 (+$12.00)  </label>
											 </div>
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="37"> Checkbox 2 (+$36.00)  </label>
											 </div>
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="38"> Checkbox 3 (+$24.00)  </label>
											 </div>
											 <div class="checkbox">
												 <label><input type="checkbox" name="option[232][]" value="39"> Checkbox 4 (+$48.00)  </label>
											 </div>
										 </div>
									 </div> -->

									 <div class="form-group box-info-product">
										 <div class="option quantity">
											 <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
												 <label>Qty </label>
												 <input class="form-control" type="text" name="quantity" value="1">
												 <input type="hidden" name="product_id" value="50">
												 <span class="input-group-addon product_quantity_down">− </span>
												 <span class="input-group-addon product_quantity_up">+ </span>
											 </div>
										 </div>
										 <div class="cart">
											 <input type="button" data-toggle="tooltip" data-productId='<?php echo $quick_product->id; ?>' data-productQty = '1' data-productThumb='<?php echo base_url(); ?>uploads/<?php echo $quick_product->thumbnail; ?>' data-productName='<?php echo $quick_product->title; ?>' id="button-cart" class="btn btn-mega btn-lg addToCart" data-original-title="Add to Cart" value='Add to cart'>
										 </div>
										 <div class="add-to-links wish_comp">
											 <ul class="blank list-inline">
												 <li class="wishlist">
													 <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
													 </a>
												 </li>
												 <li class="compare">
													 <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
													 </a>
												 </li>
											 </ul>
										 </div>

									 </div>

								 </div>
								 <!-- end box info product -->

							 </div>
						 </div>
					 </div>
					
				
				 </div>
				
				 <script type="text/javascript">
					// Cart add remove functions
					var cart = {
						'add': function(product_id, quantity) {
							parent.addProductNotice('Product added to Cart', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
						}
					}

					var wishlist = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to Wishlist', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
						}
					}
					var compare = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to compare', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
						}
					}

					
				</script>

				
			 </div>
			
			
		 </div>
		 <!--Middle Part End-->
	 </div>