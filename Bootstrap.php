<?php

namespace nagser\logger;

use yii\base\BootstrapInterface;
use yii\helpers\ArrayHelper;

class Bootstrap implements BootstrapInterface {

    private $_modelMap = [
        'LoggerRecord' => 'nagser\logger\models\LoggerRecord',
        'LoggerSearch' => 'nagser\logger\models\LoggerSearch',
    ];
    public $moduleAlias = 'logger';

    public function bootstrap($app){
        /**@var Module $module**/
        $module = $app->getModule('base');
        $this->_modelMap = ArrayHelper::merge($this->_modelMap, $module->modelMap);
        foreach ($this->_modelMap as $name => $definition) {
            $class = "nagser\\logger\\models";
            \Yii::$container->set($class, $definition);
            $modelName = is_array($definition) ? $definition['class'] : $definition;
            $module->modelMap[$name] = $modelName;
        }
    }

}