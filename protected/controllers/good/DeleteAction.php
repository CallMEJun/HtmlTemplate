<?php 
class DeleteAction extends CAction{
	public function run(){
		$id = Yii::app()->request->getParam('id');
		$result = GoodProxy::goodDelete($id);
		echo CJSON::encode($result);
	}
}