<!-- Block slideshow  -->

	<section class="so-slideshow ">
		<?php if(isset($slides)): ?>
		<div id="so-slideshow">
			<div class="module slideshow no-margin">
				<div class="yt-content-slider yt-content-slider--arrow1"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"  data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
					<?php foreach($slides as $slide): ?>
					<div class="yt-content-slide">
						<a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo $slide->slide; ?>" alt="slider1" class="img-responsive"></a>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="loadeding"></div>
			</div>
		<?php endif; ?>
			
		</div>

		<div class="module static-image">
			<ul class="eg-list-float blank">
				<li>
					<div class="banners">
						<div>
							<a href="#"><img src="<?php echo base_url(); ?>assets/public/image/demo/cms/home6/image-1-index9.jpg" alt="banner1"></a>
						</div>
					</div>
				</li>
				<li class="hidden-xs">
					<div class="banners">
						<div>
							<a href="#"><img src="<?php echo base_url(); ?>assets/public/image/demo/cms/home6/image-2-index9.jpg" alt="banner1"></a>
						</div>
					</div>
				</li>
				<li class="hidden-xs">
					<div class="banners">
						<div>
							<a href="#"><img src="<?php echo base_url(); ?>assets/public/image/demo/cms/home6/image-2-index9.jpg" alt="banner1"></a>
						</div>
					</div>
				</li>
				
			</ul>
		</div>		
	</section>
	<!-- //Block slideshow  -->
	
	<!-- Main Container  -->
	<div class="main-container ">
		<div class="container">
		<div class="row">
			<div id="content-top" class="clearfix" >
				
					<div class="module customhtml ">
						<div class="modcontent clearfix">
							<div class="services-v1">
								<div class="policy policy1 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span>
										<h2>30 days return</h2><a href="#">money back</a>
									</div>
								</div>
								<div class="policy policy2 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#"><h2>free shipping</h2>on all orders over Rs.99</a>
									</div>
								</div>
								<div class="policy policy3 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#"><h2>lowest price</h2>guarantee </a>
									</div>
								</div>
								<div class="policy policy4 col-lg-3 col-md-3 col-sm-6 col-xs-12">
									<div class="policy-inner"><span class="ico-policy"></span><a href="#"><h2>safe shopping</h2>guarantee </a>
									</div>
								</div>
							</div>
						</div>
					</div>
						
			</div>
				
			<div id="content" class="clearfix">
				<div class="col-xs-12 clearfix">
					<div class="module tab-slider titleLine">
					
						<div id="so_listing_tabs_1" class="so-listing-tabs first-load module">
							<div class="loadeding"></div>
							<div class="ltabs-wrap ">
								<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="1" data-md="1" data-sm="1" data-xs="1" data-margin="0">
									<!--Begin Tabs-->
									<div class="ltabs-tabs-wrap tabs-wrap__Line"> 
									<span class="ltabs-tab-selected">	</span> <span class="ltabs-tab-arrow">▼</span>
										<div class="item-sub-cat  item-sub-cat__divided">
											<ul class="ltabs-tabs cf product-cat-one">
											<?php if(isset($home_categories)): ?>
											<?php $i=1; ?>

											<?php foreach ($home_categories as $home_category) : ?>
												<?php if($home_category->type=='one'): ?>	
													<li class="ltabs-tab <?php echo $i==1 ? 'tab-sel' : ''; ?>" data-category-id="<?php echo $home_category->cat_id; ?>" data-active-content=".items-category-<?php echo $home_category->cat_id; ?>"> <span class="ltabs-tab-label"><?php echo $home_category->name; ?>					</span> </li>
												<?php endif; ?>
											<?php $i++; endforeach; ?>
												<!-- <li class="ltabs-tab " data-category-id="62" data-active-content=".items-category-62"> <span class="ltabs-tab-label">Electronics		</span> </li>
												<li class="ltabs-tab " data-category-id="63" data-active-content=".items-category-63"> <span class="ltabs-tab-label">Sports &amp; Outdoors	</span> </li>
											 -->
											<?php endif; ?>
											</ul>
										</div>
									</div>
									<!-- End Tabs-->
								</div>
								<div class="ltabs-items-container">
									<!--Begin Items-->
									
									<?php if(isset($home_categories)): ?>
										<?php $i=1; ?>
										<?php foreach ($home_categories as $home_category) : ?>
											<?php if($home_category->type=='one'): ?>
											<div class="ltabs-items product-one <?php echo $i==1 ? 'ltabs-items-selected' : ''; ?>  items-category-<?php echo $home_category->cat_id; ?> products-list grid" data-total="10">
												<div class="ltabs-loading"></div>
												
											</div>
										<?php endif; ?>
										<?php $i++;  endforeach; ?>
									<?php endif; ?>
										
									
								
								</div>
								<!--End Items-->
								
								
							</div>
							
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		</div>
	</div>
	<!-- //Main Container -->
	
	<!-- Block Spotlight1  -->
	
	
	<!-- //Block Spotlight1  -->
