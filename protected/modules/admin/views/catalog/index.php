<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<h2>Справочники</h2>
<table class="detail-view table table-striped table-condensed">
    <tr>
        <td><?php echo CHtml::link('Регионы ('.$regionsCount.')', array($this->createUrl('region/index'))); ?></td>
        <td><?php echo CHtml::link('Добавить регион', array($this->createUrl('region/create'))); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::link('Организации ('.$organizationsCount.')', array($this->createUrl('organization/'))); ?></td>
        <td><?php echo CHtml::link('Добавить организацию', array($this->createUrl('organization/create'))); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::link('Услуги ('.$servicesCount.')', array($this->createUrl('service/'))); ?></td>
        <td><?php echo CHtml::link('Добавить услугу', array($this->createUrl('service/create'))); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::link('Пользователи ('.$suppliersCount.')', array($this->createUrl('supplier/'))); ?></td>
        <td><?php echo CHtml::link('Добавить пользователя', array($this->createUrl('supplier/create'))); ?></td>
    </tr>
</table>