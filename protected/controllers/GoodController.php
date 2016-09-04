<?php 
class GoodController extends Controller{
    public function filters(){
        return array(
                'accessControl',
        );
    }
    
    public function accessRules(){
        return array(
            array('allow',
                'actions' => array('list', 'edit','view','delete','create'),
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }
    
    public function actions(){
        return array(
            'list' => 'application.controllers.good.ListAction',
            'edit' => 'application.controllers.good.EditAction',
            'view' => 'application.controllers.good.ViewAction',
            'delete' => 'application.controllers.good.DeleteAction',
            'create' => 'application.controllers.good.CreateAction',
        );
    }
}