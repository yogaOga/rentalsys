<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'purchase-order-form',
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


<?php //echo $form->errorSummary($model);  ?>
<p>POSTING CONTRACT MASTER</p>
<div class="input">
    <?php echo $form->labelEx($model, 'marketing_id'); ?>
    <?php echo $form->textField($model, 'marketing_id'); ?>
    <span class="error-message"><?php echo $form->error($model, 'marketing_id'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'tender_no'); ?>
    <?php //echo CHtml::textField('prospect_id','AUTOMATIC', array('readonly' => true, 'size' => 45, 'maxlength' => 45)); ?>

    <?php echo $form->textField($model, 'tender_no', array('size' => 30, 'maxlength' => 30, 'value' => ($formType === "create") ? 'AUTOMATIC' : $model->tender_no)); ?>
    <span class="error-message"><?php echo $form->error($model, 'tender_no'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'customer_name'); ?>
    <?php echo $form->textField($model, 'customer_name', array('size' => 60, 'maxlength' => 255)); ?>
    <span class="error-message"><?php echo $form->error($model, 'customer_name'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'telephone'); ?>
    <?php echo $form->textField($model, 'telephone', array('size' => 16, 'maxlength' => 16)); ?>
    <span class="error-message"><?php echo $form->error($model, 'telephone'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'contact_person'); ?>
    <?php echo $form->textField($model, 'contact_person', array('size' => 60, 'maxlength' => 255)); ?>
    <span class="error-message"><?php echo $form->error($model, 'contact_person'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'marketing_name'); ?>
    <?php echo $form->textField($model, 'marketing_name', array('size' => 60, 'maxlength' => 255)); ?>
    <span class="error-message"><?php echo $form->error($model, 'marketing_name'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'prospect_id'); ?>
    <?php echo $form->hiddenField($model, 'prospect_id'); ?>
    <input type="text" name="prospect" id="prospect" value="<?php echo $prospect; ?>">
    <span class="error-message"><?php echo $form->error($model, 'prospect_id'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'prospect_address'); ?>
    <?php echo $form->textArea($model, 'prospect_address', array('rows' => 6, 'cols' => 10, 'readonly' => 'true')); ?>
    <span class="error-message"><?php echo $form->error($model, 'prospect_address'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'fax'); ?>
    <?php echo $form->textField($model, 'fax', array('size' => 16, 'maxlength' => 16)); ?>
    <span class="error-message"><?php echo $form->error($model, 'fax'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'handphone'); ?>
    <?php echo $form->textField($model, 'handphone', array('size' => 16, 'maxlength' => 16)); ?>
    <span class="error-message"><?php echo $form->error($model, 'handphone'); ?></span>
</div>
<br/><br/>
<p>PO CUSTOMER DATA</p>
<div class="input">
    <?php echo $form->labelEx($model, 'po_system_no'); ?>
    <?php echo $form->textField($model, 'po_system_no', array('size' => 16, 'maxlength' => 16, 'value' => ($formType === "create") ? 'AUTOMATIC' : $model->po_system_no)); ?>
    <span class="error-message"><?php echo $form->error($model, 'po_system_no'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'period_rent'); ?>
    <?php echo $form->textField($model, 'period_rent', array('size' => 20, 'maxlength' => 20)); ?>
    <span class="error-message"><?php echo $form->error($model, 'period_rent'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'po_customer_no'); ?>
    <?php echo $form->textField($model, 'po_customer_no', array('value' => ($formType === "create") ? 'AUTOMATIC' : $model->po_customer_no)); ?>
    <span class="error-message"><?php echo $form->error($model, 'po_customer_no'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'delivery_date'); ?>
    <?php echo $form->textField($model, 'delivery_date'); ?>
    <span class="error-message"><?php echo $form->error($model, 'delivery_date'); ?></span>
</div>
<br/><br/>
<p>DETAIL KENDARAAN</p>
<table class="border" > 
    <thead>
        <tr>
            <th>
                Merk/ Model     
            </th>   
            <th>   
                Number of Unit Requirement

            </th>   
            <th>   
                Accessories
            </th>   
            <th style="width: 10px">   
                Color
            </th>   
            <th>   
                Year
            </th>   
            <th>   
                Rate
            </th>   
            <th>   
                Contract Period
            </th>   
            <th>   
                Approve
            </th>   
            <td>   
            </td>   
        </tr>
    </thead>
    <tbody>
        <tr >
            <td>
                <?php echo $form->hiddenField($model, 'vehicle_id'); ?>
                <input type="text" name="merk" id="merk" value="<?php echo $merk; ?>">

            </td>
            <td>
                <div style="width: 15px"> <?php echo $form->textField($model, 'unit_requirement'); ?>

                </div>
            </td>
            <td >
                <?php echo $form->textField($model, 'accesories'); ?>

            </td>
            <td ><input type="text" name="color" id="color" readonly="true" value="<?php echo $color; ?>"/></td>
            <td ><input type="text" name="year" id="year" readonly="true" value="<?php echo $year; ?>"/></td>
            <td id="rate">
                <?php echo $form->textField($model, 'rate'); ?>

            </td>
            <td>
                <?php echo $form->textField($model, 'contract_period'); ?>
            </td>
            <td> <div style="width: 15px">
                    <?php echo $form->radioButton($model, 'approved', array('value' => 1, 'uncheckValue' => 0)); ?>
                </div>
            </td>
        </tr>

    </tbody>
</table>

<div id="lookup">
</div>
<div id="lookupVehicle">
</div>
<br/>
<br/>
<div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

</div>
<script type="text/javascript" src="js/alfamartPlugin.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#PurchaseOrder_telephone, #PurchaseOrder_marketing_name").mandatoryPluginID();
        $("#PurchaseOrder_marketing_id, #PurchaseOrder_tender_no,#prospect,#PurchaseOrder_po_system_no,#PurchaseOrder_po_customer_no").mandatoryPlugin();
        $("#color,#year,#PurchaseOrder_prospect_address").textReadOnly();

    });
    function dialog(title, selector, url) {
        $('#lookup').dialog({
            title: title,
            resizable: true,
            autoOpen: false,
            modal: true,
            hide: 'fade',
            width: 550,
            autoheight: true,
            buttons: {
                "Select": function() {
                    var id = $("input[type='radio']:checked").val();
                    $("#PurchaseOrder_prospect_id").val(id);
                    $("#prospect").val($(".prospectId" + id).html().trim());
                    $("#PurchaseOrder_prospect_address").val($(".prospectAddress" + id).html().trim());

                    $(this).dialog("close");
                },
                "Cancel": function() {
                    $(this).dialog("close");
                }
            }
        });
        $(selector).live("click", function() {
            $("#lookup").load(url).dialog("open");
        })
    }

    $('#lookupVehicle').dialog({
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
                $("#PurchaseOrder_vehicle_id").val(id);
                $("#color").val($("tr#" + id + " .color").html().trim());
                $("#year").val($("tr#" + id + " .year").html().trim());
                $("#merk").val($("tr#" + id + " .merk").html().trim());

                $(this).dialog("close");
            },
            "Cancel": function() {
                $(this).dialog("close");
            }
        }
    });

    dialog("Prospect List", "#prospect", "<?php echo $this->createAbsoluteUrl("PurchaseOrder/lookupProspect") ?>");
    $("#merk").live("click", function() {
        $("#lookupVehicle").load("<?php echo $this->createAbsoluteUrl("PurchaseOrder/lookupVehicle") ?>").dialog("open");
    });
    $("#PurchaseOrder_delivery_date").datepicker({dateFormat: "yy-mm-dd"});
</script>
<?php $this->endWidget(); ?>