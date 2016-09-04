<?php 
class GoodProxy extends CProxy{
	public static function goodList($start,$size){
		$start = $start+0;
		$result = Good::model()->findAll('status=1 order by id desc limit '.$start.','.$size);
		$count = Good::model()->count('status=1');
		return array('data'=>$result,'count'=>$count);
	}

	public static function goodInfo($id){
		$result = Good::model()->find('status=1 and id='.$id);
		return $result;
	}

	public static function goodDelete($id){
		$result = Good::model()->find('status=1');
		$result->status = 0;
		$result->updateTime = date('Y-m-d H:i:s');
		$result->save();
		return array('code'=>200);
	}

	public static function goodCreate($data){
		$result = new Good();
		$result->name = $data['name'];
		$result->picture = $data['picture'];
		$result->price = $data['price'];
		$result->createTime = date('Y-m-d H:i:s');
		$result->save();
		return array('code'=>200);
	}

	public static function goodUpdate($data){
		$result = Good::model()->findByAttributes(array('status'=>1,'id'=>$data['id']));
		$result->name = $data['name'];
		$result->picture = $data['picture'];
		$result->price = $data['price'];
		$result->updateTime = date('Y-m-d H:i:s');
		$result->save();
		return array('code'=>200);
	}
}