<?php
class antawijaya extends CI_Controller{
    function __construct(){
        parent::__construct();
                
        // $this->load->model('aktakelahiran_model');
       // $this->load->library('upload');
        $this->load->helper(array('form', 'url', 'html'));
        
        $this->load->library('upload','table');

    } 
    //artinya ini mi yang akan jalan saat aplikasi dibuka
    function index(){
        $this->load->view('index');
    }
    function antawijayatc(){
        $this->load->view('web/antawijaya');
    }
     function visimisi(){
        $this->load->view('web/visimisi');
    }
     function nilai(){
        $this->load->view('web/nilai');
    }
     function sasaran(){
        $this->load->view('web/sasaran');
    }

    function sasaran1(){
        $this->load->view('web/sasaran1');
    }
   function sasaran2(){
        $this->load->view('web/sasaran2');
    }
       function sasaran3(){
        $this->load->view('web/sasaran3');
    }
       function sasaran4(){
        $this->load->view('web/sasaran4');
    }
       function sasaran5(){
        $this->load->view('web/sasaran5');
    }
       function sasaran6(){
        $this->load->view('web/sasaran6');
    }
       function sasaran7(){
        $this->load->view('web/sasaran7');
    }
        function metodologi(){
        $this->load->view('web/metodologi');
    }
            function filosofi(){
        $this->load->view('web/filosofi');
    }
            function kontak(){
        $this->load->view('web/kontak');
    }
    function produk(){
        $this->load->view('web/produk');
    }
    function single(){
        $this->load->view('web/single');
    }

    function tim(){
        $this->load->view('web/tim');
    }
     function registrasi(){
        $this->load->view('web/form_registrasi');
    }
 

    function editkelahiran($id){
            $data=array(
            'title'=>'Edit Kelahiran',
            'data_kelahiran'=>$this->aktakelahiran_model->getDataKelahiranEdit($id),
        );
        $this->load->view('admin/edit_kelahiran',$data);
    }
    function updatekelahiran($id){
            $data=array(
            'title'=>'Edit Kelahiran',
            'data_kelahiran'=>$this->aktakelahiran_model->getDataKelahiranEdit($id),
        );
        $this->load->view('admin/update_kelahiran',$data);
    } 
    
