<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Climate_change_community extends CI_Controller {
	
	public function __construct()
    {
        parent::__construct();
		if(!($this->session->userdata('account_role') === 'admin' && $this->session->userdata('account_username') === 'FuturestClimateChangeCommunity'))
		{
			redirect('home');
		}
		date_default_timezone_set("Asia/Jakarta");
    }

	public function index()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$query = $this->Dashboard->getData($tableName);
		$data = [
			'data' => count($query)
		];
		$this->load->view('admin/dashboard_climate_change_community/home', $data);
	}

	public function list()
	{
		$tableName = $this->session->userdata('account_table');
		$this->load->model("Dashboard");
		$data =[
			'data' => $this->Dashboard->getData($tableName)
		];
		$this->load->view('admin/dashboard_climate_change_community/list', $data);
	}
}
?>