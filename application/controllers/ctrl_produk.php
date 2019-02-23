<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_produk extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('produk_model');
        $this->load->helper(array('form', 'url', 'html'));
    }


	public function index_produk()
	{
		//data yg di ambil dari databse di tampung dalam satu variable $data, kemudian akan di tampilakn di file antawijaya
		$data=array(
            'title'=>'Data',
            'produk' =>$this->produk_model->get_produk(),
        );
		// $data['abouts'] = $this->about_model->get_about();
        $this->load->view('produk_jasa/index_produk', $data);
	}

	// public function add_category()
	// {
	// 	$this->form_validation->set_rules('category','Kategori','required');
		
	// 	if($this->form_validation->run() == FALSE){
	// 		$this->load->view('backend/form_add_category');
	// 	}else{
	// 		$category_data = array (
	// 			'category' => set_value('category')
	// 		);
	// 		$this->product_model->insert_category($category_data);
	// 		redirect('admin/categories');
	// 	}	
	// }

	// public function detail_category($id)
	// {
	// 	$data['categories'] = $this->product_model->detail_category($id);
 //        $this->load->view('backend/category_detail', $data);
	// }

	// public function edit_category($id)
	// {
	// 	$this->form_validation->set_rules('category','Kategori','required');
		
	// 	if($this->form_validation->run() == FALSE){
	// 		$data['category'] = $this->product_model->find_category($id);
	// 		$this->load->view('backend/form_edit_category', $data);
	// 	}else{
	// 		$category_data = array (
	// 			'category' => set_value('category')
	// 		);
	// 		$this->product_model->update_category($id, $category_data);
	// 		redirect('admin/categories');
	// 	}	
	// }

	// public function delete_category($id)
	// {
	// 	$this->product_model->delete_category($id);
	// 	redirect('admin/categorys');	
	// }
}