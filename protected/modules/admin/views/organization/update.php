<?php
/* @var $this OrganizationController */
/* @var $model Organization */

$this->pageTitle=Yii::app()->name . ' - Редактировать организацию';
?>

<b>Редактировать организацию</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>