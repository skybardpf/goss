<?php
/**
 * Модель: Потребитель гос. услуг.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class Consumer extends CActiveRecord
{
    public $mobile;
    public $surname;
    public $name;
    public $patronymic;

    /**
     * @param string $className
     * @return Consumer
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
        return 'consumer';
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'tickets' => array(self::MANY_MANY, 'Ticket', 'consumer_id')
        );
    }
}