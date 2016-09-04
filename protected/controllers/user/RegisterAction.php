<?php 
class RegisterAction extends CAction{
	public function run(){
		$this->controller->layout = '//layouts/default-mini';
		$this->controller->render('register');
	}
}