<?php
/* @var $this SupplierController */
/* @var $data Supplier */
?>

<?php echo CHtml::encode($data->id); ?>.

<?php echo CHtml::encode($data->surname); ?>

<?php echo CHtml::encode($data->name); ?>

<?php echo CHtml::encode($data->patronymic); ?>

<?php echo CHtml::link('редактировать',array('supplier/update', 'id'=>$data->id)); ?>

<?php echo CHtml::link('удалить',array('supplier/delete', 'id'=>$data->id)); ?>

<br /><br />