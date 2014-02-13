<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Hmvc extends MX_Controller {
 
	function __construct()
    {
        parent::__construct();
    }
	
	public function index()
	{
		$this->load->view('hmvc_view');
	}
}
/* End of file hmvc.php */
/* Location: ./application/controllers/hmvc.php */
