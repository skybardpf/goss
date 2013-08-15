<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @var TicketController $this
 * @var Ticket[] $data
 */
?>

<?php
$this->breadcrumbs = array(
    'Заявки на сегодня' => $this->createUrl('supplier/'),
    'Создать тикет' => $this->createUrl('add'),
    'Архив заявок'
);
?>
    <h2>Архив заявок</h2>
<?php
$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => new CArrayDataProvider($data),
    'template' => "{items} {pager}",
    'columns' => array(
        array(
            'name' => 'created',
            'header' => 'Создано'
        ),
        array(
            'name' => 'number',
            'header' => 'Тикет',
            'type' => 'raw',
            'value' => 'CHtml::link($data["number"], Yii::app()->getController()->createUrl("ticket/view", array("id" => $data["id"])))'
        ),
        array(
            'name' => 'supplier',
            'header' => 'Потребитель',
            'value' => '$data->consumer->getFIO();'
        ),
        array(
            'name' => 'service.name',
            'header' => 'Услуга'
        ),
    ),
));