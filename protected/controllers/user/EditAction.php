<?php 
class EditAction extends CAction{
	public function run(){
		$id = Yii::app()->request->getParam('id');
		$result = UserProxy::info($id);
		$companyList = CompanyProxy::getList();
		if(Yii::app()->request->isAjaxRequest){

		} else {
			$this->controller->render('edit',array('data'=>$result,'companyList'=>$companyList));
		}
	}
}