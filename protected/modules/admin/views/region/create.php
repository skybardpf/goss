<?php
/* @var $this RegionController */
/* @var $model Region */

$this->pageTitle=Yii::app()->name . ' - Добавить регион';
?>

<b>Добавить регион</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>