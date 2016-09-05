<?php 
class CompanyController extends Controller {
	public function filters(){
        return array(
                'accessControl',
        );
    }
    
    public function accessRules(){
        return array(
            array('allow',
                'actions' => array('register'),
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function actions(){
        return array(
            'register' => 'application.controllers.company.RegisterAction'
        );
    }
}