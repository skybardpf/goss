<?php
/* @var $this OrganizationController */
/* @var $data Organization */
?>

<?php echo CHtml::encode($data->id); ?>.

<?php echo CHtml::encode($data->name); ?>

<?php echo CHtml::link('редактировать',array('organization/update', 'id'=>$data->id)); ?>

<?php echo CHtml::link('удалить',array('organization/delete', 'id'=>$data->id)); ?>

<br /><br />