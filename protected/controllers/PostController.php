<?php 
class PostController extends Controller{
	public function actionIndex(){
		echo CJSON::encode(array('code'=>200));
	}
}