<?php 



/**
* 
*/
class ShopModel extends CI_Model
{
	

	public function add_to_cart() {

		$info = $this->input->post();

		$product_id = $info['product_id'];

		$q = $this->db->where(['id'=>$product_id])->get('products');

		if ($q->num_rows()) {
				
				$product = $q->row();

				$data = array(
			     
			        'id'      => $product->id,
			        'qty'     => $info['product_qty'],
			        'price'   => $product->price,
			        'name'    => $product->title,
			        'thumbnail'=>$product->thumbnail
			        
				);

				$q1 = $this->cart->insert($data);

				if ($q1) {
		

					$output = 'success';

				} else {

					$output = 'error';

				}


		
		} else {

			$output = 'error';


		}

		return $output;

	}


	public function getCartItem() {

		return $this->cart->contents();
	}

	public function get_cart() {

		$cart_items = $this->getCartItem();

				$output = '';

				$array = array('output'=>'','items'=>0,'price'=>'');

		if (count($cart_items)) {
			// fetch the cart items and send back to ajax request
				$output .= "<li>";
				$output .= "<table class='table table-striped'>";
				$output .= "<tbody>";
	
			foreach ($cart_items as $item) {

				$output .='<tr id="row_{$item["rowid"]}">';
				$output .='<td class="text-center" style="width:70px">';
				$output .='<a href=""> <img src=" '.base_url().'uploads/'.$item['thumbnail'].'" style="width:70px" class="preview"> </a>';
				$output .='</td>';
				$output .='<td class="text-left"> <a class="cart_product_name" href="'.base_url().'product/'.$item['id'].'">'.$item['name'].'</a> </td>';
				$output .='<td class="text-center"> x'.$item['qty'].'</td>';
				$output .='<td class="text-center"> Rs.'.$item['subtotal'].' </td>';
				$output .='<td class="text-right">';
				$output .='<a href="'.base_url().'cart" class="fa fa-edit">Edit</a>';
				$output .='</td>';
				$output .='<td class="text-right">';
				$output .='<a data-productHash="'.$item['rowid'].'" data-productId="'.$item['id'].'" data-productName="' .$item['name'].'" data-productThumb="'.base_url().'uploads/'.$item['thumbnail'].'" class="fa fa-times fa-delete removeProduct"></a>';
				$output .='</td>';
				$output .='</tr>';
			

			}
				$output .= '</tbody>';
				$output .= '</table>';
				$output .= '</li>';

				$output .='<li>';
				$output .='<div>';
				$output .='<table class="table table-bordered">';
				$output .='<tbody>';
				$output .='<tr>';
				$output .='<td class="text-left"><strong>Sub-Total</strong></td>';
				$output .='<td class="text-right">Rs.'.$this->cart->total().'</td>';
				$output .='</tr>';
			
				$output .='<tr>';
				$output .='<td class="text-left"><strong>Total</strong></td>';
				$output .='<td class="text-right">Rs.'.$this->cart->total().'</td>';
				$output .='</tr>';
				$output .='</tbody>';
				$output .='</table>';
				$output .='<p class="text-right"> <a class="btn view-cart" href="'.base_url().'cart"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="'.base_url().'checkout"><i class="fa fa-share"></i>Checkout</a> </p>';
				$output .='</div>';
				$output .='</li>';



		} else {

			$output = '<span class="text-center"> Nothing in your shopping cart</span>';


		}
		$array['output'] = $output;
		$array['items'] = $this->cart->total_items();
		$array['price'] = $this->cart->total();


		return $array;
	}


	public function create_user() {

		

		$this->load->library('form_validation');

		$output = array('status'=>'false','name'=>'','email'=>'','phone'=>'','password'=>'','retype'=>'','state'=>'','city'=>'','address'=>'','zipcode'=>'');

		if ($this->form_validation->run('user_registration_form_validation')==FALSE) {

			 	$this->form_validation->set_error_delimiters('', '');
				$output['name']     = form_error('name');
				$output['email']    = form_error('email');
				$output['phone']    = form_error('phone');
				$output['password'] = form_error('password');
				$output['retype']   = form_error('retype-password');
				$output['state']    = form_error('state');
				$output['city']     = form_error('city');
				$output['address']  = form_error('address');
				$output['zipcode']  = form_error('zipcode');


		} else {

			
			unset($_POST['retype-password']);
			$info = $this->input->post();
			$info['username'] = $info['name'];
			unset($info['name']);	
			
			$info['password'] = md5($info['password']);
			$info['user_type'] = 'user';


			$this->db->insert('users',$info);

			if ($this->db->affected_rows()==1) {
				
				$q = $this->db->where(['email'=>$info['email']])->get('users');
				$user = $q->row();
				$data = array(
					'is_logged_in'=>1,
					'username'=>$user->username,
					'user_id'=>$user->id,
					'user_email'=>$user->email
					);

				$this->session->set_userdata($data);
				
				$output['status'] = 'success';
			} 
		}

		return $output;



	}

}



		
	
		
