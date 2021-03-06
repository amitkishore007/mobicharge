
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Add a new product
                        <span class="alert alert-success product-msg">successfully add new porduct,<b> <a href='<?php base_url('product/create'); ?>'>Add another</a></b></span>
                        </h1>
                            

                        <!-- END PAGE TITLE-->
                        

                        <!-- start row -->
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-horizontal form-row-seperated" >
                                    <div class="portlet">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="fa fa-shopping-cart"></i>New Product 
                                                    

                                                </div>
                                            <div class="actions btn-set">
                                                <button type="button" name="back" class="btn btn-secondary-outline">
                                                    <i class="fa fa-angle-left"></i> Back</button>
                                                <button class="btn btn-secondary-outline">
                                                    <i class="fa fa-reply"></i> Reset</button>
                                                <button class="btn btn-success">
                                                    <i class="fa fa-check"></i> Save</button>
                                                <button class="btn btn-success">
                                                    <i class="fa fa-check-circle"></i> Save & Continue Edit</button>
                                                <div class="btn-group">
                                                    <a class="btn btn-success dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                                                        <i class="fa fa-share"></i> More
                                                        <i class="fa fa-angle-down"></i>
                                                    </a>
                                                    <div class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;"> Duplicate </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;"> Delete </a>
                                                        </li>
                                                        <li class="dropdown-divider"> </li>
                                                        <li>
                                                            <a href="javascript:;"> Print </a>
                                                        </li>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tabbable-bordered">
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_general" data-toggle="tab"> General </a>
                                                    </li>
                                        
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_general">
                                                        <div class="form-body">
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Name:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input type="text" class="form-control product_name" name="product[name]" placeholder="">
                                                                       <span class="error name-error text-danger"></span> 
                                                                     </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Description:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <div name="summernote" class='add_product_desc' id="summernote_1"></div>
                                                                    <span class="error desc-error text-danger"></span> 
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Categories:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                     <div class="input-group select2-bootstrap-append">
                                                                        <select id="single-append-text" class="form-control select2-allow-clear product_cat">
                                                                           
                                                                            <option value=''> Choose categroy</option>
                                                                           <?php if(isset($categories)): ?>
                                                                            <?php foreach($categories as $categroy): ?>
                                                                            <option value='<?php echo $categroy->id; ?>'><?php echo $categroy->name; ?></option>
                                                                           <?php  endforeach; ?>
                                                                           <?php endif; ?>

                                                                        </select>

                                                                        <span class="input-group-btn">
                                                                            <button class="btn btn-default" type="button" data-select2-open="single-append-text">
                                                                                <span class="glyphicon glyphicon-search"></span>
                                                                            </button>
                                                                        </span>
                                                                    </div>
                                                                        <span class="error category-error text-danger"></span> 
                                                                </div>
                                                            </div>
                                                          
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">SKU:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control product_sku" name="product[sku]" placeholder=""> 
                                                                    <span class="error sku-error text-danger"></span> 
                                                                </div>
                                                                
                                                                <label class="col-md-2 control-label">Quantity:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-3">
                                                                    <input type="number" class="form-control product_qty" name="product[qty]" placeholder=""> 
                                                                <span class="error qty-error text-danger"></span> 
                                                                </div>


                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Price:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-3">
                                                                    <input id="touchspin_2" type="text" value="0" name="demo2" class="form-control product_price"> 
                                                               <span class="error price-error text-danger"></span> 
                                                                </div>

                                                                <label class="col-md-2 control-label">Shipping cost:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-3">
                                                                    <input id="touchspin_3" type="text" value="0" name="demo2" class="form-control product_shipping"> 
                                                               <span class="error shipping-error text-danger"></span> 
                                                                </div>
                                                            </div>
                                                             <div class="form-group">
                                                                <label class="col-md-2 control-label">Image
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-4">
                                                                    <form id="product_image" method="POST" action='<?php echo base_url('product/upload_image'); ?>' enctype="multipart/form-data">
                                                                      
                                                                                <input type="file" name="file" id='file'> 
                                                                                <span class="error image-error text-danger"></span> 
                                                                            
                                                                          
                                                                                <div class="progressBar">
                                                                                    <div class="bar"></div>
                                                                                    <div class="percent">0%</div>
                                                                                </div>
                                                                    </form>
                                                                    <img src="" class='uploaded_image'>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="col-md-2 control-label">
                                                                         <span class="required"></span>
                                                                </label>

                                                                <div class="col-md-10">
                                                                    <a class="btn dark btn-outline sbold product-image-modal" href="<?php echo base_url('product/get_product_images'); ?>"  data-target="#ajax" data-toggle="modal">Select Image</a>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-md-2 control-label">Status:
                                                                    <span class="required"> * </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <select class="table-group-action-input form-control input-medium product_status" name="product[status]">
                                                                        <option value="">Select...</option>
                                                                        <option value="1">Published</option>
                                                                        <option value="0">Not Published</option>
                                                                    </select>
                                                                    <span class="error status-error text-danger"></span> 
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                            <label class="col-md-2 control-label">
                                                                    <span class="required"> &nbsp; </span>
                                                                </label>
                                                                <div class="col-md-10">
                                                                    <input type="hidden" value='' class='thumbnail' name="thumbnail">
                                                                    <button type="button" data-loading-text="Loading..." class="btn btn-primary btn-lg mt-ladda-btn ladda-button mt-progress-demo add_product" data-style="expand-left">
                                                                        <span class="ladda-label">Submit</span>
                                                                    </button>
                                                                    <h2 class="alert alert-success product-msg">successfully add new porduct,<b> <a href='<?php base_url('product/create'); ?>'>Add another</a></b></h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end row -->

                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->

                 <!--DOC: Aplly "modal-cached" class after "modal" class to enable ajax content caching-->
                    <div class="modal modal-cached fade" id="ajax" role="basic" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="product-ajax-loader text-center">
                                    <img src="<?php echo base_url(); ?>/assets/global/img/loading-spinner-grey.gif" alt="" class="loading">
                                    <span> &nbsp;&nbsp;Loading... </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.modal -->
         
        