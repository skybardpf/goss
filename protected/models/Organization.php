<?php
/**
 * Модель: Гос. организация, предоставляющая услуги.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class Organization extends CActiveRecord
{
    public $name;

    /**
     * @param string $className
     * @return Organization
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
        return 'organization';
    }
}