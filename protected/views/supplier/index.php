<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @var SupplierController $this
 * @var Ticket[] $data
 */
?>
    <h2>Заявки на сегодня</h2>
<?php
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=> 'success',
    'type'      => 'normal',
    'label'     => 'Создать новый тикет',
    'url' => $this->createUrl('/ticket/add')
));
echo '&nbsp;&nbsp;';
$this->widget('bootstrap.widgets.TbButton', array(
    'buttonType'=> 'success',
    'type'      => 'normal',
    'label'     => 'Архив заявок',
    'url' => $this->createUrl('/ticket/archive')
));

$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered condensed',
    'dataProvider' => new CArrayDataProvider($data),
    'template' => "{items} {pager}",
    'columns' => array(
        array(
            'name' => 'number',
            'header' => 'Тикет',
            'type' => 'raw',
            'value' => 'CHtml::link($data["number"], Yii::app()->getController()->createUrl("ticket/view", array("id" => $data["number"])))'
        ),
        array(
            'name' => 'supplier',
            'header' => 'Потребитель',
            'value' => '$data->getSupplierFIO();'
        ),
        array(
            'name' => 'service.name',
            'header' => 'Услуга'
        ),
    ),
));