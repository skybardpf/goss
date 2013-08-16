<?php
/**
 * Модель: Документ, удостоверяющий личность.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @property Consumer $consumer
 */
class IdentityDocument extends CActiveRecord
{
    public $consumer_id;
    public $type_id;
    public $number;
    public $other_data;

    /**
     * @param string $className
     * @return IdentityDocument
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
        return 'identity_document';
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return array(
            'type_id' => 'Тип документа',
            'number' => 'Номер документа',
            'other_data' => 'Другие данные',
        );
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'consumer' => array(self::BELONGS_TO, 'Consumer', 'consumer_id')
        );
    }

    /**
     * @return array
     */
    public function rules()
    {
        return array(
            array('number', 'required'),
            array('number', 'length', 'max' => 30),

            array('type_id', 'required', 'message' => 'Выберите тип документа из списка'),
            array('type_id', 'in', 'range' => array_keys(CHtml::listData(TypeIdentityDocument::model()->findAll(), 'id', 'name'))),


        );
    }
}