<?php 



/**
* 
*/
class ProductModel extends CI_Model
{
	



	public function add_product() {

		$info  = $this->input->post();
		// return $info;
	
		$this->load->library('form_validation');

			$output = array();
			$output['status']            = '';
			$output["product_name     "] = '';
			$output["product_desc     "] = '';
			$output["product_price    "] = '';
			$output["product_qty  "    ] = '';
			$output["product_status   "] = '';
			$output["product_sku      "] = '';
			$output["product_shipping "] = '';
			$output["product_thumb "]    = '';
			$output['msg']               = '';
		if ($this->form_validation->run('product_upload_validation')==FALSE) {
		
			$output['status']            = 'false';
			$output["product_name"]      = form_error('title');
			$output["product_desc"]      = form_error('description');
			$output["product_price"]     = form_error('price');
			$output["product_status"]    = form_error('status');
			$output["product_sku"]       = form_error('sku');
			$output["product_qty"]       = form_error('quantity');
			$output["product_shipping "] = form_error('shipping');
			$output["product_thumb"]     = form_error('thumbnail');
			$output["category"]          = form_error('category_id');
			$output['msg']               = '';
			
		} else {


			$info['user_id'] = $this->session->userdata('admin_id');
			$this->db->insert('products',$info);

			if ($this->db->affected_rows()) {
				

				$output['status']            = 'true';
				$output['msg']				 = 'Success';
			

			} else {

				$output['status']            = 'false';
				$output['msg']				 = 'There was an error please try later !';

			}


		}
		// return $info;
			return $output;

	}


	public function edit_product() {

		$info       = $this->input->post();
		$product_id = $this->input->post('product_id');
		// return $info;
		unset($info['product_id']);
		$this->load->library('form_validation');

			$output = array();
			$output['status']            = '';
			$output["product_name     "] = '';
			$output["product_desc     "] = '';
			$output["product_price    "] = '';
			$output["product_qty  "    ] = '';
			$output["product_status   "] = '';
			$output["product_sku      "] = '';
			$output["product_shipping "] = '';
			$output["product_thumb "]    = '';
			$output['msg']               = '';
		if ($this->form_validation->run('product_upload_validation')==FALSE) {
		
			$output['status']            = 'false';
			$output["product_name"]      = form_error('title');
			$output["product_desc"]      = form_error('description');
			$output["product_price"]     = form_error('price');
			$output["product_status"]    = form_error('status');
			$output["product_sku"]       = form_error('sku');
			$output["product_qty"]       = form_error('quantity');
			$output["product_shipping "] = form_error('shipping');
			$output["product_thumb"]     = form_error('thumbnail');
			$output["category"]          = form_error('category_id');
			$output['msg']               = '';
			
		} else {


			$user_id = $this->session->userdata('admin_id');

			// return $info;

			$q = $this->db->where(['user_id'=>$user_id,'id'=>$product_id])->get('products');
			
			if ($this->session->userdata('role')=='superadmin' || $q->num_rows()) {

				
				//perform the update
				$this->db->where(['id'=>$product_id])->update('products',$info);


				if ($this->db->affected_rows()>=0) {
					

					$output['status']            = 'true';
					$output['msg']				 = 'Success';
				

				} else {

					$output['status']            = 'false';
					$output['msg']				 = 'There was an error please try later !';

				}

				

			} else {

				//abort the update
					$output['status']            = 'false';
					$output['msg']				 = 'You do not have permission to !';

					
			}

			// $this->db->insert('products',$info);


		}
		// return $info;
			return $output;

	}





	public function all_products(){

		$this->db->select('products.id as product_id,products.user_id as user_id,products.title,products.price,products.thumbnail,products.created_at,products.status,products.hot_sale,users.username');
		$this->db->from('products');

		$this->db->join('users', 'products.user_id = users.id');
		$this->db->order_by('created_at','DESC');
		$query = $this->db->get();
		return $query->result();

	}


	public function find_product($id) {

	$q = $this->db->where(['id'=>$id,'user_id'=>$this->session->userdata('admin_id')])->get('products');

		if ($q->num_rows()) {
			
			return $q->row();
		}
	}

	public function get_product($id) {

	$q = $this->db->where(['id'=>$id])->get('products');

		if ($q->num_rows()) {
			
			return $q->row();
		}
	}


	public function deleteProduct() {

		$id = (int) $this->input->post('product_id');

		$output = array('status'=>'false','msg'=>'');

		$q = $this->db->where(['id'=>$id])->get('products');
		
		if ($q->num_rows()==1) {
			
			$this->db->where(['id'=>$id])->delete('products');

			if ($this->db->affected_rows()==1) {
				
				$output['status'] = 'true';
				$output['msg'] = 'Successfuly deleted';
			}
		}

		return $output;

	}


	public function find_hot_sale() {

		$q = $this->db->where(['hot_sale'=>1,'status'=>1])->get('products');
		
		if ($q->num_rows()) {
			
			return $q->result();
		}
	}


