<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('form','url');
	}

	public function index()
	{
		$this->form_validation->set_rules('fullname','Nama Lengkap','required');
		$this->form_validation->set_rules('email','Email','required|is_unique[users.email]');
		$this->form_validation->set_rules('telp','No Telepon','required|numeric|is_unique[users.telp]');
		$this->form_validation->set_rules('username','Username','required|alpha_numeric|min_length[5]|max_length[20]|is_unique[users.username]');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|matches[repassword]|min_length[8]|max_length[24]');
		$this->form_validation->set_rules('repassword','Konfirmasi Password','required|alpha_numeric');
		$this->form_validation->set_rules('gender','Jenis Kelamin','required');
		$this->form_validation->set_rules('address','Alamat','required');
		$this->form_validation->set_rules('zip_code','Kode Pos','required|numeric|max_length[5]');
		$this->form_validation->set_rules('province','Provinsi','required');
		$this->form_validation->set_rules('regency','Kabupaten/Kota','required');
		$this->form_validation->set_rules('district','Kecamatan','required');
		
		if($this->form_validation->run() == FALSE){
			$data['provinces'] = $this->user_model->get_province();
			$this->load->view('form_register', $data);
		}else{
			$user_data = array (
				'id' => $this->user_model->get_user_id(),
				'fullname' => set_value('fullname'),
				'email' => set_value('email'),
				'telp' => set_value('telp'),
				'username' => set_value('username'),
				'password' => set_value('password'),
				'gender' => set_value('gender'),
				'address' => set_value('address'),
				'zip_code' => set_value('zip_code'),
				'province_id' => set_value('province'),
				'regency_id' => set_value('regency'),
				'district_id' => set_value('district'),
				'group' => '2',
				'signup_date' => date('Y-m-d')
			);
			$this->user_model->register($user_data);
			$valid_user = $this->user_model->check_credential();
			$this->session->set_userdata('id',$valid_user->id);
			$this->session->set_userdata('username',$valid_user->username);
			$this->session->set_userdata('group',$valid_user->group);
			
			switch($valid_user->group){
				case 1 :
				redirect('admin/dashboard'); 
				break;
				case 2 :
				redirect(base_url()); 
				break;
				default: 
				break;
			}
		}
	}

	// public function authentication()
	// {
	// 	include_once APPPATH."libraries/google-api-php-client/Google_Client.php";
	// 	include_once APPPATH."libraries/google-api-php-client/contrib/Google_Oauth2Service.php";
		
	// 	// Google Project API Credentials
	// 	$clientId = '191289730969-ignh2dlje7ncf6rs1pu4h1f93hbchat2.apps.googleusercontent.com';
 //        $clientSecret = 'MANPfqF-5xWRSwPgHwZg4OX9';
 //        $redirectUrl = 'http://localhost/proyek2/index.php/register/authentication';
		
	// 	// Google Client Configuration
 //        $gClient = new Google_Client();
 //        $gClient->setApplicationName('Proyek2');
 //        $gClient->setClientId($clientId);
 //        $gClient->setClientSecret($clientSecret);
 //        $gClient->setRedirectUri($redirectUrl);
 //        $google_oauthV2 = new Google_Oauth2Service($gClient);

 //        if (isset($_REQUEST['code'])) {
 //            $gClient->authenticate();
 //            $this->session->set_userdata('token', $gClient->getAccessToken());
 //            redirect($redirectUrl);
 //        }

 //        $token = $this->session->userdata('token');
 //        if (!empty($token)) {
 //            $gClient->setAccessToken($token);
 //        }

 //        if ($gClient->getAccessToken()) {
 //            $userProfile = $google_oauthV2->userinfo->get();
 //            // Preparing data for database insertion
 //            $userData = array (
 //            	'fullname' => $userProfile['given_name'] . ' ' . $userProfile['family_name'],
 //            	'email' => $userProfile['email']
 //            	);
 //            $check_user = $this->user_model->check_user($userData);
 //            if($check_user == FALSE){
	//             $data['userData'] = $userData;
	//             $this->session->set_userdata('userData',$userData);
	//             $data['provinces'] = $this->user_model->get_province();
	//             $this->load->view('form_register', $data);
	//         }else{
 //            	$this->session->set_userdata('id',$check_user->id);
	// 			$this->session->set_userdata('username',$check_user->username);
	// 			$this->session->set_userdata('group',$check_user->group);
				
	// 			switch($check_user->group){
	// 				case 1 :
	// 				redirect('admin/dashboard'); 
	// 				break;
	// 				case 2 :
	// 				redirect(base_url()); 
	// 				break;
	// 				default: 
	// 				break;
	// 			}
	//         }
 //        } else {
 //            $this->load->view('form_login');
 //        }
	// }

	public function get_data()
	{
		$modul=$this->input->post('modul');
		$id=$this->input->post('id');
		if($modul=="regency"){
		echo $this->user_model->get_regency($id);
		} else if($modul=="district") {
		echo $this->user_model->get_district($id);
		}
	}
}