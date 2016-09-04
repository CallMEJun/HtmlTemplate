<?php 
class ViewAction extends CAction{
	public function run(){
		$this->controller->render('view');
	}
}