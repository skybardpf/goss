<?php
/**
 * Поле для поиском
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class IndexAction extends CAction
{
    public function run(){
        $crt = new CDbCriteria;
        $crt->with = array(
            'supplier',
            'service'
        );
        $crt->condition = 'supplier_id = :supplier_id AND created >= :created';
        $crt->order = 'created DESC';
        $crt->params = array(
            ':supplier_id' => Yii::app()->user->getId(),
            ':created' => date('Y-m-d 00:00:00'),
        );

        $data = Ticket::model()->findAll($crt);
//        var_dump($data);die;

        $this->controller->render(
            'index',
            array(
                'data' => $data
            )
        );
    }
}