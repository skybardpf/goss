<?php
/* @var $this Controller */

Yii::app()->bootstrap->register();
Yii::app()->clientScript->registerCssFile($this->module->baseAssets.'/css/styles.css');
$this->widget('ext.LoadingWidget.LoadingWidget');

?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style type="text/css">
		ul#yw0 li, ul#yw2 li{
			display: inline-block;
			margin-right: 20px;
		}
		html, body {
			height: 100%;
			padding: 0;
			margin: 0;
		}
		h3 {
			margin-top: 0;
		}
		#header {
			padding-top: 15px;
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

    <?= $content; ?>

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