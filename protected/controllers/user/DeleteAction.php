<?php 
class DeleteAction extends CAction{
	public function run(){
		$id = Yii::app()->request->getParam('id');
		$result = UserProxy::delete($id);
		echo CJSON::encode($result);
	}
}