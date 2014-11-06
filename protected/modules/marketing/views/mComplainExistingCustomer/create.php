<?php
/* @var $this MComplainExistingCustomerController */
/* @var $model MComplainExistingCustomer */
/* @var $complains MComplainExistingCustomer[] */



$this->breadcrumbs = array(
    'Mcomplain Existing Customers' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List MComplainExistingCustomer', 'url' => array('index')),
    array('label' => 'Manage MComplainExistingCustomer', 'url' => array('admin')),
);
?>


<div class="bloc">
    <div class="title">Create MComplainExistingCustomer</div> 
    <div class="content">
        <div style="text-align: center; font-size: 18px;font-weight: bolder;line-height: 2">
            PT. TRIMITRA TRANS PERSADA<br/>
            <u> LAPORAN KELUHAN/ COMPLAIN OF EXISTING CUSTOMER</u>
        </div>	
        <br/>

        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'mcomplain-existing-customer-form',
            'action' => Yii::app()->createUrl("marketing/mComplainExistingCustomer/create&type=submit"),
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => false,
        ));
        ?>
        <?php //$this->renderPartial('_form', array('model'=>$model)); ?>
        <div class="input">
            <?php echo $form->labelEx($model, 'periode'); ?>
            <?php //echo $form->textField($model, 'periode', array('size' => 50, 'maxlength' => 50)); ?>
            <?php echo $form->dropDownList($model, 'periode', array('January' => 'January', 'February' => 'February', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'August' => 'August', 'September' => 'September', 'October' => 'October', 'November' => 'November', 'December' => 'December'), array('empty' => '-select-')); ?>

            <span class="error-message"><?php echo $form->error($model, 'periode'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'branch'); ?>
            <?php // echo $form->textField($model, 'branch'); ?>
            <?php echo $form->dropDownList($model, 'branch', CHtml::listData(LBranch::model()->findAll(), 'id', 'branch_name'), array('empty' => '-select-')); ?>

            <span class="error-message"><?php echo $form->error($model, 'branch'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'marketing_officer'); ?>
            <?php echo $form->textField($model, 'marketing_officer'); ?>
            <span class="error-message"><?php echo $form->error($model, 'marketing_officer'); ?></span>
        </div>


        <table class="border" > 
            <thead>
                <tr>
                    <th style="vertical-align: middle;text-align: center" rowspan="2">Customer</th>
                    <th  style="vertical-align: middle;text-align: center" colspan="2">
                        Keluhan
                    </th>
                    <th style="vertical-align: middle;text-align: center" rowspan="2">
                        Nama Pelapor
                    </th>
                    <th style="vertical-align: middle;text-align: center" colspan="2">
                        Tindakan
                    </th>
                    <th style="vertical-align: middle;text-align: center" rowspan="2">
                        PIC
                    </th>
                    <th style="vertical-align: middle;text-align: center" rowspan="2">
                        Remarks
                    </th>
                    <th style="vertical-align: middle;text-align: center" rowspan="2">
                        Action
                    </th>
                </tr>
                <tr>
                    <th>
                        Tanggal
                    </th>
                    <th>
                        Isi
                    </th>
                    <th>
                        Tanggal
                    </th>
                    <th>
                        Follow Up
                    </th>
                </tr>
            </thead>
            <tbody id="data">
                <?php $inc = 0; ?>
                <?php foreach ($complains as $complain): ?>
                    <tr>

                        <td>
                            <?php echo $complain->customer; ?>
                        </td>
                        <td>
                            <?php echo $complain->complain_date; ?>
                        </td>
                        <td>
                            <?php echo $complain->complain; ?>
                        </td>
                        <td>
                            <?php echo $complain->complainer_name; ?>
                        </td>
                        <td>
                            <?php echo $complain->follow_up_date; ?>
                        </td>
                        <td>
                            <?php echo $complain->follow_up_description; ?>
                        </td>
                        <td >
                            <?php echo $complain->pic; ?>
                        </td>
                        <td>
                            <?php echo $complain->remarks; ?>
                        </td>
                        <td>
                            <a href="<?php echo $this->createAbsoluteUrl("mComplainExistingCustomer/create", array("type" => "delete", "idx" => $inc)); ?>"><img alt="Delete" src="/rentalsys/assets/b1a3ef2c/gridview/delete.png"></a>
                        </td>
                    </tr>
                    <?php $inc++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br/>
        <div>
            <input type="button" value="Add New Data" name="AddNewData" title="Add New Data"/>
        </div>
        <div>
            <input type="submit" value="Create" name="Create" title="Create All"/>     
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
</div>

<style>
    td{
        vertical-align: middle;
        text-align: center;
    }
    th{
        vertical-align: middle;
        text-align: center;
    }
</style>

