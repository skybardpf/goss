<?php
/* @var $this RegionController */
/* @var $data Region */
?>

<?php echo CHtml::encode($data->id); ?>.

<?php echo CHtml::encode($data->name); ?>

<?php echo CHtml::link('редактировать',array('region/update', 'id'=>$data->id)); ?>

<?php echo CHtml::link('удалить',array('region/delete', 'id'=>$data->id)); ?>

<br /><br />