<div class="module static-image module--5x">
<div class="banners">
	<div>
	<?php if(isset($banner_shop_category)): $i=1; ?>	
		<?php foreach($banner_shop_category as $banner): ?>
			
				<div class="banner htmlconten<?php echo $banner->view_order; ?> col-lg-4 col-md-4 col-sm-6 col-xs-12">
					<div class=banners>
						<div>
							<a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo $banner->banner; ?>"></a>
						</div>
					</div>
				</div>
		
			
		<?php endforeach; ?>

	<?php endif; ?>
		
		
	
	</div>
</div>
</div>
	
	
	
	
	<!-- Block Spotlight2  -->
	<section class="so-spotlight2">
		<div class="container">
			<div class="row">
					<div class="col-xs-12">
						
					<div class="module tab-slider titleLine">
					<h3 class="modtitle">New Arrivals</h3>
					<div id="so_listing_tabs_2" class="so-listing-tabs first-load module">
						<div class="loadeding"></div>
						<div class="ltabs-wrap">
						<div class="ltabs-tabs-container" data-delay="300" data-duration="600" data-effect="starwars" data-ajaxurl="" data-type_source="0" data-lg="4" data-md="3" data-sm="2" data-xs="1"  data-margin="30">
							<!--Begin Tabs-->
							<div class="ltabs-tabs-wrap"> 
							<span class="ltabs-tab-selected">	</span> <span class="ltabs-tab-arrow">▼</span>
								<div class="item-sub-cat item-sub-cat__right ">
									<ul class="ltabs-tabs cf product-cat-two">
											<?php $j = 1; ?>
											<?php if(isset($home_categories)): ?>


											<?php foreach ($home_categories as $home_category) : ?>
												<?php if($home_category->type=='two'): ?>	
													<li class="ltabs-tab <?php echo ($j==1) ? 'tab-sel' : ''; ?>" data-category-id="<?php echo $home_category->cat_id; ?>" data-active-content=".items-category-<?php echo $home_category->cat_id; ?>"> <span class="ltabs-tab-label"><?php echo $home_category->name; ?>					</span> </li>
												<?php $j++; endif; ?>
											<?php  endforeach; ?>
												
											<?php endif; ?>
											</ul>
								</div>
							</div>
							<!-- End Tabs-->
						</div>
						<div class="ltabs-items-container">
							<!--Begin Items-->
							

								<?php if(isset($home_categories)): ?>
										<?php $k=1; ?>
										<?php foreach ($home_categories as $home_category) : ?>
											<?php if($home_category->type=='two'): ?>
											<div class="ltabs-items product-two <?php echo $k==1 ? 'ltabs-items-selected' : ''; ?>  items-category-<?php echo $home_category->cat_id; ?> products-list grid" data-total="10">
												<div class="ltabs-loading"></div>
												
											</div>
										<?php $k++; endif; ?>
										<?php   endforeach; ?>
								<?php endif; ?>
							
						</div>
						<!--End Items-->
						
						
						</div>
					
					</div>
					
					</div>
			
						<div class="module static-image module--5x">
						<?php if(isset($banner_shop_arrival)): ?>
							<?php foreach($banner_shop_arrival as $arrival_banner): ?>
								<div class="banners">
									<div>
										<a href="#"><img src="<?php echo base_url(); ?>uploads/<?php echo $arrival_banner->banner; ?>" alt="banner1"></a>
									</div>
								</div>
						<?php endforeach; ?>
						<?php endif; ?>
						
						</div>
						
						<!-- <div class="module titleLine module--5x">
							<h3 class="modtitle">COLLECTIONS</h3>
							<div class="modcontent clearfix">
								<div class="yt-content-slider list-collections--home6"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="6" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
									<div class="list-collections--item collection_0">
										<div class="list-collections--box"><a href="#">Furniture</a> </div>
									</div>
									<div class="list-collections--item collection_1">
										<div class="list-collections--box"><a href="#">Gift idea</a> </div>
									</div>
									<div class="list-collections--item collection_2">
										<div class="list-collections--box"><a href="#">Cool gadgets</a> </div>
									</div>
									<div class="list-collections--item collection_3">
										<div class="list-collections--box"><a href="#">Outdoor activities</a> </div>
									</div>
									<div class="list-collections--item collection_4">
										<div class="list-collections--box"><a href="#">Accessories for</a> </div>
									</div>
									<div class="list-collections--item collection_5">
										<div class="list-collections--box"><a href="#">Women world</a> </div>
									</div>
									
								</div>
								
								
							</div>
						</div> -->
						
						<div class="module titleLine module--4x">
							<h3 class="modtitle">Hot Sale</h3>
							<div class="modcontent clearfix">
								<div class="so-basic-products products-list product-style__thumb1 grid row">
									<?php if (isset($hot_sale)) : ?>
										<?php foreach ($hot_sale as $sl_product) :  ?>
										<!--Begin Items-->
										<div class="ltabs-item product-layout col-md-4 col-sm-6 col-xs-12">
											<div class="product-item-container">
												<div class="left-block">
													<a href="#" class="product-image-container" title="Basem rame facmer chuma">
														<img src="<?php echo base_url(); ?>uploads/<?php echo $sl_product->thumbnail; ?>"  alt="<?php echo $sl_product->title; ?>" class="img-responsive" />
													</a>
													
												</div>
												<div class="right-block">
													<div class="caption">
														<h4><a href="#"><?php echo $sl_product->title; ?></a></h4>		
														<div class="ratings">
															<div class="rating-box">
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
																<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
															</div>
														</div>
																			
														<div class="price">
															<span class="price-new">Rs.<?php echo $sl_product->price; ?></span> 
															<?php if(isset($sl_product->compare_price)): ?>
															<span class="price-old">Rs.<?php echo $sl_product->compare_price; ?></span>	
															<?php endif; ?>	
														</div>
													</div>
													
													  <div class="button-group">
														<button class="addToCart" type="button" data-productId='<?php echo $sl_product->id; ?>' data-productQty = '1' data-productThumb='<?php echo base_url(); ?>uploads/<?php echo $sl_product->thumbnail; ?>' data-productName='<?php echo $sl_product->title; ?>'><i class="fa fa-shopping-cart"></i> <span class="button-group__text addToCartTxt">Add to Cart</span></button>
														<button class="wishlist" type="button" data-productId='<?php echo $sl_product->id; ?>' ><i class="fa fa-heart"></i>  <span class="button-group__text">Add Wish List</span></button>
														<button class="compare" type="button" data-productId='<?php echo $sl_product->id; ?>' ><i class="fa fa-exchange"></i>  <span class="button-group__text">Add Compare </span></button>
													  </div>
												</div><!-- right block -->
											</div>
										</div>
										<!--//End Items-->
									<?php endforeach; ?>
								<?php endif; ?>
									
								
								</div>
							</div>
						</div>
						
						
					</div>
					
			</div>
		</div>
	</section>
	<!-- //Block Spotlight2  -->
	