<?php
/**
 * Архив заявок за все время
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class ArchiveAction extends CAction
{
    public function run(){

        $crt = new CDbCriteria;
//        $crt->select = "id, number, created";
        $crt->with = array(
            'supplier',
            'service'
        );
        $crt->condition = 'supplier_id = :supplier_id';
        $crt->order = 'created DESC';
        $crt->params = array(
            ':supplier_id' => Yii::app()->user->getId(),
        );

        $data = Ticket::model()->findAll($crt);

        $this->controller->render(
            'archive',
            array(
                'data' => $data
            )
        );
    }
}