<?php

namespace app\modules\logger\controllers;

use app\base\CustomAdminController;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class AdminController extends CustomAdminController
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
