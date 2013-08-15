<?php
/**
 * Просмотр тикета
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class ViewAction extends CAction
{
    /**
     * @param int $id
     * @throws CHttpException
     */
    public function run($id)
    {
        $ticket = Ticket::model()->findByPk($id);
        if ($ticket === null){
            throw new CHttpException(500, 'Тикет не найден.');
        }

        $this->controller->render(
            'view',
            array(
                'ticket' => $ticket
            )
        );
    }
}