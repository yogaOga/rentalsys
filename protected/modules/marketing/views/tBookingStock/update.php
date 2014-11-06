<?php
/* @var $this TBookingStockController */
/* @var $model TBookingStock */

$this->breadcrumbs = array(
    'Tbooking Stocks' => array('index'),
    $model->id_Booking_Stock => array('view', 'id' => $model->id_Booking_Stock),
    'Update',
);

$this->menu = array(
    array('label' => 'List TBookingStock', 'url' => array('index')),
    array('label' => 'Create TBookingStock', 'url' => array('create')),
    array('label' => 'View TBookingStock', 'url' => array('view', 'id' => $model->id_Booking_Stock)),
    array('label' => 'Manage TBookingStock', 'url' => array('admin')),
);
?>

<div class="bloc">
    <div class="title">Update TBookingStock <?php echo $model->id_Booking_Stock; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_form', array('model' => $model, 'po' => $po, 'vehicle' => $vehicle)); ?>		</div>
</div>
</div>