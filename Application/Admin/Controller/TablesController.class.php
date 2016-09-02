<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class TablesController extends AdminController{
	public function index(){
		$this->assign('table_active','active open');
		$this->display();
	}
}