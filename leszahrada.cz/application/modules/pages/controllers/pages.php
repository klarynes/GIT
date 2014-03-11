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

		} else if($pagename == 'stihl') {
			$this->load->view('stihl_view', $data);

		} else if($pagename == 'hobbypily') {
			$this->load->view('hobbypily_view', $data);	

		} else if($pagename == 'farmarskepily') {
			$this->load->view('farmarskepily_view', $data);		

		} else if($pagename == 'profesionalnipily') {
			$this->load->view('profesionalnipily_view', $data);	

		} else if($pagename == 'zachranarskepily') {
			$this->load->view('zachranarskepily_view', $data);	

		} else if($pagename == 'specialnipily') {
			$this->load->view('specialnipily_view', $data);	
		
		} else if($pagename == 'elektrickepily') {
			$this->load->view('elektrickepily_view', $data);
		
		} else if($pagename == 'kontaktni_fomular') {
			$this->load->view('kontaktni_fomular', $data);
							
		} else {
			echo "Stránka nenalezena!"; ///vypíše se pokud nastane chyba v podmínce viz výše
		}	
			
	
		$this->load->view('footer_view');
	}
}
		
