<?php
/* @var $this TBookingStockController */
/* @var $model TBookingStock */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'tbooking-stock-form',
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
    <?php echo $form->labelEx($model, 'Booking'); ?>
    <?php echo $form->textField($model, 'Booking'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Booking'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Booking_Date'); ?>
    <?php echo $form->textField($model, 'Booking_Date'); ?>
    <span class="error-message"><?php echo $form->error($model, 'Booking_Date'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'PO_System'); ?>
    <?php echo $form->hiddenField($model, 'PO_System'); ?>
    <input type="text" name="po" value="<?php echo $po; ?>" id="po" placeholder="PO SYSTEM">
    <span class="error-message"><?php echo $form->error($model, 'PO_System'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'PO_Custumer'); ?>
    <?php echo $form->textField($model, 'PO_Custumer',array('placeholder'=>'PO CUSTOMER')); ?>


</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Custumer_Name'); ?>
    <?php echo $form->textField($model, 'Custumer_Name',array('placeholder'=>'CUSTOMER NAME')); ?>


</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Address'); ?>
    <?php echo $form->textArea($model, 'Address',array('placeholder'=>'ADDRESS')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Address'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Contact_Person'); ?>
    <?php echo $form->textField($model, 'Contact_Person',array('placeholder'=>'CONTACT PERSON')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Contact_Person'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'period_rent'); ?>
    <?php echo $form->textField($model, 'period_rent',array('placeholder'=>'PERIOD RENT')); ?>
    <span class="error-message"><?php echo $form->error($model, 'period_rent'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Marketing_Officer'); ?>
    <?php echo $form->textField($model, 'Marketing_Officer',array('placeholder'=>'MARKETING OFFICER')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Marketing_Officer'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Delivery_Date'); ?>
    <?php echo $form->textField($model, 'Delivery_Date',array('placeholder'=>'DELIVERY DATE')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Delivery_Date'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Unit'); ?>
    <?php echo $form->textField($model, 'Unit',array('placeholder'=>'UNIT')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Unit'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Nomor_Polisi_KBM_Stock_Pool'); ?>
    <?php echo $form->hiddenField($model, 'Nomor_Polisi_KBM_Stock_Pool'); ?>
    <input type="text" name="vehicle" id="vehicle" value="<?php echo $vehicle; ?>" placeholder="NO POLICE"/>
    <span class="error-message"><?php echo $form->error($model, 'Nomor_Polisi_KBM_Stock_Pool'); ?></span>
</div>
<div class="input"> 
    <?php echo $form->labelEx($model, 'mo_booking'); ?>
    <?php echo $form->dropDownList($model, 'mo_booking', CHtml::listData(MoBooking::model()->findAll(), 'id', 'booking_day'), array('empty' => '-SELECT-')); ?>
    <span class="error-message"><?php echo $form->error($model, 'mo_booking'); ?></span>
</div>
<div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>
<div id="vehicleLookup"></div>
<div id="poLookup"></div>
<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#TBookingStock_Booking, #TBookingStock_PO_System, #TBookingStock_PO_Custumer, #TBookingStock_Contact_Person , #TBookingStock_Marketing_Officer , #TBookingStock_Delivery_Date").mandatoryPluginID();
        $("#TBookingStock_Booking, #TBookingStock_PO_System, #TBookingStock_PO_Custumer,#po,#poc ").mandatoryPlugin();
        $("#TBookingStock_Booking_Date").datepicker({dateFormat: "yy-mm-dd"});
        $("#TBookingStock_Delivery_Date").datepicker({dateFormat: "yy-mm-dd"});
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
                $("#TBookingStock_Nomor_Polisi_KBM_Stock_Pool").val(id);
                $("#vehicle").val($(".plateNumber" + id).html().trim());

                $(this).dialog("close");
            },
            "Cancel": function() {
                $(this).dialog("close");
            }
        }
    });

    $('#poLookup').dialog({
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
                $("#TBookingStock_PO_System").val(id);
                $("#po").val($(".po" + id).html().trim());
                $("#TBookingStock_PO_Custumer").val($(".poc" + id).html().trim());
                $("#TBookingStock_Custumer_Name").val($(".customer" + id).html().trim());
                $(this).dialog("close");
            },
            "Cancel": function() {
                $(this).dialog("close");
            }
        }
    });
    $("#vehicle").bind("click", function() {
        $("#vehicleLookup").load("<?php echo $this->createAbsoluteUrl("vehicle/lookupVehicle") ?>").dialog("open");
    });
    $("#po").bind("click", function() {
        $("#poLookup").load("<?php echo $this->createAbsoluteUrl("purchaseorder/lookupPurchaseOrder") ?>").dialog("open");
    });
</script>

