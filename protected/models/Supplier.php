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

    public $login;
    public $password;
    public $region_id;
    public $role_id;

    public $snils;


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
        return 'supplier';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('surname, login, password, snils', 'required'),
            array('surname, name', 'length', 'max'=>50),
            array('snils', 'length', 'is'=>6), // TODO: формат поля
            array('organization_id, region_id, role_id', 'numerical', 'integerOnly'=>true),
            array('patronymic', 'default'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'surname'         => 'Фамилия',
            'name'            => 'Имя',
            'patronymic'      => 'Отчество',
            'login'           => 'Логин',
            'password'        => 'Пароль',
            'organization_id' => 'Организация',
            'region_id'       => 'Регион',
            'role_id'         => 'Роль',
            'snils'           => 'СНИЛС',
        );
    }
}