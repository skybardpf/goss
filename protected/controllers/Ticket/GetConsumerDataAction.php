<?php
/**
 * Получение информации о получателе гос. услуг по его номеру документа.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class GetConsumerDataAction extends CAction
{
    public function run(){
        try {
            if (!isset($_GET['type']) || empty($_GET['type'])){
                throw new TicketException('Не указан тип документа');
            }
            if (!isset($_GET['number']) || empty($_GET['number'])){
                throw new TicketException('Не указан номер документа');
            }

            /**
             * @var IdentityDocument $document
             */
            $document = IdentityDocument::model()->findByAttributes(array(
                'type_id' => $_GET['type'],
                'number' => $_GET['number']
            ));

            if ($document === null){
                $result = false;
            } else {
                $result = array(
                    'surname' => $document->consumer->surname,
                    'name' => $document->consumer->name,
                    'patronymic' => $document->consumer->patronymic,
                    'mobile' => $document->consumer->mobile,
                );
            }

            echo CJSON::encode(
                array(
                    'success' => true,
                    'result' => $result
                )
            );

        } catch (TicketException $e){
            echo CJSON::encode(
                array(
                    'success' => false,
                    'error' => $e->getMessage()
                )
            );
        }
    }
}