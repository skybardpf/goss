<?php
/**
 * Создание новой заявки по GET запросу.
 * Интеграция со стороним сервисом.
 *
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class CreateAction extends CAction
{
    public function run()
    {
        try {
            if (!isset($_GET['msisdn']) || empty($_GET['msisdn'])){
                throw new CException('Не задан номер телефона');
            }
            if (!isset($_GET['datetime']) || empty($_GET['datetime'])){
                throw new CException('Не задано время');
            }
            if (!isset($_GET['snils']) || empty($_GET['snils'])){
                throw new CException('Не задан СНИЛС');
            }
            if (!isset($_GET['order']) || empty($_GET['order'])){
                throw new CException('Не задан номер заявки');
            }
            if (!isset($_GET['region']) || empty($_GET['region'])){
                throw new CException('Не задан регион');
            }
            if (!isset($_GET['usluga']) || empty($_GET['usluga'])){
                throw new CException('Не задана услуга');
            }

            $supplier = Supplier::model()->findByAttributes(
                array(
                    'snils' => $_GET['snils']
                )
            );
            if ($supplier === null){
                throw new CException('Не найден поставщик услуги по СНИЛС.');
            }

            $consumer = Consumer::model()->findByAttributes(
                array(
                    'surname' => 'Аноним',
                    'name' => 'Аноним',
                    'patronymic' => 'Аноним',
                )
            );
            if ($consumer === null){
                throw new CException('Не найден получатель услуги.');
            }

            $ticket = new Ticket();
            $ticket->created = time();
            $ticket->supplier_id = $supplier->primaryKey;
            $ticket->consumer_id = $consumer->primaryKey;
            $ticket->number = $_GET['order'];
            $ticket->organization_id = $supplier->organization_id;
            $ticket->region_id = $_GET['region'];
            $ticket->document_id = 0; // TODO подставить правильное
            $ticket->service_id = $_GET['usluga'];
            $ticket->status = 1;

            $ticket->save();

            echo 'Заявка принята.';

        } catch(CException $e){
            echo 'Ошибка: '.$e->getMessage();
        }
    }
}