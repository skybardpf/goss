<?php
/* @var $this ServiceController */
/* @var $dataProvider CActiveDataProvider */

$this->pageTitle=Yii::app()->name . ' - Услуги';
?>

<b>Услуги</b>

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
