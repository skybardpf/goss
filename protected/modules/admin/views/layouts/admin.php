<?php
/* @var $this Controller */

Yii::app()->bootstrap->register();
$this->widget('ext.LoadingWidget.LoadingWidget');
Yii::app()->clientScript->registerCssFile($this->baseAssets.'/css/styles.css');

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style type="text/css">
		ul#yw0 li, ul#yw2 li {
			display: inline-block;
			margin-right: 20px;
		}
		html, body {
			height: 100%;
			padding: 0;
			margin: 0;
		}
		#header {
			padding-top: 15px;
		}
		h3 {
			margin-top: 0;
		}
		#footer, .push {
			height: 90px; /* .push и .footer должны быть одинаковой высоты */
			clear: both;
			padding-top: 1px;
		}
		#footer {
			margin-top: -95px; /* Отрицательное значение высоты footer'а */
		}
		#footer hr {
			margin-top: 0;
		}
		.container-narrow {
			margin: 0 auto;
			max-width: 700px;
		}
		.wrapper {
			min-height: 100%;
			height: auto !important;
			height: 100%;
		}
	</style>
</head>
<body>
<div class="container-narrow wrapper" id="page">
	<div id="header">
		<div class="masthead">
			<?php $this->widget('bootstrap.widgets.TbMenu', array(
				'type'=>'pills', // '', 'tabs', 'pills' (or 'list')
				'stacked'=>false, // whether this is a stacked menu
				'items'=>array(
		//            array('label'=>'Авторизация', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
		//            array('label'=>'Выход', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
		//            array('label'=>'Главная', 'url'=>array($this->createUrl('catalog/'))),
					array(
						'label'=>'Справочники',
						'url'=>array($this->createUrl('catalog/')),
//                		'visible'=>!Yii::app()->user->isGuest
					),
				),
				'htmlOptions'=>array(
					'class'=>'pull-right'
				)
			)); ?>
			<h3 class="muted">
				<img src="<?=$this->baseAssets?>/img/site_logo.png" alt="site title">
			</h3>
		</div>
		<?php
			if(isset($this->breadcrumbs)) {
				$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				));
			}
		?>
	</div><!-- header -->

    <?php echo $content; ?>

	<div class="clear"></div>
	<div class="push"></div>

</div><!-- page -->
<div id="footer" class="container-narrow">
	<hr>
	<a href="http://www.russianpost.ru" class="pull-right"><img src="<?=$this->baseAssets?>/img/mail.google.com.png" alt="Почта России"></a>
	<h3 class="muted">8 (800) 100-70-10</h3>
</div><!-- footer -->

</body>
</html>
