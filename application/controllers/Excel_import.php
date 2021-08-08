<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_import extends CI_Controller {
public function __construct(){
	parent::__construct();
	$this->load->library('form_validation');
}

public function index()
{

	$this->load->view('excel_import');
}

public function import_data(){

	
	 $config= array('upload_path'=>FCPATH.'upload','allowed_types'=>'xls');
	 $this->library('upload',$config);
      if ( ! $this->upload->do_upload('file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('excel_import', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('excel_import', $data);
                }
}

}


