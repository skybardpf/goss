<?php
/**
 * Просмотр заявки.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class ViewAction extends CAction
{
    /**
     * @param int $id
     * @throws CHttpException
     */
    public function run($id){
        $ticket = Ticket::model()->findByPk($id);
        if ($ticket === null){
            throw new CHttpException(500, 'Не найден тикет.');
        }

        $this->controller->render(
            'view',
            array(
                'ticket' => $ticket
            )
        );
    }
}