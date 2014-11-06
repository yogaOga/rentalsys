<?php
/* @var $this TBookingStockController */
/* @var $model TBookingStock */

$this->breadcrumbs = array(
    'Tbooking Stocks' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List TBookingStock', 'url' => array('index')),
    array('label' => 'Manage TBookingStock', 'url' => array('admin')),
);
?>


<div class="bloc">
    <div class="title">Create TBookingStock</div> 
    <div class="content">
        <?php $this->renderPartial('_form', array('model' => $model, 'po' => $po, 'vehicle' => $vehicle)); ?>		</div>
</div>
</div>