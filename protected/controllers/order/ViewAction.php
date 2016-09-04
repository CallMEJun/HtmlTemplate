<?php
class ViewAction extends CAction{
	public function run(){
		$id = Yii::app()->request->getParam('id');
		$result = OrderProxy::info($id);
		$this->controller->renderPartial('view',array('data'=>$result['data']));
	}
}