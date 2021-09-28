<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_interview');
        $this->load->helper('url');
        

        
    }

	public function index()
	{

		$data=array('get_ok'=> $this->M_interview->getPosition()); 
    $this->load->view('tampil_daftar',$data);
    

		if($this->input->post('submit')){ 
        $this->M_interview->add(); 
        redirect('interview/hasil');
        
      
    }}

    public function hasil()
    {
      $data2=array('get_hasil'=> $this->M_interview->gethasil()); 
      $this->load->view('hasil', $data2);
    }
    
	


}
