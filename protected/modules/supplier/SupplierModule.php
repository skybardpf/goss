<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @property string $moduleBaseAssets
 */
class SupplierModule extends CWebModule
{
    public $baseAssets = null;

    public function init()
    {
        parent::init();

        Yii::setPathOfAlias('supplier',dirname(__FILE__));
        Yii::app()->setComponents(array(
            'errorHandler'=>array(
                'class'=>'CErrorHandler',
                'errorAction'=>$this->getId().'/error/error',
            ),
            'user'=>array(
                'class'=>'CWebUser',
                'stateKeyPrefix'=>'supplier',
                'loginUrl'=>Yii::app()->createUrl($this->getId().'/login/login'),
            ),
            /*'log'=>array(
                'class' => 'CLogRouter',
                'enabled' => YII_DEBUG,
                'routes'=>array(
                    array(
                        'class'=>'CFileLogRoute',
                        'levels'=>'error, warning',
                    ),
                    array(
                        'class'=>'application.extensions.yii-debug-toolbar.YiiDebugToolbarRoute',
                        'ipFilters'=>array('127.0.0.1'),
                    ),
                ),
            ),*/
        ), false);

        if (!$this->baseAssets) {
            $this->baseAssets = Yii::app()->assetManager->publish(
                Yii::getPathOfAlias('application.modules.supplier.assets'),
                false,
                -1,
                YII_DEBUG
            );
        }
    }
}
