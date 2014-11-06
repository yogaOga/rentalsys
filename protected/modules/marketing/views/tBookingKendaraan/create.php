<?php
/* @var $this TBookingKendaraanController */
/* @var $model TBookingKendaraan */

$this->breadcrumbs = array(
    'Tbooking Kendaraans' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List TBookingKendaraan', 'url' => array('index')),
    array('label' => 'Manage TBookingKendaraan', 'url' => array('admin')),
);
?>


<div class="bloc">
    <div class="title">Create TBookingKendaraan</div> 
    <div class="content">
        <?php
        $this->renderPartial('_form', array('model' => $model, 'poc' => $poc,
            'pos' => $pos,
            'vehicle' => $vehicle))
        ?>		</div>
</div>
</div>