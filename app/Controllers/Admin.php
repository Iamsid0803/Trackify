<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\AdminModel;


class Admin extends BaseController
{
	public function __construct()
	{
		$this->session = \Config\Services::session();
		$this->db = \Config\Database::connect();
		$this->AdminModel = new AdminModel();
	}
	public function index()
	{

		echo view("admin/page-login");
	}
	public function login()
	{
		echo view("admin/page-login");
	}
	public function forgetpass()
	{
		echo view("admin/forgetpass");
	}
	public function forgetpasspost()
	{
		$this->AdminModel->forgetpasspost($this->request);
	}
	public function dashboard()
	{
		echo view("constants/header");
		echo view("constants/sidebar");
		echo view("constants/footer");
		echo view("admin/dashboard");
		echo view("constants/footer_text");
	}
	public function addClient()
	{
		echo view("constants/header");
		echo view("constants/sidebar");
		echo view("constants/footer");
		echo view("admin/addclient");
		echo view("constants/footer_text");
	}
	public function addOrder()
	{
		echo view("constants/header");
		echo view("constants/sidebar");
		echo view("constants/footer");
		echo view("admin/addorder");
		echo view("constants/footer_text");
	}
	public function register()
	{
		echo view("admin/page-register");
	}
	public function resetPass()
	{
		echo view("constants/header");
		echo view("constants/sidebar");
		echo view("constants/footer");
		echo view("admin/resetpass");
		echo view("constants/footer_text");
	}
	public function viewClient()
	{
		echo view("constants/header");
		echo view("constants/sidebar");
		echo view("constants/footer");
		echo view("admin/viewclient");
		echo view("constants/footer_text");
	}
	public function viewOrder()
	{
		echo view("constants/header");
		echo view("constants/sidebar");
		echo view("constants/footer");
		echo view("admin/vieworder");
		echo view("constants/footer_text");
	}
	public function registerpost()
	{
		$this->AdminModel->registerpost($this->request);
	}
	public function loginpost()
	{
		$this->AdminModel->loginpost($this->request);
	}
	public function submitresetpassword()
	{
		$this->AdminModel->submitresetpassword($this->request);
	}
	public function insertclient()
	{
		$this->AdminModel->insertclient($this->request);
	}
	public function insertorder()
	{
		$this->AdminModel->insertorder($this->request);
	}
	public function getclients()
	{
		$this->AdminModel->getclients();
	}
	public function getclientlist()
	{
		$this->AdminModel->getclientlist($this->request);
	}
	public function client_delete()
	{
		$this->AdminModel->client_delete($this->request);
	}
	public function getorderlist()
	{
		$this->AdminModel->getorderlist($this->request);
	}
	public function viewdoc($id)
	{
		$data['document'] = $this->db->table('orderdocs')->where('order_id', $id)->get()->getResultArray();
		// echo '<pre>';
		// var_dump($data);
		// die();
		if (empty($data['document'])) {
			echo view("constants/error");
		} else {
			echo view("constants/header");
			echo view("constants/sidebar");
			echo view("admin/viewdoc", $data);
			echo view("constants/footer");
			echo view("constants/footer_text");
		}
	}
	public function order_delete()
	{
		$this->AdminModel->order_delete($this->request);
	}
	public function editclient($id)
	{
		$data['clientdata'] = $this->db->table('client')->where('id', $id)->get()->getRow();
		// echo '<pre>';
		// var_dump($data);
		// die();
		if (empty($data['clientdata'])) {
			var_dump("Client Page Doesn't exist");
		} else {
			echo view("constants/header");
			echo view("constants/sidebar");
			echo view("constants/footer");
			echo view("admin/editclient", $data);
			echo view("constants/footer_text");
		}
	}
	public function updateclient()
	{

		$this->AdminModel->updateclient($this->request);
	}
	public function editorder($id)
	{
		$data['orderdata'] =
			$this->db->table('order as o')->where('o.id', $id)->join('client as c', 'c.id=o.client_id')->select('o.*,c.company_name,c.company_mobile')->get()->getRow();
		// echo '<pre>';
		// var_dump($this->db->getLastQuery());
		$data['document'] = $this->db->table('orderdocs')->where('order_id', $id)->get()->getResultArray();
		// echo "<pre>";
		// var_dump($data);

		// die();
		if (empty($data['orderdata'])) {
			echo view("constants/error");
		} else {
			echo view("constants/header");
			echo view("constants/sidebar");
			echo view("constants/footer");
			echo view("admin/editorder", $data);
			echo view("constants/footer_text");
		}
	}
	public function doc_delete()
	{
		$this->AdminModel->doc_delete($this->request);
	}
	public function test($id)
	{
		$query = $this->db->table('orderdocs')->where('id', $id)->delete();
		if ($query) {
			var_dump("DOCUMENT DELETED");
		} else {
			var_dump("ERROR OCCURED");
		}
	}

	public function updateorder()
	{

		$this->AdminModel->updateorder($this->request);
	}
	public function checkemail()
	{
		$email = \Config\Services::email();

		$email->setTo("siddhantsinghsidhu@gmail.com");
		$email->setFrom('johndoe@gmail.com', 'Confirm Registration');

		$email->setSubject("test");
		$email->setMessage("testing");

		if ($email->send()) {
			echo 'Email successfully sent';
		} else {
			$data = $email->printDebugger(['headers']);
			print_r($data);
		}
	}
}