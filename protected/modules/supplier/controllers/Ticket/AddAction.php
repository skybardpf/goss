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
        $ticket->region_id = Yii::app()->user->region_id;
        $ticket->supplier_id = Yii::app()->user->getId();

        $consumer = new Consumer();
        $document = new IdentityDocument();

        if(isset($_POST['ajax']) && $_POST['ajax'] === 'form-ticket') {
            echo CActiveForm::validate(
                array($ticket, $consumer, $document)
            );
            Yii::app()->end();
        }

        $class = get_class($ticket);
        $class_consumer = get_class($consumer);
        $class_document = get_class($document);
        if (isset($_POST[$class]) && isset($class_consumer) && isset($class_document)) {
            try {
                $ticket->setAttributes($_POST[$class]);
                $document->setAttributes($_POST[$class_document]);
                $consumer->setAttributes($_POST[$class_consumer]);

                if ($ticket->validate()){
                    if ($document->validate()){
                        $valid = true;
                        /**
                         * @var IdentityDocument $exists_doc
                         */
                        $exists_doc = IdentityDocument::model()->findByAttributes(array(
                            'type_id' => $document->type_id,
                            'number' => $document->number
                        ));

                        if ($exists_doc === null){
                            if ($valid = $consumer->validate()){
                                $consumer->save();
                                $document->consumer_id = $consumer->primaryKey;
                                $document->save();
                            }
                            $ticket->consumer_id = $document->consumer_id;
                            $ticket->document_id = $document->primaryKey;
                        } else {
                            $ticket->consumer_id = $exists_doc->consumer_id;
                            $ticket->document_id = $exists_doc->primaryKey;
                        }

                        if ($valid){
                            $ticket->created = time();
                            $ticket->number = 'Number'.time(); // TODO генерировать правильный
                            $ticket->save();

                            $this->controller->redirect(
                                $this->controller->createUrl('/supplier')
                            );
                        }
                    }
                }
            } catch (CException $e) {
                $ticket->addError('id', $e->getMessage());
            }
        }
        $this->controller->render(
            'form',
            array(
                'ticket' => $ticket,
                'consumer' => $consumer,
                'document' => $document,
            )
        );
    }
}