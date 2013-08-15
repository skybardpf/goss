<?php
/* @var $this OrganizationController */
/* @var $model Organization */

$this->pageTitle=Yii::app()->name . ' - Добавить организацию';
?>

<b>Добавить организацию</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>