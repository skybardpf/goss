<?php
/**
 * Модель: Потребитель гос. услуг.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class Consumer extends CActiveRecord
{
    public $mobile;
    public $surname;
    public $name;
    public $patronymic;

    /**
     * @param string $className
     * @return Consumer
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
        return 'consumer';
    }

    /**
     * @return array
     */
    public function relations()
    {
        return array(
            'tickets' => array(self::MANY_MANY, 'Ticket', 'consumer_id')
        );
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return array(
            'mobile' => 'Мобильный телефон',
            'surname' => 'Фамилия',
            'name' => 'Имя',
            'patronymic' => 'Отчество',
        );
    }

    /**
     * @return array
     */
    public function rules()
    {
        return array(
            array('surname, name, patronymic', 'required'),
            array('surname, name, patronymic', 'length', 'max' => 50),

            array('mobile', 'required'),
            array('mobile', 'length', 'max' => 20),
        );
    }
}