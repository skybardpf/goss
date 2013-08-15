<?php
/* @var $this ServiceController */
/* @var $model Service */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'service-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); ?>

    <p class="note">Поля со знаком <span class="required">*</span> обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->labelEx($model,'name'); ?>
    <?php echo $form->textField($model,'name',array('size'=>60)); ?>
    <?php echo $form->error($model,'name'); ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->