<?php
/* @var $this TBookingKendaraanController */
/* @var $model TBookingKendaraan */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'tbooking-kendaraan-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php
if ($form->errorSummary($model)) {
    echo '<div class="notif error">' . $form->errorSummary($model) . '</div>';
}
?>



<div class="input">
    <?php echo $form->labelEx($model, 'No_Booking'); ?>
    <?php echo $form->textField($model, 'No_Booking'); ?>
    <span class="error-message"><?php echo $form->error($model, 'No_Booking'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Booking_Date'); ?>
    <?php echo $form->textField($model, 'Booking_Date'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Booking_Date'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'PO_System'); ?>
    <?php echo $form->hiddenField($model, 'PO_System'); ?>
    <input type="text" name="po" id="po" value="<?php echo $pos; ?>"/>
    <span class="error-message"><?php echo $form->error($model, 'PO_System'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'PO_by_Custumer'); ?>
    <input type="text" name="poc" id="poc" value="<?php echo $poc ?>"/>
<!--    <span class="error-message"><?php echo $form->error($model, 'PO_by_Custumer'); ?></span>-->
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Customer_Name'); ?>
    <?php echo $form->textField($model, 'Customer_Name'); ?>

    <span class="error-message"><?php echo $form->error($model, 'Custumer_Name'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'ID_Custumer'); ?>
    <?php echo $form->textField($model, 'ID_Custumer'); ?>
    <span class="error-message"><?php echo $form->error($model, 'ID_Custumer', array('size' => 20, 'maxlength' => 20)); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Address'); ?>
    <?php echo $form->textArea($model, 'Address', array('rows' => 6, 'cols' => 10, 'size' => 100)); ?>

    <span class="error-message"><?php echo $form->error($model, 'Address'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Contact_Person'); ?>
    <?php echo $form->textField($model, 'Contact_Person'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Contact_Person'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Rent_Period'); ?>
    <?php echo $form->textField($model, 'Rent_Period'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Rent_Period'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Marketing_Officer'); ?>
    <?php echo $form->textField($model, 'Marketing_Officer'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Marketing_Officer'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Delivery_Date'); ?>
    <?php echo $form->textField($model, 'Delivery_Date'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Delivery_Date'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Unit'); ?>
    <?php echo $form->textField($model, 'Unit'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Unit'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Nomor_Polisi_KBM_GS'); ?>
    <?php echo $form->hiddenField($model, 'Nomor_Polisi_KBM_GS'); ?>
    <input type="text" name="vehicle" id="vehicle" value="<?php echo $vehicle; ?>">
    <span class="error-message"><?php echo $form->error($model, 'Nomor_Polisi_KBM_GS'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Jangka_Waktu_GS'); ?>
    <?php echo $form->textField($model, 'Jangka_Waktu_GS'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Jangka_Waktu_GS'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Alasan_dilakukan_GS'); ?>
    <?php echo $form->textArea($model, 'Alasan_dilakukan_GS', array('rows' => 6, 'cols' => 10, 'size' => 100)); ?>
    <span class="error-message"><?php echo $form->error($model, 'Alasan_dilakukan_GS'); ?></span>
</div>

<div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>
<div id="dialog"></div>
<div id="vehicleLookup"></div>
<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
        $("#TBookingKendaraan_No_Booking,#po, #TBookingKendaraan_PO_System, #poc , #TBookingKendaraan_ID_Custumer , #TBookingKendaraan_Contact_Person , #TBookingKendaraan_Marketing_Officer , #TBookingKendaraan_Delivery_Date").mandatoryPluginID();
        $("#TBookingKendaraan_No_Booking,#po, #TBookingKendaraan_PO_System, #poc, #TBookingKendaraan_ID_Custumer").mandatoryPlugin();
        $("#TBookingKendaraan_Delivery_Date").datepicker({dateFormat: "yy-mm-dd"});
        $("#TBookingKendaraan_Booking_Date").datepicker({dateFormat: "yy-mm-dd"});
    });
    $('#dialog').dialog({
        title: "Purchase Order List",
        resizable: true,
        autoOpen: false,
        modal: true,
        hide: 'fade',
        width: 550,
        autoheight: true,
        buttons: {
            "Select": function() {
                var id = $("input[type='radio']:checked").val();
                $("#TBookingKendaraan_PO_System").val(id);
                $("#po").val($(".po" + id).html().trim());
                $("#poc").val($(".poc" + id).html().trim());
                $("#customername").val($(".customer" + id).html().trim());

                $(this).dialog("close");
            },
            "Cancel": function() {
                $(this).dialog("close");
            }
        }
    });

    $('#vehicleLookup').dialog({
        title: "Vehicle List",
        resizable: true,
        autoOpen: false,
        modal: true,
        hide: 'fade',
        width: 550,
        autoheight: true,
        buttons: {
            "Select": function() {
                var id = $("input[type='radio']:checked").val();
                $("#TBookingKendaraan_Nomor_Polisi_KBM_GS").val(id);
                $("#vehicle").val($(".plateNumber" + id).html().trim());

                $(this).dialog("close");
            },
            "Cancel": function() {
                $(this).dialog("close");
            }
        }
    });
    $("#po").bind("click", function() {
        $("#dialog").load("<?php echo $this->createAbsoluteUrl("PurchaseOrder/lookupPurchaseOrder") ?>").dialog("open");
    })
    $("#vehicle").bind("click", function() {
        $("#vehicleLookup").load("<?php echo $this->createAbsoluteUrl("vehicle/lookupVehicle") ?>").dialog("open");
    })
</script>


