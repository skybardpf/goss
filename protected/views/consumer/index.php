<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @var FindTicketForm $model
 */

/**
 * @var TbActiveForm $form
 */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'form-find-ticket',
    'type' => 'horizontal',
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnChange' => true,
    ),
));

if ($model->hasErrors()) {
    echo '<br/><br/>'. $form->errorSummary($model);
}

echo $form->textFieldRow($model, 'ticket_number');
echo $form->textFieldRow($model, 'mobile');

$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=> 'submit',
    'type'      => 'primary',
    'label'     => 'Найти'
));

$this->endWidget();