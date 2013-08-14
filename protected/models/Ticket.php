<?php
/**
 * Модель: Заявка-тикет на выполнение гос. услуги.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class Ticket extends CActiveRecord
{
    public $number;
    public $created;
    public $consumer_id;
    public $supplier_id;
    public $organization_id;
    public $region_id;

    /**
     * @param string $className
     * @return Ticket
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string
     */
    public function tableName()
    {
        return 'ticket';
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'consumers' => array(self::MANY_MANY, 'Consumer', 'consumer_id')
        );
    }
}