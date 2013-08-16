<?php
/**
 * Создание новой заявки по GET запросу.
 * Интеграция со стороним сервисом.
 *
 * @author Skibardin Andrey <skybardpf@artektiv.ru>
 */
class CreateAction extends CAction
{
    public function run($msisdn, $datetime, $snils, $order, $region, $usluga)
    {
//        method=createOrder
//msisdn=%номер телефона%, можно игнорировать пока
//datetime=%датавремя создания заказа%
//    snils=%снилс%, для идентификации Поставщика
//order=%номер заявки%, 16 цифр
//region=%номер региона%
//    usluga=%номер услуги%
    }
}