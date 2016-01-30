<?php

namespace nagser\logger\controllers;

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class AdminController extends \nagser\base\controllers\AdminController
{

    public function behaviors(){
        return ArrayHelper::merge(parent::behaviors(), [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index', 'select2-list'],
                        'allow' => true,
                        'roles' => ['logger-admin-index'],
                    ],
                    [
                        'actions' => ['view'],
                        'allow' => true,
                        'roles' => ['logger-admin-view'],
                    ],
                    [
                        'actions' => ['delete'],
                        'allow' => true,
                        'roles' => ['logger-admin-delete'],
                    ],
                ],
            ],
        ]);
    }

}
