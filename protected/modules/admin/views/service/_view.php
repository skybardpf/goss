<?php
/* @var $this ServiceController */
/* @var $data Service */
?>

<?php echo CHtml::encode($data->id); ?>.

<?php echo CHtml::encode($data->name); ?>

<?php echo CHtml::link('редактировать',array('service/update', 'id'=>$data->id)); ?>

<?php echo CHtml::link('удалить',array('service/delete', 'id'=>$data->id)); ?>

<br /><br />