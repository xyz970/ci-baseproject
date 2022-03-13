<?php

require_once 'BaseController.php';

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends BaseController {
	protected $formValidation = array(
		// array(
		// 	'field' => 'fieldName',
		//     'label' => 'labelName',
		//     'rules' => 'required|alphanum'
		// ),
		array(
			'field' => 'name',
			'label' => 'name',
			'rules' => 'required'
		),
		array(
			'field' => 'address',
			'label' => 'address',
			'rules' => 'required'
		),
	);
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('TestModel');
    }

	public function bla_get()
	{
		
		$this->errorResponse(500);
		// $this->load->view('welcome_message');
	}

	public function tes_post()
	{
		$validate = $this->validateInput();
		$this->TestModel->insert($validate);
		
	}

	public function update_put($id)
	{
		$field = $this->putRequest();
		$param = array('id'=>$id);
		$this->TestModel->update($field,$param);
	}

	public function hapus_delete($id)
	{
		
		try {
			$param = array('id'=>$id);
		$this->TestModel->delete($param);
		} catch (\Throwable $th) {
			$this->errorResponse(500);
		}

	}

	
}
