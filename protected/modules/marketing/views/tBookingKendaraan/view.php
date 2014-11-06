<?php
/* @var $this TBookingKendaraanController */
/* @var $model TBookingKendaraan */

$this->breadcrumbs = array(
    'Tbooking Kendaraans' => array('index'),
    $model->id_Booking_Kendaraan,
);

$this->menu = array(
    array('label' => 'List TBookingKendaraan', 'url' => array('index')),
    array('label' => 'Create TBookingKendaraan', 'url' => array('create')),
    array('label' => 'Update TBookingKendaraan', 'url' => array('update', 'id' => $model->id_Booking_Kendaraan)),
    array('label' => 'Delete TBookingKendaraan', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id_Booking_Kendaraan), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage TBookingKendaraan', 'url' => array('admin')),
);
?>

<div class="bloc">
    <div class="title">View TBookingKendaraan #<?php echo $model->id_Booking_Kendaraan; ?></div> 
    <div class="content">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'id_Booking_Kendaraan',
                'No_Booking',
                'Booking_Date',
                'PO_System',
                array(
                    'name' => 'po_customer_no',
                    'value' => $model->pOSystem->po_customer_no,
                ),
                'Customer_Name',
                'ID_Custumer',
                'Address',
                'Contact_Person',
                'Rent_Period',
                'Marketing_Officer',
                'Delivery_Date',
                'Unit',
                'Nomor_Polisi_KBM_GS',
                'Jangka_Waktu_GS',
                'Alasan_dilakukan_GS',
            ),
        ));
        ?>
    </div>
</div>
</div>
