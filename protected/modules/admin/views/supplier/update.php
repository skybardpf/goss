<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->pageTitle=Yii::app()->name . ' - Редактировать пользователя';
?>

<b>Редактировать пользователя</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>