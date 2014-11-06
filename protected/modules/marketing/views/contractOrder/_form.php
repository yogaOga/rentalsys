<?php
/* @var $this ContractOrderController */
/* @var $model ContractOrder */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'contract-order-form',
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
    echo '<div class="notif error">' . $form->errorSummary($modelDetails) . '</div>';
}
?>



<div class="input">
    <?php echo $form->labelEx($model, 'MarketingID'); ?>
    <?php echo $form->textField($model, 'MarketingID'); ?>
    <span class="error-message"><?php echo $form->error($model, 'MarketingID'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'No_Penawaran'); ?>
    <?php echo CHtml::textField('No_Penawaran', 'AUTOMATIC', array('readonly' => true, 'size' => 45, 'maxlength' => 45)); ?>
    <span class="error-message"><?php echo $form->error($model, 'No_Penawaran'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Id_Customer'); ?>
    <?php echo $form->textField($model, 'Id_Customer', array('placeholder' => 'COSTUMER ID')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Id_Customer'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Nama_Customer'); ?>
    <?php echo $form->textField($model, 'Nama_Customer', array('placeholder' => 'NAME COSTUMER')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Nama_Customer'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'No_Telp'); ?>
    <?php echo $form->textField($model, 'No_Telp', array('placeholder' => 'XXX-XXXXX')); ?>
    <span class="error-message"><?php echo $form->error($model, 'No_Telp'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Contact_Person'); ?>
    <?php echo $form->textField($model, 'Contact_Person', array('placeholder' => 'XXX-XXXXX')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Contact_Person'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Marketing_Name'); ?>
    <?php echo $form->textField($model, 'Marketing_Name', array('placeholder' => 'MARKETING NAME')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Marketing_Name'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'ID_Prospek'); ?>
    <?php echo $form->textField($model, 'ID_Prospek', array('placeholder' => 'ID PROSPECT', 'onclick' => '$("#prospect").dialog("open"); return false;')); ?>
    <span class="error-message"><?php echo $form->error($model, 'ID_Prospek'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Alamat_Prospek'); ?>
    <?php echo $form->textArea($model, 'Alamat_Prospek', array('placeholder' => 'ADDRESS PROSPECT')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Alamat_Prospek'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'No_Fax'); ?>
    <?php echo $form->textField($model, 'No_Fax', array('placeholder' => 'FAX')); ?>
    <span class="error-message"><?php echo $form->error($model, 'No_Fax'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'No_Hp'); ?>
    <?php echo $form->textField($model, 'No_Hp', array('placeholder' => 'XXXX-XXXX-XXXX')); ?>
    <span class="error-message"><?php echo $form->error($model, 'No_Hp'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'No_PO_System'); ?>
    <?php echo $form->textField($model, 'No_PO_System', array('placeholder' => 'NO PURCHASE ORDER', 'onclick' => '$("#po").dialog("open"); return false;')); ?>
    <span class="error-message"><?php echo $form->error($model, 'No_PO_System'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Rent_Period'); ?>
    <?php echo $form->textField($model, 'Rent_Period', array('placeholder' => 'RENT PERIOD')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Rent_Period'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Delivery_Date'); ?>
    <?php echo $form->textField($model, 'Delivery_Date', array('placeholder' => 'DELIVERY DATE')); ?>
    <span class="error-message"><?php echo $form->error($model, 'Delivery_Date'); ?></span>
</div>

<div class="input">
    <?php echo $form->labelEx($model, 'Type_Contract_Order'); ?>
    <?php
    echo $form->dropDownList($model, 'Type_Contract_Order', array(
        'Sewa pakai unit stock pool' => 'Sewa pakai unit stock pool',
        'Sewa tapi pakai pengganti + beli mobil baru' => ' Sewa tapi pakai pengganti + beli mobil baru',
        'Beli mobil baru dan penambahan kendaraan-repeat order' => 'Beli mobil baru dan penambahan kendaraan-repeat order'
            ), array('empty' => '-SELECT-'))
    ?>

    <span class="error-message"><?php echo $form->error($model, 'Type_Contract_Order'); ?></span>
</div>

<br>
<table id="contract-order">
    <thead>
        <tr>
            <th>No Polisi</th>
            <th>Merk/Model</th>
            <th>Color</th>
            <th>Year</th>
            <th>Number of Units</th>
            <th>Rate</th>
            <th>Contract Period</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (isset($modDetails)) {
            foreach ($modDetails as $i => $detail) {
                $mobil = MCars::model()->findByPk($detail->id);
                $merk = MVehicle::model()->findByPk($mobil->vehicle_id);
                $modelMobil = MCarsModels::model()->findByPk($mobil->model_id);
                ?>
                ?>
                <tr>
                    <td><?php
                        echo CHtml::activeHiddenField($detail, "[$i]car_id", array('class' => 'id'));
                        echo $mobil->id;
                        ?></td>
                    <td><?php echo $merk->name_vehicle . " / " . $modelMobil->model_name; ?></td>
                    <td><?php echo $mobil->color_id; ?></td>
                    <td><?php echo $mobil->year; ?></td>
                    <td><?php echo CHtml::activeTextField($detail, "[$i]qty") ?></td>
                    <td><?php echo CHtml::activeTextField($detail, "[$i]rate") ?></td>
                    <td><?php echo CHtml::activeTextField($detail, "[$i]contract_period") ?></td>
                    <td><?php echo CHtml::link('batal', '#', array('onclick' => 'batal(this)')) ?></td>

                </tr>
    <?php }
}
?>
    </tbody>
</table>
    <?php echo CHtml::activeHiddenField($model, 'car_id'); ?>
<?php echo CHtml::button('Add Data', array('class' => 'black', 'onclick' => '$("#mydialog").dialog("open"); return false;')) ?>
<div class="submit">
<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>

<?php $this->endWidget(); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.maskedinput.min.js', CClientScript::POS_END); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#ContractOrder_MarketingID, #ContractOrder_No_Penawaran, #ContractOrder_No_Telp , #ContractOrder_Contact_Person , #ContractOrder_Marketing_Name , #ContractOrder_ID_Prospek").mandatoryPluginID();
        $("#ContractOrder_MarketingID, #ContractOrder_No_Penawaran, #ContractOrder_ID_Prospek,#No_Penawaran,#ContractOrder_No_PO_System").mandatoryPlugin();
        $("#ContractOrder_Delivery_Date").datepicker({dateFormat: "yy-mm-dd"});
        $("#ContractOrder_No_Telp").mask("(999) 999-9999");
        $("#ContractOrder_No_Hp").mask("9999-9999-9999");
        $("#ContractOrder_Contact_Person").mask("(999) 999-9999");

    });
</script>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'mydialog',
    'options' => array(
        'title' => 'Search Cars',
        'autoOpen' => false,
        'modal' => true,
        'width' => 600,
        'height' => 500,
        'resizable' => false,
    ),
));
$modCar = new MCars;
$modCar->unsetAttributes();
if (isset($_GET['MCars'])) {
    $modCar->attributes = $_GET['MCars'];
}
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mcars-data-grid',
    'dataProvider' => $modCar->search(),
    'filter' => $modCar,
    'columns' => array(
        array(
            'header' => 'Pilih',
            'type' => 'raw',
            'value' => 'CHtml::Link("Pilih","#",array("class"=>"btn-small", 
                                    "id" => "selectKar",
                                    "onClick" => "
                                         $(\'#' . Chtml::activeId($model, 'car_id') . '\').val(\'$data->id\');
                                       //  $(\"#ContractOrder_car_id\").val(\"$data->id\");
                                        submit();
                                         $(\'#mydialog\').dialog(\'close\');
                                        return false;"))',
        ),
        'vehicle_id',
        'model_id',
        'type_id',
        'color_id',
        'no_police',
    ),
));
$this->endWidget('zii.widgets.jui.CJuiDialog');
/** End Widget * */
?>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'prospect',
    'options' => array(
        'title' => 'Search Prospect',
        'autoOpen' => false,
        'modal' => true,
        'width' => 600,
        'height' => 500,
        'resizable' => false,
    ),
));
$prospect = new TProspect;
$prospect->unsetAttributes();
if (isset($_GET['TProspect'])) {
    $prospect->attributes = $_GET['TProspect'];
}
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mprospect-data-grid',
    'dataProvider' => $prospect->search(),
    'filter' => $prospect,
    'columns' => array(
        array(
            'header' => 'Pilih',
            'type' => 'raw',
            'value' => 'CHtml::Link("Pilih","#",array("class"=>"btn-small", 
                                    "id" => "selectKar",
                                    "onClick" => "
                                         $(\'#' . Chtml::activeId($model, 'ID_Prospek') . '\').val(\'$data->prospect_id\');
                                         $(\"#ContractOrder_Alamat_Prospek\").val(\"$data->company_address\");
                                         $(\"#ContractOrder_Alamat_Prospek\").val(\"$data->company_address\");
                                         $(\'#prospect\').dialog(\'close\');
                                        return false;"))',
        ),
        'prospect_id',
        'marketing_id',
        'company_title',
        'company_name',
        'company_address',
    ),
));
$this->endWidget('zii.widgets.jui.CJuiDialog');
/** End Widget * */
?>
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'po',
    'options' => array(
        'title' => 'Search Purchase Order',
        'autoOpen' => false,
        'modal' => true,
        'width' => 600,
        'height' => 500,
        'resizable' => false,
    ),
));
$po = new PurchaseOrder;
$po->unsetAttributes();
if (isset($_GET['PurchaseOrder'])) {
    $po->attributes = $_GET['PurchaseOrder'];
}
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'mpurchase-data-grid',
    'dataProvider' => $po->search(),
    'filter' => $po,
    'columns' => array(
        array(
            'header' => 'Pilih',
            'type' => 'raw',
            'value' => 'CHtml::Link("Pilih","#",array("class"=>"btn-small", 
                                    "id" => "selectKar",
                                    "onClick" => "
                                         $(\'#' . Chtml::activeId($model, 'No_PO_System') . '\').val(\'$data->po_system_no\');
                                         $(\'#po\').dialog(\'close\');
                                        return false;"))',
        ),
        'marketing_id',
        'tender_no',
        'customer_name',
        'telephone',
        'contact_person',
        'marketing_name',
    ),
));
$this->endWidget('zii.widgets.jui.CJuiDialog');
/** End Widget * */
?>

<?php
$url = Yii::app()->createUrl('marketing/ContractOrder/tambah');
$notif = Yii::t('mds', 'Yakin Anda Akan Membatalkan?');
$js = <<<JS
         function submit(){
     var id = $('#ContractOrder_car_id').val();
         
        if (!jQuery.isNumeric(id)){
            alert('Mobil harus dipilih');
            return false;
        }
        else{
                $.post("${url}", {id:id},function(data){
                 $('#contract-order tbody').append(data);
            }, 'json');
            } 
    }
       function batal(obj){
        if(!confirm("${notif}")) {
            return false;
        }else{
            $(obj).parents('tr').remove();
            
        }
    }
JS;
Yii::app()->clientScript->registerScript('contractOrder', $js, CClientScript::POS_HEAD);
?>