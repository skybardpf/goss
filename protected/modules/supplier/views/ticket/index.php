<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @var TicketController    $this
 * @var Ticket[]            $data
 */
?>
<?php
$this->breadcrumbs = array(
    'Заявки на сегодня'
);
?>
    <h2>Заявки на сегодня</h2>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=> 'success',
    'type'      => 'normal',
    'label'     => 'Создать новый тикет',
    'url' => $this->createUrl('add')
));
echo '&nbsp;&nbsp;';
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=> 'success',
    'type'      => 'normal',
    'label'     => 'Архив заявок',
    'url' => $this->createUrl('archive')
));

$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => new CArrayDataProvider($data),
    'template' => "{items} {pager}",
    'columns' => array(
        array(
            'name' => 'number',
            'header' => 'Номер заявки',
            'type' => 'raw',
            'value' => 'CHtml::link($data["number"], Yii::app()->getController()->createUrl("ticket/view", array("id" => $data["id"])))'
        ),
        array(
            'name' => 'created',
            'header' => 'Время',
        ),
        array(
            'name' => 'supplier',
            'header' => 'Телефон',
            'value' => '$data->consumer->mobile;'
        ),
        array(
            'name' => 'supplier',
            'header' => 'ФИО',
            'value' => '$data->consumer->getFIO();'
        ),
        array(
            'name' => 'service.name',
            'header' => 'Услуга'
        ),
    ),
));