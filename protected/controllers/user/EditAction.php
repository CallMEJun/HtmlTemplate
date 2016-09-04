<?php 
class EditAction extends CAction{
	public function run(){
		$id = Yii::app()->request->getParam('id');
		$result = UserProxy::info($id);
		$companyList = CompanyProxy::getList();
		if(Yii::app()->request->isAjaxRequest){
			$nickName = Yii::app()->request->getParam('nickName');
			$mobile = Yii::app()->request->getParam('mobile');
			$birthday = Yii::app()->request->getParam('birthday');
			$email = Yii::app()->request->getParam('email');
			$gender = Yii::app()->request->getParam('gender');
			$work = Yii::app()->request->getParam('work');
			$title = Yii::app()->request->getParam('title');
			$company = Yii::app()->request->getParam('company');
			$skills = Yii::app()->request->getParam('skills');
			$interests = Yii::app()->request->getParam('interests');
			$website = Yii::app()->request->getParam('website');
			$wechatid = Yii::app()->request->getParam('wechatid');
			$facebookid = Yii::app()->request->getParam('facebookid');
			$twitterid = Yii::app()->request->getParam('twitterid');
			$linkedinid = Yii::app()->request->getParam('linkedinid');
			$instagramid = Yii::app()->request->getParam('instagramid');
			$description = Yii::app()->request->getParam('description');
			$data = array(
				'nickName' => $nickName,
				'mobile' => $mobile,
				'birthday' => $birthday,
				'email' => $email,
				'gender' => $gender,
				'work' => $work,
				'title' => $title,
				'company' => $company,
				'skills' => $skills,
				'interests' => $interests,
				'website' => $website,
				'wechatid' => $wechatid,
				'facebookid' => $facebookid,
				'twitterid' => $twitterid,
				'linkedinid' => $linkedinid,
				'instagramid' => $instagramid,
				'description' => $description
			);
			$result = UserProxy::update($id,$data);
			echo CJSON::encode($result);
		} else {
			$this->controller->render('edit',array('data'=>$result,'companyList'=>CJSON::encode($companyList)));
		}
	}
}