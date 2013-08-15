<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<table>
<thead>
    <th width="300">&nbsp;</th>
    <th width="400">&nbsp;</th>
</thead>
<tbody>
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
</tbody>
</table>