<?php
/* @var $this TBookingStockController */
/* @var $model TBookingStock */

$this->breadcrumbs = array(
    'Tbooking Stocks' => array('index'),
    $model->id_Booking_Stock,
);

$this->menu = array(
    array('label' => 'List TBookingStock', 'url' => array('index')),
    array('label' => 'Create TBookingStock', 'url' => array('create')),
    array('label' => 'Update TBookingStock', 'url' => array('update', 'id' => $model->id_Booking_Stock)),
    array('label' => 'Delete TBookingStock', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Booking_Stock), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage TBookingStock', 'url' => array('admin')),
);
?>

<div class="bloc">
    <div class="title">View TBookingStock #<?php echo $model->id_Booking_Stock; ?></div> 
    <div class="content">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'id_Booking_Stock',
                'Booking',
                'Booking_Date',
                'PO_System',
                'Custumer_Name',
                'Address',
                'Contact_Person',
                'period_rent',
                'Marketing_Officer',
                'Delivery_Date',
                'Unit',
                array(
                    'name' => 'Nomor_Polisi_KBM_Stock_Pool',
                    'value' => $model->nomorPolisiKBMStockPool->plate_number ,
                )
                ,
                array(
                    'name' => 'Booking_Day',
                    'value' => $model->moBooking->booking_day . " day(s)",
                ),
                'locked_date',
            ),
        ));
        ?>
    </div>
</div>

</div>
