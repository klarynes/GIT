<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Pages extends MX_Controller {

	function __construct() {
		parent::__construct();
		//$this->load->model('main_model', 'main');
	}	
	function page($pagename = 'index')
	{

		$data['name'] = $pagename;
		$this->load->view('header_view', $data);
		
		if($pagename == 'index'){
			$this->load->view('index_view', $data);

		} else if($pagename == 'o_nas') {
			$this->load->view('company_view', $data);

		} else if($pagename == 'sortiment') {
			$this->load->view('sortiment_view', $data);

		} else if($pagename == 'servis') {
			$this->load->view('servis_view', $data);

		} else if($pagename == 'pujcovna') {
			$this->load->view('pujcovna_view', $data);

		} else if($pagename == 'bazar') {
			$this->load->view('bazar_view', $data);

		} else if($pagename == 'kontakty') { ///pokud změním název kontakty na kravina tak to vypíše string po kliknutí na kontakty v menu. Když v URL změním www.jfdkfj.cz/kontakty na kravina, tak se načtou stránky kontaktů
			$this->load->view('kontakty_view', $data);

		} else {
			echo "Stránka nenalezena!"; ///vypíše se pokud nastane chyba v podmínce viz výše
		}	
			
	
		$this->load->view('footer_view');
	}
}
		
