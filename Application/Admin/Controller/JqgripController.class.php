<?php
namespace Admin\Controller;
class JqgripController extends AdminController{
	public function index(){
		$this->assign('table_active','active open');
		$this->display();
	}
}