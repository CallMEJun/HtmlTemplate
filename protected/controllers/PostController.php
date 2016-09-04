<?php 
class PostController extends Controller{
	public function actionIndex(){
		$id = Yii::app()->request->getParam('value');
		echo CJSON::encode(array('code'=>200,'data'=>$id));
	}
}