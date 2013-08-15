<?php
/* @var $this ServiceController */
/* @var $model Service */

$this->pageTitle=Yii::app()->name . ' - Добавить услугу';
?>

<b>Добавить услугу</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>