<?php
/* @var $this SupplierController */
/* @var $model Supplier */

$this->pageTitle=Yii::app()->name . ' - Добавить пользователя';
?>

<b>Добавить пользователя</b>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>