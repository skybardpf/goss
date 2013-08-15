<?php
/* @var $this ServiceController */
/* @var $model Service */

$this->pageTitle=Yii::app()->name . ' - Редактировать услугу';
?>

<b>Редактировать услугу</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>