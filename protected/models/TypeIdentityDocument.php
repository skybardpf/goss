<?php
/**
 * Модель: Тип документа, удостоверяющий личность.
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class TypeIdentityDocument extends CActiveRecord
{
    public $name;

    /**
     * @param string $className
     * @return TypeIdentityDocument
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
        return 'type_identity_document';
    }
}