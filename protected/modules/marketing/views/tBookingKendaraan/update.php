<?php
/* @var $this TBookingKendaraanController */
/* @var $model TBookingKendaraan */

$this->breadcrumbs = array(
    'Tbooking Kendaraans' => array('index'),
    $model->id_Booking_Kendaraan => array('view', 'id' => $model->id_Booking_Kendaraan),
    'Update',
);

$this->menu = array(
    array('label' => 'List TBookingKendaraan', 'url' => array('index')),
    array('label' => 'Create TBookingKendaraan', 'url' => array('create')),
    array('label' => 'View TBookingKendaraan', 'url' => array('view', 'id' => $model->id_Booking_Kendaraan)),
    array('label' => 'Manage TBookingKendaraan', 'url' => array('admin')),
);
?>

<div class="bloc">
    <div class="title">Update TBookingKendaraan <?php echo $model->id_Booking_Kendaraan; ?></div> 
    <div class="content">
        <?php
        $this->renderPartial('_form', array('model' => $model, 'poc' => $poc,
            'pos' => $pos,
            'vehicle' => $vehicle))
        ?>		</div>
</div>
</div>