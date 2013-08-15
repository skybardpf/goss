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
            'suppliers' => array(self::HAS_MANY, 'Supplier', 'organization_id'),
            'region' => array(self::BELONGS_TO, 'Region', 'organization_id'),
        );
    }
}