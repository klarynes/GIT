<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class RENAME extends MX_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('RENAME_model', 'RENAME');
	}

	function get($order_by) {

		$query = $this->RENAME->get($order_by);
		return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
		$query = $this->RENAME->get_with_limit($limit, $offset, $order_by);
		return $query;
	}

	function get_where($id) {
		$query = $this->RENAME->get_where($id);
		return $query;
	}

	function get_where_custom($col, $value) {
		$query = $this->RENAME->get_where_custom($col, $value);
		return $query;
	}

	function _insert($data) {
		$this->RENAME->_insert($data);
	}

	function _update($id, $data) {
		$this->RENAME->_update($id, $data);
	}

	function _delete($id) {
		$this->RENAME->_delete($id);
	}

	function count_where($column, $value) {
		$count = $this->RENAME->count_where($column, $value);
		return $count;
	}

	function get_max() {
		$max_id = $this->RENAME->get_max();
		return $max_id;
	}

	function _custom_query($mysql_query) {
		$query = $this->RENAME->_custom_query($mysql_query);
		return $query;
	}

}