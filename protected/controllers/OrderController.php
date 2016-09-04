<?php 
class OrderController extends Controller{
    public function filters(){
        return array(
                'accessControl',
        );
    }
    
    public function accessRules(){
        return array(
            array('allow',
                'actions' => array('list', 'notifyok','view','delete','notify'),
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }
    
    public function actions(){
        return array(
            'list' => 'application.controllers.order.ListAction',
            'notifyok' => 'application.controllers.order.NotifyokAction',
            'view' => 'application.controllers.order.ViewAction',
            'delete' => 'application.controllers.order.DeleteAction',
            'notify' => 'application.controllers.order.NotifyAction',
        );
    }

    public function actionIndex(){
        $dataProvider = new CActiveDataProvider('Article', array(
            'criteria' => array('order' => 'create_time DESC')
          ));
          if (array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX']) {
            $this->renderPartial('index', array(
               'dataProvider' => $dataProvider,
            ));
          } else {
            $this->render('index', array(
              'dataProvider' => $dataProvider,
            ));
          }
    }
}