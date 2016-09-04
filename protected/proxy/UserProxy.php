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

	public static function update($id,$data){
		$result = User::model()->findByAttributes(array('id'=>$id,'status'=>1));
		$result->nickName = $data['nickName'];
		$result->mobile = $data['mobile'];
		$result->birthday = $data['birthday'];
		$result->email = $data['email'];
		$result->gender = $data['gender'];
		$result->work = $data['work'];
		$result->title = $data['title'];
		$result->company = $data['company'];
		$result->skills = $data['skills'];
		$result->interests = $data['interests'];
		$result->website = $data['website'];
		$result->wechatid = $data['wechatid'];
		$result->facebookid = $data['facebookid'];
		$result->twitterid = $data['twitterid'];
		$result->linkedinid = $data['linkedinid'];
		$result->instagramid = $data['instagramid'];
		$result->description = $data['description'];
		$result->save();
		return array('code'=>200);
	}
}