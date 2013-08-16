<?php
/**
 * Получание статуса заявки.
 * Интеграция со стороним сервисом.
 *
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class GetStatusAction extends CAction
{
    public function run($msisdn)
    {
        try {
            $cmd = Yii::app()->db->createCommand('
                SELECT t.id, `status`, number, created FROM ticket t, (
                    SELECT MAX(t.id) AS id FROM ticket t
                    JOIN consumer c ON t.consumer_id=c.id
                    WHERE c.mobile = :mobile
                ) tt
                WHERE t.id=tt.id'
            );
            $ticket = $cmd->queryRow(true, array(
                'mobile' => $msisdn
            ));
            if ($ticket === false){
                throw new CException('Не найдено');
            }
            echo CJSON::encode(
                array(
                    'order' => $ticket['number'],
                    'status' => $ticket['status']
                )
            );

        } catch(CException $e){
            echo CJSON::encode(
                array('status' => 99)
            );
        }
    }
}