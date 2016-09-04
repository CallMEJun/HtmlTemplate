<?php 
class NotifyAction extends CAction{
	public function run(){
		$phone = Yii::app()->request->getParam('phone');
		$id = Yii::app()->request->getParam('id');
		OrderProxy::notifyCome($phone,$id);
		$result = array('code'=>200);
		echo CJSON::encode($result);
	}
}