	public function set_hote_sale() {

		$info = $this->input->post();

		$product_id = (int) $info['id'];

		$output = 'false';

		$q = $this->db->where(['id'=>$product_id])->get('products');
		
			if ($q->num_rows()) {

					if ($info['change']=='active') {

						// update hot sale to 1
							
							$this->db->where(['id'=>$product_id])->update('products',['hot_sale'=>1]);

							if ($this->db->affected_rows()>=0) {
								
								$output = 'true';
							}
						

					} else {

						// update hot sale to zero
						$this->db->where(['id'=>$product_id])->update('products',['hot_sale'=>0]);

							if ($this->db->affected_rows()>=0) {
								
								$output = 'true';
							}
					}
					
				} else {

					$output = 'error';
				}


				return $output;				

	}


	public function set_status() {

		$info = $this->input->post();

		$product_id = (int) $info['id'];

		$output = 'false';

		$q = $this->db->where(['id'=>$product_id])->get('products');
		
			if ($q->num_rows()) {

					if ($info['change']=='active') {

						// update hot sale to 1
							
							$this->db->where(['id'=>$product_id])->update('products',['status'=>1]);

							if ($this->db->affected_rows()>=0) {
								
								$output = 'true';
							}
						

					} else {

						// update hot sale to zero
						$this->db->where(['id'=>$product_id])->update('products',['status'=>0]);

							if ($this->db->affected_rows()>=0) {
								
								$output = 'true';
							}
					}
					
				} else {

					$output = 'error';
				}


				return $output;				

	}



	public function get_cat_products($cat_id,$limit,$offset){

		$q =  $this->db->where(['category_id'=>$cat_id])->order_by('created_at','DESC')->limit($limit,$offset)->get('products');

		if ($q->num_rows()) {
			
			return $q->result();
		}

	}


	public function getLatestProducts() {

		$q = $this->db->where(['status'=>1])->order_by('created_at','DESC')->limit(20)->get('products');
		if ($q->num_rows()) {
			
			return $q->result();
		}
	}


	public function search() {

		$info = $this->input->post();

		$product = $info['product'];

		$cat_id = $info['cat_id'];

		$this->db->like('title',$product);
		
		$this->db->like('category_id',$cat_id);
		
		$this->db->limit(10);
		
		$q = $this->db->get('products');
	
		$output = '';

		if ($q->num_rows()) {
	
				
			foreach ($q->result() as $product) {
				
				$output .='<li>'.$product->title.'</li>';

			} 
		}  
		echo $output;
	}


	public function searchProducts($product,$cat) {

		$this->db->like('title',$product);
		$this->db->like('category_id',$cat);
		
		$q = $this->db->get('products');

		if ($q->num_rows()) {
			
			return $q->result();
		}

	}


	public function upload_product_excel() {

		//Path of files were you want to upload on localhost (C:/xampp/htdocs/ProjectName/uploads/excel/)	 
         $configUpload['upload_path'] = './excel/';
         $configUpload['allowed_types'] = 'xls|xlsx|csv';
         $configUpload['max_size'] = '5000';
         $this->load->library('upload', $configUpload);
         $this->upload->do_upload('userfile');	
         $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
         $file_name = $upload_data['file_name']; //uploded file name
		 $extension=$upload_data['file_ext'];    // uploded file extension
		
		//$objReader =PHPExcel_IOFactory::createReader('Excel5');     //For excel 2003 
		 $objReader= PHPExcel_IOFactory::createReader('Excel2007');	// For excel 2007 	  
          //Set to read only
          $objReader->setReadDataOnly(true); 		  
        //Load excel file
		 $objPHPExcel=$objReader->load('./excel/'.$file_name);		 
         $totalrows=$objPHPExcel->setActiveSheetIndex(0)->getHighestRow();   //Count Numbe of rows avalable in excel      	 
         $objWorksheet=$objPHPExcel->setActiveSheetIndex(0);                
          //loop from first data untill last data
          for($i=2;$i<=$totalrows;$i++)
          {
              $FirstName= $objWorksheet->getCellByColumnAndRow(0,$i)->getValue();			
              $LastName= $objWorksheet->getCellByColumnAndRow(1,$i)->getValue(); //Excel Column 1
			  $Email= $objWorksheet->getCellByColumnAndRow(2,$i)->getValue(); //Excel Column 2
			  $Mobile=$objWorksheet->getCellByColumnAndRow(3,$i)->getValue(); //Excel Column 3
			  $Address=$objWorksheet->getCellByColumnAndRow(4,$i)->getValue(); //Excel Column 4
			  $data_user=array('FirstName'=>$FirstName, 'LastName'=>$LastName ,'Email'=>$Email ,'Mobile'=>$Mobile , 'Address'=>$Address);
			  $this->excel_data_insert_model->Add_User($data_user);
              
						  
          }
             unlink('./excel/'.$file_name); //File Deleted After uploading in database .			 
           return  redirect(base_url() . "admin/product");
	           
	}


}