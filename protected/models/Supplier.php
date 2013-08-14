<?php
/**
 * Модель: Поставщик гос. услуг.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class Supplier extends CActiveRecord
{
    public $surname;
    public $name;
    public $patronymic;
    public $organization_id;


    /**
     * @param string $className
     * @return Region
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
        return 'region';
    }
}