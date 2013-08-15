<?php
/**
 * Поле для поиском
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class IndexAction extends CAction
{
    public function run(){

        $data = Ticket::model()->findAll();

        $this->controller->render(
            'index',
            array(
                'data' => $data
            )
        );
    }
}