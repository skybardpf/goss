<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @var TicketController    $this
 * @var Ticket              $ticket
 * @var Consumer            $consumer
 * @var IdentityDocument    $document
 */
?>

<?php
$this->breadcrumbs = array(
    'Заявки на сегодня' => $this->createUrl('/supplier'),
    'Архив заявок' => $this->createUrl('archive'),
    'Создать тикет'
);
?>

    <h2>Создание нового тикета</h2>
<?php
Yii::app()->clientScript->registerScriptFile($this->baseAssets . '/js/ticket/form.js');

/**
 * @var TbActiveForm $form
 */
$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id' => 'form-ticket',
    'type' => 'horizontal',
    'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnChange' => true,
    ),
));

if ($ticket->hasErrors() || $consumer->hasErrors() || $document->hasErrors()) {
    echo $form->errorSummary(array($ticket, $consumer, $document));
}

echo $form->dropDownListRow(
    $ticket,
    'service_id',

    CHtml::listData(Service::model()->findAll(), 'id', 'name'),
    array('prompt' => '--- Выберите услугу ---')
);

echo $form->dropDownListRow($document, 'type_id',
    CHtml::listData(TypeIdentityDocument::model()->findAll(), 'id', 'name'),
    array('prompt' => '--- Выберите тип документа ---'
    ));
echo $form->textFieldRow($document, 'number');

echo $form->textFieldRow($consumer, 'surname');
echo $form->textFieldRow($consumer, 'name');
echo $form->textFieldRow($consumer, 'patronymic');
echo $form->textFieldRow($consumer, 'mobile');

$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType' => 'submit',
    'type' => 'primary',
    'label' => 'Сохранить'
));

$this->endWidget();