<div id="lookup" class="content" style="display: none">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'add',
        'action' => Yii::app()->createUrl("marketing/mComplainExistingCustomer/create&type=add"),
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>
    <div class="input">
        <?php echo $form->labelEx($model, 'customer'); ?>
        <?php echo $form->textField($model, 'customer', array('size' => 60, 'maxlength' => 100)); ?>
        <span class="error-message"><?php echo $form->error($model, 'customer'); ?></span>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model, 'complain_date'); ?>
        <?php echo $form->textField($model, 'complain_date'); ?>
        <span class="error-message"><?php echo $form->error($model, 'complain_date'); ?></span>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model, 'complain'); ?>
        <?php echo $form->textArea($model, 'complain', array('rows' => 6, 'cols' => 10)); ?>

        <span class="error-message"><?php echo $form->error($model, 'complain'); ?></span>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model, 'complainer_name'); ?>
        <?php echo $form->textField($model, 'complainer_name', array('size' => 60, 'maxlength' => 100)); ?>
        <span class="error-message"><?php echo $form->error($model, 'complainer_name'); ?></span>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model, 'follow_up_date'); ?>
        <?php echo $form->textField($model, 'follow_up_date'); ?>
        <span class="error-message"><?php echo $form->error($model, 'follow_up_date'); ?></span>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model, 'follow_up_description'); ?>
        <?php echo $form->textArea($model, 'follow_up_description', array('rows' => 6, 'cols' => 10)); ?>
        <span class="error-message"><?php echo $form->error($model, 'follow_up_description'); ?></span>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model, 'pic'); ?>
        <?php echo $form->textField($model, 'pic', array('size' => 60, 'maxlength' => 100)); ?>
        <span class="error-message"><?php echo $form->error($model, 'pic'); ?></span>
    </div>

    <div class="input">
        <?php echo $form->labelEx($model, 'remarks'); ?>
        <?php echo $form->textField($model, 'remarks', array('size' => 60, 'maxlength' => 255)); ?>
        <span class="error-message"><?php echo $form->error($model, 'remarks'); ?></span>
    </div>
    <?php $this->endWidget(); ?>
</div>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script>
    $('#lookup').dialog({
        title: "Add New Customer Complain",
        resizable: true,
        autoOpen: false,
        modal: true,
        hide: 'fade',
        width: 550,
        autoheight: true,
        buttons: {
            "Add": function() {

                var isValid = $("#MComplainExistingCustomer_customer,#MComplainExistingCustomer_complain_date, #MComplainExistingCustomer_complainer_name, #MComplainExistingCustomer_follow_up_date").isNotEmpty();
                if (isValid) {

                    $('form#add').submit();
                    $('#lookup input').each(function() {
                        $(this).val("");
                    })
                    $('#lookup textarea').each(function() {
                        $(this).val("");
                    })
                }


            },
            "Cancel": function() {
                $(this).dialog("close");
            }
        }
    });
    $(":button[name=AddNewData]").live("click", function() {
        $('#lookup').dialog("open");
        $('#lookup input').each(function() {
            $(this).val("");
        })
        $('#lookup textarea').each(function() {
            $(this).val("");
        })
        return false;
    })
    $(':submit').live("click", function() {
        $("#mcomplain-existing-customer-form").submit();
    })

</script>

<script type="text/javascript">
// Deklarasikan field yang mandatori

    $(document).ready(function() {
        $("#MComplainExistingCustomer_customer,#MComplainExistingCustomer_complain_date, #MComplainExistingCustomer_complainer_name, #MComplainExistingCustomer_follow_up_date").mandatoryPluginID();
        $("#MComplainExistingCustomer_customer,#MComplainExistingCustomer_complain_date, #MComplainExistingCustomer_complainer_name, #MComplainExistingCustomer_follow_up_date").mandatoryPlugin();
        $("#MComplainExistingCustomer_complain_date").datepicker({dateFormat: "yy-mm-dd"});
        $("#MComplainExistingCustomer_follow_up_date").datepicker({dateFormat: "yy-mm-dd"});
    });



</script>

<style>
    #lookup .input{
        clear: both;
    }
    #lookup input {
        background: none repeat scroll 0 0 #FFFFFF;
        border: 1px solid #DDDCDC;
        box-shadow: 2px 1px 5px #CBC9C9 inset;
        height: 28px;
        line-height: 28px;
        padding: 0 5px;
        width: 260px;

    }
    #lookup textArea {
        background: none repeat scroll 0 0 #FFFFFF;
        border: 1px solid #DDDCDC;
        box-shadow: 2px 1px 5px #CBC9C9 inset;
        height: 55px;
        line-height: 28px;
        padding: 0 5px;
        width: 260px;

    }
    #lookup .error-message{
        color: red;
    }
    #lookup label{
        color: #2C2C2C;
        float: left;
        font-size: 12px;
        font-weight: bold;
        padding-bottom: 10px;
        padding-top: 10px;
        text-align: left;
        width: 200px;
    }
</style>