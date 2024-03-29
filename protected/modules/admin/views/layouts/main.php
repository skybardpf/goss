<?php
/* @var $this Controller */

Yii::app()->bootstrap->register();
$this->widget('ext.LoadingWidget.LoadingWidget');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<style type="text/css">
ul#yw0 li, ul#yw2 li{
    display: inline-block;
    margin-right: 20px;
}
</style>
<body>
<div class="container" id="page">
	<div id="header">
<!--		<div id="logo">--><?php //echo CHtml::encode(Yii::app()->name); ?><!--</div>-->
		<?php
			if(isset($this->breadcrumbs)) {
				$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				));
			}
		?>
		</div><!-- header -->

    <?php $this->widget('zii.widgets.CMenu',array(
        'items'=>array(
//            array('label'=>'Авторизация', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//            array('label'=>'Выход', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            array('label'=>'Главная', 'url'=>array('/site/index')),
            array(
                'label'=>'Справочники',
                'url'=>array($this->createUrl('catalog/')),
//                'visible'=>!Yii::app()->user->isGuest
            ),
        ),
    )); ?>
    <?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">

	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
