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
}