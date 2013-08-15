<?php
/* @var $this SupplierController */
/* @var $model Supplier */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'supplier-form',
	'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype' => 'multipart/form-data'),
)); ?>

    <p class="note">Поля со знаком <span class="required">*</span> обязательны для заполнения.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->labelEx($model,'surname'); ?>
    <?php echo $form->textField($model,'surname',array('size'=>60)); ?>
    <?php echo $form->error($model,'surname'); ?>

    <?php echo $form->labelEx($model,'name'); ?>
    <?php echo $form->textField($model,'name',array('size'=>60)); ?>
    <?php echo $form->error($model,'name'); ?>

    <?php echo $form->labelEx($model,'patronymic'); ?>
    <?php echo $form->textField($model,'patronymic',array('size'=>60)); ?>
    <?php echo $form->error($model,'patronymic'); ?>

    <?php echo $form->labelEx($model,'login'); ?>
    <?php echo $form->textField($model,'login',array('size'=>60)); ?>
    <?php echo $form->error($model,'login'); ?>

    <?php echo $form->labelEx($model,'password'); ?>
    <?php echo $form->passwordField($model,'password',array('size'=>60)); ?>
    <?php echo $form->error($model,'password'); ?>

    <?php echo $form->labelEx($model,'organization_id'); ?>
    <?php echo $form->listBox($model, 'organization_id', $this->getOrganizations(), array('size'=>1)); ?>
    <?php echo $form->error($model,'organization_id'); ?>

    <?php echo $form->labelEx($model,'region_id'); ?>
    <?php echo $form->listBox($model, 'region_id', $this->getRegion(), array('size'=>1)); ?>
    <?php echo $form->error($model,'region_id'); ?>

    <?php echo $form->labelEx($model,'role_id'); ?>
    <?php echo $form->listBox($model, 'role_id', $this->getRoles(), array('size'=>1)); ?>
    <?php echo $form->error($model,'role_id'); ?>

    <?php echo $form->labelEx($model,'snils'); ?>
    <?php echo $form->textField($model,'snils',array('size'=>6, 'maxlength'=>6)); ?>
    <?php echo $form->error($model,'snils'); ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Создать' : 'Сохранить'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->