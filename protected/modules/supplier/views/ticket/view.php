<?php
/**
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @var TicketController    $this
 * @var Ticket              $ticket
 */
?>

<?php
$this->breadcrumbs = array(
    'Заявки на сегодня' => $this->createUrl('/supplier'),
    'Создать тикет' => $this->createUrl('add'),
    'Архив заявок' => $this->createUrl('archive'),
    'Просмотр заявки'
);
?>
    <h2>Заявка #<?= CHtml::encode($ticket->number); ?></h2>
<?php
$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $ticket,
    'attributes' => array(
        array(
            'name' => 'consumer_id',
            'label' => 'Подал',
            'value' => $ticket->consumer->getFIO()
        ),
        array(
            'name' => 'supplier_id',
            'label' => 'Принял',
            'value' => $ticket->supplier->getFIO()
        ),
        array(
            'name' => 'status',
            'label' => 'Состояние',
            'value' => $ticket->getStatusName()
        ),
        array(
            'name' => 'organization_id',
            'label' => 'Организация',
            'value' => $ticket->organization->name
        ),
        array(
            'name' => 'region_id',
            'label' => 'Регион',
            'value' => $ticket->region->name
        ),
        array(
            'name' => 'service_id',
            'label' => 'Услуга',
            'value' => $ticket->service->name
        ),
    )
));