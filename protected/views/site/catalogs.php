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
        <td><?php echo CHtml::link('Регионы ('.$regionsCount.')', array('admin/region/index')); ?></td>
        <td><?php echo CHtml::link('Добавить регион', array('admin/region/create')); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::link('Организации ('.$organizationsCount.')', array('admin/organization/index')); ?></td>
        <td><?php echo CHtml::link('Добавить организацию', array('admin/organization/create')); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::link('Услуги ('.$servicesCount.')', array('admin/service/index')); ?></td>
        <td><?php echo CHtml::link('Добавить услугу', array('admin/service/create')); ?></td>
    </tr>
    <tr>
        <td><?php echo CHtml::link('Пользователи ('.$suppliersCount.')', array('admin/supplier/index')); ?></td>
        <td><?php echo CHtml::link('Добавить пользователя', array('admin/supplier/create')); ?></td>
    </tr>
</tbody>
</table>