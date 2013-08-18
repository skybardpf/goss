<?php
/**
 * @var ErrorController $this
 * @var array $error
 * @var int $code
 */

$this->pageTitle = Yii::app()->name . ' - Ошибка';
$this->breadcrumbs = array(
    'Ошибка',
);
?>

<h2>Error <?php echo $code; ?></h2>

<div class="error">
    <?php echo CHtml::encode($message); ?>
</div>