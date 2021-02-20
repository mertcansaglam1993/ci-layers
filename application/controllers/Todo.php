<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/mertcan.saglam/Business/Todo/TodoManager.php';

class Todo extends CI_Controller {

	private $todoManager;
	private $todoDal;

	public function __construct()
	{
		parent::__construct();
		$this->todoDal = new MysqlTodoDal();
		$this->todoManager = new TodoManager($this->todoDal);
	}
	
	public function all()
	{
		echo json_encode($this->todoManager->all());
	}
}
