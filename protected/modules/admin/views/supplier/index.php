<?php
/* @var $this SupplierController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Пользователь';
?>

<b>Пользователь</b>

<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',   // refers to the partial view named '_post'
    'sortableAttributes'=>array(
        'id' => 'id',
        'name' => 'Название',
    ),
));
?>
