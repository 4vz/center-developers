<?php
/***********************************************************************************************************************************************/
class In_Core extends CI_Controller { //semua modul Administrator di dalam setiap aplikasi
	public $contrl='';
	public $contrl2='';
	public $contrl3='';

	//tambahkan yang diperlukan disini
	
    public function __construct() {
        parent::__construct();
        $this->load->library('session');

		if(!$this->session->userdata('usernamex') && !$this->session->userdata('passx')) 
		{
			redirect('Restricted/index');
		}

		//mata-mata
		$this->contrl=$this->uri->segment(1);
		$this->contrl2=$this->uri->segment(2);
		$this->contrl3=$this->uri->segment(3);
    }

}

?>