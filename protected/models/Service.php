<?php
/**
 * Модель: Услуга. Гос. услуга населению.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class Service extends CActiveRecord
{
    public $name;
    public $organization_id;

    /**
     * @param string $className
     * @return Service
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
        return 'service';
    }
}