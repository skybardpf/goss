<?php
/**
 * Модель: Заявка-тикет на выполнение гос. услуги.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 *
 * @property Region $region
 * @property Organization $organization
 * @property Consumer $consumer
 * @property Supplier $supplier
 * @property Service $service
 */
class Ticket extends CActiveRecord
{
    public $number;
    public $created;
    public $consumer_id;
    public $supplier_id;
    public $organization_id;
    public $region_id;
    public $document_id;
    public $service_id;
    public $status;

    /**
     * @return array
     */
    public function behaviors(){
        return array(
            'CTimestampbehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'created',
//                'updateAttribute' => 'dateChanged',
            )
        );
    }

    /**
     * @param string $className
     * @return Ticket
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
        return 'ticket';
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'region' => array(self::BELONGS_TO, 'Region', 'region_id'),
            'organization' => array(self::BELONGS_TO, 'Organization', 'organization_id'),
            'consumer' => array(self::BELONGS_TO, 'Consumer', 'consumer_id'),
            'supplier' => array(self::BELONGS_TO, 'Supplier', 'supplier_id'),
            'service' => array(self::BELONGS_TO, 'Service', 'service_id'),
        );
    }

    /**
     * Declares attribute labels.
     */
    public function attributeLabels()
    {
        return array(
            'consumer_id' => 'Потребитель',
            'region_id' => 'Регион',
            'supplier_id' => 'Поставщик',
            'service_id' => 'Услуга',
        );
    }

    /**
     * @return array
     */
    public function rules()
    {
        return array(
            array('service_id', 'required', 'message' => 'Выберите услугу'),
            array('service_id', 'in', 'range' => array_keys(CHtml::listData(Service::model()->findAll(), 'id' , 'name')), 'message' => 'Выберите услугу из списка'),
        );
    }

    /**
     * @return string
     */
    public function getStatusName(){
        switch ($this->status){
            case 1: $ret = 'Новый'; break;
            case 2: $ret = 'В работе'; break;
            case 3: $ret = 'Обработан'; break;
            default: $ret = 'Новый';
        }
        return $ret;
    }
}