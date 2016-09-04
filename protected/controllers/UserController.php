<?php
class UserController extends Controller{
	
	public function filters(){
		return array(
				'accessControl',
		);
	}
	
	public function accessRules(){
		return array(
			array('allow',
				'actions'=>array(
					'login', 'logout', 'register'
				),
				'users'=>array('*'),
			),
			array('allow',
				'actions' => array('view','delete', 'list','edit'),
				'users' => array('@'),
			),
			array('deny',
				'users' => array('*'),
			),
		);
	}
	
    public function actions(){
        return array(
            'list' => 'application.controllers.user.ListAction',
            'edit' => 'application.controllers.user.EditAction',
            'view' => 'application.controllers.user.ViewAction',
            'login' => 'application.controllers.user.LoginAction',
            'register' => 'application.controllers.user.RegisterAction',
            'logout' => 'application.controllers.user.LogoutAction',
        );
    }
}