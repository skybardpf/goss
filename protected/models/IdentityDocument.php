<?php
/**
 * Модель: Документ, удостоверяющий личность.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
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
}