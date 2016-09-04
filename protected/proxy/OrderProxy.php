<?php 
class OrderProxy extends CProxy{
	public static function getList($start,$size,$search=null){
		if($search){
			$condition = ' and a.phone like "%'.$search.'%"';
			$countCondition = ' and phone like "'.$search.'%"';
		}
		$start = $start+0;
		$sql = 'select a.id,a.totalprice,a.phone,a.remark,a.paystatus,a.finish_status,a.createTime,b.nickName,b.portrait from `order` a left join user b on a. userId=b.id where a.status=1'.$condition.' order by id desc limit :start,:size';
		$result = Yii::app()->db->createCommand($sql)->bindParam(':start',$start)->bindParam(':size',$size)->queryAll();
		$count = Order::model()->count('status=1'.$countCondition.' order by id desc');
		return array(
			'code' => 200,
			'data' => $result,
			'count' => $count
		);
	}

	public static function delete($id){
		$result = Order::model()->findByAttributes(array('id'=>$id));
		$result->status = 0;
		$result->save();
		return array('code'=>200,'message'=>'success');
	}

	public static function info($id){
		$sql = 'select a.totalprice,a.phone,a.remark,a.paystatus,a.order_detail,a.createTime,b.nickName,b.portrait from `order` a left join user b on a. userId=b.id where a.status=1 and a.id=:id';
		$result = Yii::app()->db->createCommand($sql)->bindParam(':id',$id)->queryRow();
		if($result){
			return array('code'=>200,'data'=>$result);
		} else {
			return array('code'=>404,'message'=>'Not Found');
		}
		
	}

	public static function notifyOk($phone,$id){
		$result = SMS::sendOk($phone);
		$proxy = Order::model()->findByAttributes(array('id'=>$id));
		$proxy->finish_status = 1;
		$proxy->save();
		return $result;
	}

	public static function notifyCome($phone,$id){
		$result = SMS::send($phone);
		$proxy = Order::model()->findByAttributes(array('id'=>$id));
		$proxy->finish_status = 2;
		$proxy->save();
		return $result;
	}
}