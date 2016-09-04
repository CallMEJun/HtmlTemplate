<?php

return array(
    'urlFormat' => 'path',
    'caseSensitive' => false,
    'showScriptName' => false,
    'urlSuffix' => '.html',
    'rules'=>array(
        'site/parents' => 'data/listParentSite',
        'site/get/<id:\w+>' => 'data/getSite',
        '/site/get-detail/<hashcode:\w+>' => 'data/getSiteDetail',

        'admin/edit/<id:\w+>' => 'admin/edit',
        'activity/edit/<id:\w+>' => 'activity/edit',
    		
        'login' => 'user/login',
        'logout' => 'user/logout',
        'register' => 'user/register',
        '<controller:\w+>/<id:\d+>'=>'<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
    ),
);