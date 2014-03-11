<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Sortiment extends MX_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$this->load->model('brand_model', 'brand');
		$this->load->model('category_model', 'category');
		$this->load->model('brand_has_category_model', 'brand_has_category');
		
		$brands = $this->brand->get("id")->result();

		foreach ($brands as $brand)
		{
			$brand->categories_id = $this->brand_has_category->get_where_custom("brand_id", $brand->id)->result();
			
			foreach ($brand->categories_id as $category_id)
			{
			 $category_id->$brand_category = $this->category->get_where_custom("id", $category_id->category_id)->result();
			
			}	

		}	


		debug($brands);
	}

}