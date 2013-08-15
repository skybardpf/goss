<?php
/**
 * Форма для поиска тикета по его номеру
 *
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class IndexAction extends CAction
{
    public function run(){
        $model = new FindTicketForm();

        if(isset($_POST['ajax']) && $_POST['ajax'] === 'form-find-ticket') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        $class = get_class($model);
        if (isset($_POST[$class])) {
            $model->setAttributes($_POST[$class]);
            if ($model->validate()) {
                try {
                    $ticket = $model->findTicket();

                    if ($ticket === null){
                        $model->addError('id', 'По Вашему запросу ничего не найдено');
                    } else {
                        $this->controller->redirect(
                            $this->controller->createUrl(
                                'view', array('id' => $ticket->primaryKey)
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