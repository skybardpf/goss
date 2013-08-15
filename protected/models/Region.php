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

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('name', 'required'),
            array('name', 'length', 'max'=>150),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'name' => 'Название',
        );
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