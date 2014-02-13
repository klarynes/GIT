<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
require APPPATH.'/libraries/REST_Controller.php';
class Show extends REST_Controller {

	function __construct() {
		parent::__construct();
		//$this->load->model('show_model', 'show');
	}
	function insert_get() {
		$data['module'] = 'show';
		$data['view_file'] = 'close_view';
		$data['hide'] = 'false';
		$data['tab'] = 2;
		$data['video_id'] = 10;
		$hash_url = Modules::run('url/_hash_url', $data);
		$data['hash_url'] = $hash_url;
		Modules::run('url/_insert', $data);
	}
	function url_get() {
		$urls = Modules::run('url/_get_urls');
		foreach ($urls as $url) {
			
			echo '<a href="'.$this->config->base_url()."show/index/".$url->hash_url.'">'.$this->config->base_url()."show/index/".$url->hash_url.'</a><br />';
			
		}
		
	}
	function index_get($hash_url) {
		$url = "http://hmvctest.jakubdusek.cz/show/data/";
		$format = "json";
		
		$post_data = array('hash_url' => $hash_url);
		$data = json_decode($this->_rest_request($url, $format, 'POST', $post_data));
		
		if($data){
			echo Modules::run("template", $data);
		} else {
			echo "PAGE NOT FOUND!";
		}
			
	}
	function data_post() {

		$hash_url = $_POST["hash_url"];
		
		$url_data = Modules::run('url/_get_url', $hash_url);
		if($url_data != NULL){
			
			$data["tabs"] = Modules::run('tabs/_get_all_tabs');
			foreach ($data["tabs"] as $tab) {
				$tab->bookmarks = Modules::run('bookmark/_get_bookmarks_by_tab', $tab->id);
				$tab->counts->bookmaks = Modules::run('bookmark/_get_count_bookmarks_by_tab', $tab->id);
				$tab->counts->albums = floor($tab->counts->bookmaks /3);
				$tab->counts->lastAlbum = $tab->counts->bookmaks%3;
			}
			
			foreach ($url_data as $key => $value) {
				$data[$key] = $value;
			}

			$data['base_url'] = $base_url = $this->config->base_url(); 

			if($data)
			{
				$this->response($data, 200); // 200 being the HTTP response code
			}
		} else {
			$this->response(NULL, 200); // 404 being the HTTP response code
		}
	}
	
	function _rest_request($url, $format, $method, $data)  {  
		// Set up and execute the curl process  
		$curl_handle = curl_init();  
		curl_setopt($curl_handle, CURLOPT_URL, $url."format/".$format);  
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);		
        curl_setopt($curl_handle, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS , $data); 

		
		
		$buffer = curl_exec($curl_handle);  
		curl_close($curl_handle);  

		return $buffer;  
   }  
	function hide_get($tab = 1) {
		$data['module'] = 'show';
		$data['base_url'] = $base_url = $this->config->base_url(); 
		$data['view_file'] = 'main_view';
		$data['hide'] = "true";
		$data['activeTab'] = $tab;
		echo Modules::run("template", $data);
	}
	function close_post() {
		$data['module'] = 'show';
		$data['base_url'] = $base_url = $this->config->base_url(); 
		$data['view_file'] = 'close_view';
		echo Modules::run("template", $data);
		
	}
	
	
	
	
	
	

}