    function tambah(){
      $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkpl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nm', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('kab', 'Kabupaten', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/aktakelahiran');
      } else {

        $data=array(
            'nik'=>$this->input->post('nik'),
            'nm_kpl_keluarga'=>$this->input->post('nmkpl'),
            'nama_ibu'=>$this->input->post('nmibu'),
            'nm_lengkap'=>$this->input->post('nm'),
            'jk'=>$this->input->post('jk'),
            'tmpt_dilahirkan'=>$this->input->post("ttl"),
            'kabupaten'=>$this->input->post("kab"),
            'tgl_lahir'=>$this->input->post("tgl"),
            'tgl_daftar'=>date("Y-m-d H:i:s"),
            'status'=>$this->input->post("status"),
        );

        $nik=$this->input->post("nik");
        $this->aktakelahiran_model->insertData('akta_kelahiran',$data);
        $sql="insert berkas(nik) values (?)";
        $this->db->query($sql,array($nik));

        $this->session->set_flashdata('notif','Pendaftaran Berhasil');
        redirect("Aktakelahiran");
        }
    }

    function simpanedit($id){
      $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkpl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nm', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('kab', 'Kabupaten', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('admin/aktakelahiran');
      } else {

        $data=array(
            'nik'=>$this->input->post('nik'),
            'nm_kpl_keluarga'=>$this->input->post('nmkpl'),
            'nama_ibu'=>$this->input->post('nmibu'),
            'nm_lengkap'=>$this->input->post('nm'),
            'jk'=>$this->input->post('jk'),
            'tmpt_dilahirkan'=>$this->input->post("ttl"),
            'kabupaten'=>$this->input->post("kab"),
            'tgl_lahir'=>$this->input->post("tgl"),
            'tgl_ambil'=>$this->input->post("tgll"),
            'status'=>$this->input->post("status"),
        );
        
        $this->aktakelahiran_model->updateDatab('akta_kelahiran',$data, $id);
        $this->session->set_flashdata('notif','Edit Berhasil');
        redirect("Aktakelahiran");
      }
    }

    function hapus(){
        $id['nik'] = $this->uri->segment(3);
        $this->aktakelahiran_model->deleteData('akta_kelahiran',$id);

        $this->session->set_flashdata('notif','Hapus Data Berhasil');
        redirect("Aktakelahiran");
    }

    function cari() {
       $data['data_kelahiran']=$this->aktakelahiran_model->caridata();
       if($data['data_kelahiran']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Aktakelahiran','kembali');
          }
          else {
             $this->load->view('admin/aktakelahiran',$data); 

          }
    }

    function indexdaftar(){
      $data=array(
            'title'=>'Data Kelahiran',
            'data_kelahiran' =>$this->aktakelahiran_model->getAllDataKelahiran(),
      
        );
        $this->load->view('web/daftar_kelahiran',$data);
    }

    function indexdaftar1(){
      $data=array(
            'title'=>'Data Kelahiran',
            'data_kelahiran' =>$this->aktakelahiran_model->getAllDataKelahiran(),
      
        );
        $this->load->view('admin/daftar_kelahiran',$data);
    }

    function daftarkelahiran(){
      $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkpl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nm', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('kab', 'Kabupaten', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('web/daftar_kelahiran');
      } else {
        $data=array(
            'nik'=>$this->input->post('nik'),
            'nm_kpl_keluarga'=>$this->input->post('nmkpl'),
            'nama_ibu'=>$this->input->post('nmibu'),
            'nm_lengkap'=>$this->input->post('nm'),
            'jk'=>$this->input->post('jk'),
            'tmpt_dilahirkan'=>$this->input->post("ttl"),
            'kabupaten'=>$this->input->post("kab"),
            'tgl_lahir'=>$this->input->post("tgl"),
            'tgl_daftar'=>date("Y-m-d H:i:s"),
            'status'=>$this->input->post("sts"),
        );

        $nik=$this->input->post("nik");
        $this->aktakelahiran_model->insertData('akta_kelahiran',$data);
        $sql="insert berkas(nik) values (?)";
        $this->db->query($sql,array($nik));
        redirect("upload_kelahiran");
      }
    }

    function daftarkelahiran1(){
      $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
      $this->form_validation->set_rules('nmkpl', 'Nama Ayah', 'required');
      $this->form_validation->set_rules('nmibu', 'Nama Ibu', 'required');
      $this->form_validation->set_rules('nm', 'Nama Lengkap', 'required');
      $this->form_validation->set_rules('kab', 'Kabupaten', 'required');

      if ($this->form_validation->run() == FALSE) {
        $this->load->view('web/daftar_kelahiran');
      } else {
        $data=array(
            'nik'=>$this->input->post('nik'),
            'nm_kpl_keluarga'=>$this->input->post('nmkpl'),
            'nama_ibu'=>$this->input->post('nmibu'),
            'nm_lengkap'=>$this->input->post('nm'),
            'jk'=>$this->input->post('jk'),
            'tmpt_dilahirkan'=>$this->input->post("ttl"),
            'kabupaten'=>$this->input->post("kab"),
            'tgl_lahir'=>$this->input->post("tgl"),
            'tgl_daftar'=>date("Y-m-d H:i:s"),
            'status'=>$this->input->post("sts"),
        );

        $nik=$this->input->post("nik");
        $this->aktakelahiran_model->insertData('akta_kelahiran',$data);
        $sql="insert berkas(nik) values (?)";
        $this->db->query($sql,array($nik));
        redirect("upload_kelahiran/index1");
      }
    }

    function cariweb() {
       $data['monitoring_kelahiran']=$this->aktakelahiran_model->caridata();
       if($data['monitoring_kelahiran']==null) {
          print 'Maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('Aktakelahiran/indexmonitoring','kembali');
          }
          else {
             $this->load->view('web/carimonitoring_kelahiran',$data); 

          }
    }

    function bantuankelahiran()
    {
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->view('/web/bantuan_kelahiran');
    }

  
    function indexmonitoring() {
        $data['monitoring_kelahiran'] = $this->aktakelahiran_model->getAllDataKelahiran();
        $this->load->view('web/monitoring_kelahiran',$data);
  
    }
}