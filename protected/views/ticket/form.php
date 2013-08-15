<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @var TicketController $this
 * @var Ticket $ticket
 * @var Consumer $consumer
 */
?>
<h2>Создание нового тикета</h2>
<?php
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

if ($ticket->hasErrors()) {
    echo '<br/><br/>'. $form->errorSummary($ticket);
}

echo $form->dropDownListRow(
    $ticket,
    'service_id',
    CHtml::listData(Service::model()->findAll(), 'id', 'name'),
    array('prompt' => '--- Выберите услугу ---')
);
?>


<?php
//echo $form->textFieldRow($model, 'mobile');

$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=> 'submit',
    'type'      => 'primary',
    'label'     => 'Найти'
));

$this->endWidget();