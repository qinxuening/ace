<?php
namespace Admin\Controller;
use Admin\Controller\AdminController;
class ElementsController extends AdminController{
	public function _initialize(){
		$this->assign('element_active','active open');
	}
	public function index(){
		$this->display();
	}
	public function buttons(){
		$this->display();
	}
}