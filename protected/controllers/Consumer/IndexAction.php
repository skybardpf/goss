<?php
/**
 * Поле для поиском
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class IndexAction extends CAction
{
    public function run(){
        $model = new FindTicketForm();

        $class = get_class($model);
        if (isset($_POST[$class])) {
            $model->setAttributes($_POST[$class]);
            if ($model->validate()) {

                try {
                    $ticket = $model->findTicket();
                    if ($ticket === null){
                        $model->addError('id', 'Тикет не найден');
                    } else {
                        $this->controller->redirect(
                            $this->controller->createUrl(
                                'ticket', array('id' => $ticket->primaryKey)
                            )
                        );
                    }
                } catch (CException $e) {
                    $model->addError('id', $e->getMessage());
                }
            }
        }
        $this->controller->render(
            'index',
            array(
                'model' => $model
            )
        );
    }
}