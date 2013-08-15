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
    public $region_id;

    public $login;
    public $password;

    /**
     * @param string $className
     * @return Supplier
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
        return 'supplier';
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id')
        );
    }
}