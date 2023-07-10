<?php

namespace App\Models;

use CodeIgniter\Model;
use PHPUnit\Framework\Constraint\JsonMatches;

class AdminModel extends Model
{
	protected function initialize()
	{
		$this->session = \Config\Services::session();
	}
	public function registerpost($request)
	{
		$admin_name = ($request->getPost('admin_name'));
		$admin_email = ($request->getPost('admin_email'));
		$admin_phone = ($request->getPost('admin_phone'));
		$admin_password = ($request->getPost('admin_password'));
		$countemail = $this->db->table('admin')->where('email', $admin_email)->countAllResults();
		if ($countemail == 0) {
			$insertarray = [
				'name' => $admin_name,
				'email' => $admin_email,
				'mobile' => $admin_phone,
				'password' => password_hash($admin_password, PASSWORD_BCRYPT),
				'created_date' => date('Y-m-d h:i:s'),
				'updated_date' => date('Y-m-d h:i:s'),

			];
			$inserted = $this->db->table('admin')->insert($insertarray);
			if ($inserted) {
				echo	json_encode(array(
					"success" => "true",
					"message" => "Scuccessfully Registered",

				));
			} else {
				echo	json_encode(array(
					"success" => "false",
					"message" => "An Error Occured",
				));
			}
		} else {

			echo	json_encode(array(
				"success" => "false",
				"message" => "Email Already Exists",
			));
		}
	}
	public function loginpost($request)
	{
		$admin_email = $request->getPost('admin_email');
		$password = $request->getPost('admin_password');
		$tabledata = $this->db->table('admin')->where('email', $admin_email)->get()->getResultArray();
		// echo "<pre>";
		// var_dump($tabledata);
		if (!empty($tabledata)) {
			$verify = password_verify($password, $tabledata[0]['password']);
			if ($verify) {
				$sessiondata = [
					'loggedin' => true,
					'userid' => $tabledata[0]['id'],
					'email' => $tabledata[0]['email'],
					'mobile' => $tabledata[0]['mobile'],

				];

				$this->session->set($sessiondata);
				echo	json_encode(array(
					"success" => "True",
					"message" => "Login Successfull",
				));
			} else {
				echo	json_encode(array(
					"success" => "false",
					"message" => "Email id or password Incorrect",
				));
			}
		} else {
			echo	json_encode(array(
				"success" => "false",
				"message" => "Email ID not registered",
			));
		}
	}
	public function insertclient($request)
	{
		$company_name = $request->getPost('company_name');
		// var_dump($comapany_name);
		$company_mobile = $request->getPost('company_mobile');
		$company_email = $request->getPost('company_email');
		$contact_name = $request->getPost('contact_name');
		$contact_mobile = $request->getPost('contact_mobile');
		$contact_email = $request->getPost('contact_email');
		$addressline1 = $request->getPost('addressline1');
		$addressline2 = $request->getPost('addressline2');
		$state = $request->getPost('state');
		$city = $request->getPost('city');
		$pincode = $request->getPost('pincode');
		$countemail = $this->db->table('client')->where('company_email', $company_email)->countAllResults();
		if ($countemail == 0) {
			$insertarray = array(
				'company_name' => $company_name,
				'company_mobile' => $company_mobile,
				'company_email' => $company_email,
				'contact_name' => $contact_name,
				'contact_mobile' => $contact_mobile,
				'contact_email' => $contact_email,
				'addressline1' => $addressline1,
				'addressline2' => $addressline2,
				'state' => $state,
				'city' => $city,
				'pincode' => $pincode,
				'token' => bin2hex(random_bytes(20)),
				'created_date' => date('Y-m-d h:i:s'),
				'updated_date' => date('Y-m-d h:i:s'),
			);
			$inserted =	$this->db->table('client')->insert($insertarray);
			if ($inserted) {
				echo json_encode(array(
					'success' => true,
					'message' => "Client Successfully Inserted",
				));
			} else {
				echo json_encode(array(
					'success' => false,
					'message' => "Some Error Occured ",
				));
			}
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "Cient Already Exists",
			));
		}
	}
	public function insertorder($request)
	{
		$item_name = $request->getPost('item_name');
		// var_dump($item_name);
		$confirmation_date = $request->getPost('confirmation_date');
		$delivery_date = $request->getPost('delivery_date');
		$quantity = $request->getPost('quantity');
		$rate_per_unit = $request->getPost('rate_per_unit');
		$extra_charges = $request->getPost('extra_charges');
		$total_amount = $request->getPost('total_amount');
		$status = $request->getPost('status');
		// $item_verify = $this->db->table('order')->where('item_name', $item_name)->countAllResults();
		$client = $request->getPost('client');

		// var_dump($client);

		$insertarray = [
			'confirmation_date' => date("Y-m-d", strtotime($confirmation_date)),
			'delivery_date' => date("Y-m-d", strtotime($delivery_date)),
			'quantity' => $quantity,
			'item_name' => $item_name,
			'rate_per_unit' => $rate_per_unit,
			'extra_charges' => $extra_charges,
			'total_amount' => $total_amount,
			'status' => $status,
			'client_id' => $client,
			'created_date' => date('Y-m-d h:i:s'),
			'updated_date' => date('Y-m-d h:i:s'),

		];
		$inserted =	$this->db->table('order')->insert($insertarray);

		$inserted_order_id = $this->db->InsertID();

		$files = $request->getFileMultiple('document');
		// echo "<pre>";
		// var_dump($files);
		// var_dump($insertarray);
		if ($inserted) {
			$completed = 0;
			foreach ($files as $key => $uploaded_file) {
				$name = $uploaded_file->getRandomName();
				$moved = $uploaded_file->move('uploads/', $name);
				$file_path = 'uploads/' . $name;
				$file_name = $uploaded_file->getClientName();
				if ($moved) {
					$insertarray = [
						'order_id' => $inserted_order_id,
						'file_name' => $file_name,
						'file_path' => $file_path,
						'created_date' => date('Y-m-d h:i:s'),
						'updated_date' => date('Y-m-d h:i:s'),
					];
					$inserted =	$this->db->table('orderdocs')->insert($insertarray);

					$inserted_document_id = $this->db->InsertID();
					$updatearray = [
						'updated_date' => date('Y-m-d h:i:s'),
					];
					$this->db->table('order')->where('id', $inserted_order_id)->update($updatearray);
					$completed++;
				} else {
					$this->db->table('order')->where('id', $inserted_order_id)->delete();
					echo json_encode(array(
						'success' => false,
						'message' => "Couldn't Add Order",
					));
					die();
				}
			}
			if ($completed > 0) {
				echo json_encode(array(
					'success' => true,
					'message' => " Order Added Successfully",
				));
			} else {
				$this->db->table('order')->where('id', $inserted_order_id)->delete();
				echo json_encode(array(
					'success' => false,
					'message' => "Couldn't Add Order",
				));
				die();
			}
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "Couldn't Add Order",
			));
		}
	}
	public function getclients()
	{

		$clients = $this->db->table('client')->where('deleted', 0)->get()->getResultArray();
		echo json_encode($clients);
	}
	public function getclientlist($request)
	{
		$query = $this->db->table('client')->where('deleted', 0);
		$result = $query->get()->getResultArray();
		$data['draw'] = $request->getVar('draw');
		$data['recordsTotal'] = $query->countAllResults();
		$data['recordsFiltered'] = $query->countAllResults();
		$data['data'] = $result;
		echo json_encode($data);
	}
	public function client_delete($request)
	{
		$updatearray = [
			'deleted' => 1,
			'updated_date' => date('Y-m-d h:i:s'),
		];
		$query = $this->db->table('client')->where('id', $request->getPost('id'))->update($updatearray);
		// var_dump($query);
		if ($query) {
			echo json_encode(array(
				'success' => true,
				'message' => "Client Deleted Successfully",
			));
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "An error Occured, Client Could Not Be Deleted",
			));
		}
	}
	public function getorderlist($request)
	{
		$query = $this->db->table('order as o')->join('client as c', 'c.id=o.client_id')->select('o.*,c.company_name,c.company_mobile');
		$result = $query->get()->getResultArray();
		// var_dump($result);
		$data['draw'] = $request->getVar('draw');
		$data['recordsTotal'] = $query->countAllResults();
		$data['recordsFiltered'] = $query->countAllResults();
		$data['data'] = $result;
		echo json_encode($data);
	}
	public function order_delete($request)
	{
		$deletedoc = $this->db->table('orderdocs')->where('order_id', $request->getPost('id'))->delete();
		$deleteorder = $this->db->table('order')->where('id', $request->getPost('id'))->delete();

		// var_dump($query);
		if ($deleteorder && $deletedoc) {
			echo json_encode(array(
				'success' => true,
				'message' => "Order Deleted Successfully",
			));
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "An error Occured, Order Could Not Be Deleted",
			));
		}
	}
	public function updateclient($request)
	{
		$company_name = $request->getPost('company_name');
		// var_dump($comapany_name);
		$company_mobile = $request->getPost('company_mobile');
		$company_email = $request->getPost('company_email');
		$contact_name = $request->getPost('contact_name');
		$contact_mobile = $request->getPost('contact_mobile');
		$contact_email = $request->getPost('contact_email');
		$addressline1 = $request->getPost('addressline1');
		$addressline2 = $request->getPost('addressline2');
		$state = $request->getPost('state');
		$city = $request->getPost('city');
		$pincode = $request->getPost('pincode');
		$id = $request->getPost('id');


		$updatearray = array(
			'company_name' => $company_name,
			'company_mobile' => $company_mobile,
			'contact_name' => $contact_name,
			'contact_mobile' => $contact_mobile,
			'contact_email' => $contact_email,
			'addressline1' => $addressline1,
			'addressline2' => $addressline2,
			'state' => $state,
			'city' => $city,
			'pincode' => $pincode,
			'updated_date' => date('Y-m-d h:i:s'),
		);
		$updated =	$this->db->table('client')->where('id', $id)->update($updatearray);
		if ($updated) {
			echo json_encode(array(
				'success' => true,
				'message' => "Client Successfully Updated",
			));
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "Some Error Occured ",
			));
		}
	}
	public function doc_delete($request)
	{
		$id = $request->getPost('id');
		// var_dump($id);
		$query = $this->db->table('orderdocs')->where('id', $id)->delete();
		$updatearray = [
			'updated_date' => date('Y-m-d h:i:s'),
		];
		$updated = $this->db->table('orderdocs')->where('id', $id)->update($updatearray);

		if ($query && $updated) {
			echo json_encode(array(
				'success' => true,
				'message' => "Document Successfully Deleted",
			));
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "Some Error Occured ",
			));
		}
	}
	public function updateorder($request)
	{
		$id = $request->getPost('id');
		$valid = true;
		$updatearray = array(
			'item_name' => $request->getPost('item_name'),
			'delivery_date' => $request->getPost('delivery_date'),
			'quantity' => $request->getPost('quantity'),
			'rate_per_unit' => $request->getPost('rate_per_unit'),
			'extra_charges' => $request->getPost('extra_charges'),
			'total_amount' => $request->getPost('total_amount'),
			'status' => $request->getPost('status'),
			'updated_date' => date('Y-m-d h:i:s'),
		);

		$updated =	$this->db->table('order')->where('id', $id)->update($updatearray);
		if ($updated) {
			$valid = true;
		} else {
			$valid = false;
		}
		$files = $request->getFileMultiple('document');
		// var_dump($files[0]->getClientName());
		if (!empty($files[0]->getClientName())) {
			foreach ($files as $key => $uploaded_file) {
				$name = $uploaded_file->getRandomName();
				$moved = $uploaded_file->move('uploads/', $name);
				$file_path = 'uploads/' . $name;
				$file_name = $uploaded_file->getClientName();
				if ($moved) {
					$insertarray = [
						'order_id' => $id,
						'file_name' => $file_name,
						'file_path' => $file_path,
						'created_date' => date('Y-m-d h:i:s'),
						'updated_date' => date('Y-m-d h:i:s'),
					];
				}
				$insertdoc = $this->db->table('orderdocs')->where('order_id', $id)->insert($insertarray);
				if ($insertdoc) {
					$valid = true;
				} else {
					$valid = false;
				}
				$updatearray = [
					'updated_date' => date('Y-m-d h:i:s'),
				];
				$this->db->table('order')->where('id', $id)->update($updatearray);
			}
		}

		if ($valid) {
			echo json_encode(array(
				'success' => true,
				'message' => "Order Successfully Updated",
			));
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "Some Error Occured ",
			));
		}
	}
	public function submitresetpassword($request)
	{
		$userdata = $this->db->table('admin')->where('id', $this->session->get('userid'))->get()->getRow();
		if (!empty($userdata)) {
			$verify = password_verify($request->getPost('current_pass'), $userdata->password);
			if ($verify) {
				$update_password = array(
					'password' => password_hash(
						$request->getPost('new_pass'),
						PASSWORD_BCRYPT
					),
					'updated_date' => date('Y-m-d h:i:s'),
				);
				$password_updated = $this->db->table('admin')->where('id', $userdata->id)->update($update_password);
				if ($password_updated) {
					echo json_encode(array(
						'success' => true,
						'message' => "Password Successfully Updated ",
					));
				} else {
					echo json_encode(array(
						'success' => false,
						'message' => "Some Error Occured ",
					));
				}
			} else {
				echo json_encode(array(
					'success' => false,
					'message' => "Current Password is Wrong ",
				));
			}
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "Can't Fetch User Data",
			));
		}
	}
	public function forgetpasspost($request)
	{
		$admin_email = ($request->getPost('admin_email'));
		$admindata = $this->db->table('admin')->where('email', $admin_email)->get()->getRow();
		if (!empty($admindata)) {
			// String of all alphanumeric character
			$str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

			// Shuffle the $str_result and returns substring
			// of specified length
			$newpass = substr(
				str_shuffle($str_result),
				0,
				10
			);
			$update_password = array(
				'password' => password_hash(
					$newpass,
					PASSWORD_BCRYPT
				),
				'updated_date' => date('Y-m-d h:i:s'),
			);
			$password_updated = $this->db->table('admin')->where('id', $admindata->id)->update($update_password);
			if ($password_updated) {
				echo json_encode(array(
					'success' => true,
					'message' => "An Email Has been sent including the new password ",
				));
			} else {
				echo json_encode(array(
					'success' => false,
					'message' => "Some Error Occured ",
				));
			}
		} else {
			echo json_encode(array(
				'success' => false,
				'message' => "Can't Fetch User Data",
			));
		}
	}




































	// protected $DBGroup              = 'default';
	// protected $table                = 'admins';
	// protected $primaryKey           = 'id';
	// protected $useAutoIncrement     = true;
	// protected $insertID             = 0;
	// protected $returnType           = 'array';
	// protected $useSoftDeletes       = false;
	// protected $protectFields        = true;
	// protected $allowedFields        = [];

	// // Dates
	// protected $useTimestamps        = false;
	// protected $dateFormat           = 'datetime';
	// protected $createdField         = 'created_at';
	// protected $updatedField         = 'updated_at';
	// protected $deletedField         = 'deleted_at';

	// // Validation
	// protected $validationRules      = [];
	// protected $validationMessages   = [];
	// protected $skipValidation       = false;
	// protected $cleanValidationRules = true;

	// // Callbacks
	// protected $allowCallbacks       = true;
	// protected $beforeInsert         = [];
	// protected $afterInsert          = [];
	// protected $beforeUpdate         = [];
	// protected $afterUpdate          = [];
	// protected $beforeFind           = [];
	// protected $afterFind            = [];
	// protected $beforeDelete         = [];
	// protected $afterDelete          = [];
}