<?php
/**
 * Создание новой заявки.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class AddAction extends CAction
{
    public function run(){

        $ticket = new Ticket();
        $ticket->organization_id = Yii::app()->user->organization_id;
        $consumer = new Consumer();

        $class = get_class($ticket);
        $class_consumer = get_class($consumer);
        if (isset($_POST[$class]) && isset($class_consumer)) {
            $ticket->setAttributes($_POST[$class]);
            $consumer->setAttributes($_POST[$class_consumer]);

            if ($consumer->validate() && $consumer->save()) {
                $ticket->consumer_id = $consumer->primaryKey;
                $ticket->supplier_id = Yii::app()->user->getId();

                if ($ticket->validate()) {
                    try {
                        $ticket->save();
                        $this->controller->redirect(
                            $this->controller->createUrl('supplier/')
                        );
                    } catch (CException $e) {
                        $ticket->addError('id', $e->getMessage());
                    }
                }
            }
        }
        $this->controller->render(
            'form',
            array(
                'ticket' => $ticket,
                'consumer' => $consumer,
            )
        );
    }
}