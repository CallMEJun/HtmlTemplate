<?php
class SMS{
	//制作完成，通知取货
	static function send($mobile){
		$submail = Yii::app()->params['partner']['submail'];
		$params = array(
				'appid' => $submail['appid'],
				'sign_type' => $submail['sign_type'],
				'signature' => $submail['signature'],
				'project' => $submail['notify_project'],
				'to' => $mobile
		);
		$output = Yii::app()->curl->post($submail['url'], $params);
		return  strpos($output, 'success');
	}
//已经接单，正在制作
	static function sendOk($mobile){
		$submail = Yii::app()->params['partner']['submail'];
		$params = array(
				'appid' => $submail['appid'],
				'sign_type' => $submail['sign_type'],
				'signature' => $submail['signature'],
				'project' => $submail['notifyok_project'],
				'to' => $mobile
		);
		$output = Yii::app()->curl->post($submail['url'], $params);
		return  strpos($output, 'success');
	}
}