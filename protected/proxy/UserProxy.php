<?php 
class UserProxy extends CProxy{
	public static function getList($start,$size,$search=null){
		$start = $start+0;
		if($search){
			$condition = ' and nickName like "%'.$search.'%"';
		}
		$sql = 'select * from user where status=1'.$condition.' order by id desc limit :start,:size';
		$result = Yii::app()->db->createCommand($sql)->bindParam(':start',$start)->bindParam(':size',$size)->queryAll();
		$count = User::model()->count('status=1'.$condition);
		return array('data'=>$result,'count'=>$count);
	}

	public static function info($id){
		$result = User::model()->findByAttributes(array('id'=>$id,'status'=>1));
		return $result;
	}
}