<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Skibardin A.A.
 * Date: 15.08.13
 */
class TestModule extends CWebModule
{
//    public $assets = '';
    public function init()
    {
        // this method is called when the module is being created
        // you may place code here to customize the module or the application

        // import the module-level models and components
//        $this->setImport(array(
//            'legal.models.*',
//            'legal.components.*',
//        ));
//        var_dump('sss');die;
    }
//
//    public function beforeControllerAction($controller, $action)
//    {
//        $this->assets = CHtml::asset($this->basePath.'/static');
//        if(parent::beforeControllerAction($controller, $action))
//        {
//            // this method is called before any module controller action is performed
//            // you may place customized code here
//            return true;
//        }
//        else
//            return false;
//    }
}
