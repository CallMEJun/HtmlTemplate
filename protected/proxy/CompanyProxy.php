<?php 
class CompanyProxy extends CProxy{
	public static function getList(){
		$sql = 'select id,name as text from company where status=1';
		$result = Yii::app()->db->createCommand($sql)->queryAll();
		return $result;
	}
}