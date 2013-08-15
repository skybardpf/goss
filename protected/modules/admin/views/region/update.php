<?php
/* @var $this RegionController */
/* @var $model Region */

$this->pageTitle=Yii::app()->name . ' - Редактировать регион';
?>

<b>Редактировать регион</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>