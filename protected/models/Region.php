<?php
/**
 * Модель: Регион. Месторасположение.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class Region extends CActiveRecord
{
    public $name;

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
            'organizations' => array(self::HAS_MANY, 'Organization', 'organization_id'),
        );
    }
}