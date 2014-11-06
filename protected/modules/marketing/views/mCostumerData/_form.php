<?php
/* @var $this MCostumerDataController */
/* @var $model MCostumerData */
/* @var $form CActiveForm */
?>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'mcostumer-data-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation' => false,
        ));
?>
<div class="bloc">

    <div class="content">
        <p class="note">Fields with <span class="required">*</span> are required.</p>

        <?php
        if ($form->errorSummary($model)) {
            echo '<div class="notif error">' . $form->errorSummary($model) . '</div>';
        }
        ?>
    </div>
</div>



<div class="bloc left">
    <div class="title">
        PIC
    </div>
    <div class="content dashboard">
        <div class="center">
            <div class="input">
                <?php echo $form->labelEx($model, 'no_cmd'); ?>
                <?php echo $form->textField($model, 'no_cmd', array('size' => 20, 'maxlength' => 20)); ?>
                <span class="error-message"><?php echo $form->error($model, 'no_cmd'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'name_pic'); ?>
                <?php echo $form->textField($model, 'name_pic', array('size' => 60, 'maxlength' => 100)); ?>
                <span class="error-message"><?php echo $form->error($model, 'name_pic'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'company_address_pic'); ?>
                <?php echo $form->textArea($model, 'company_address_pic', array('rows' => 6, 'cols' => 50)); ?>
                <span class="error-message"><?php echo $form->error($model, 'company_address_pic'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'home_address_pic'); ?>
                <?php echo $form->textArea($model, 'home_address_pic', array('rows' => 6, 'cols' => 50)); ?>
                <span class="error-message"><?php echo $form->error($model, 'home_address_pic'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'city_pic'); ?>
                  <?php echo $form->dropDownList($model,'city_pic',  CHtml::listData(MCity::model()->findAll(), 'id', 'name_city'),
                        array('empty'=>'-select-')); ?>
                <span class="error-message"><?php echo $form->error($model, 'city_pic'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'npwp_pic'); ?>
                <?php echo $form->textField($model, 'npwp_pic', array('size' => 20, 'maxlength' => 20)); ?>
                <span class="error-message"><?php echo $form->error($model, 'npwp_pic'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'payment_system_pic'); ?>
                <?php echo $form->dropDownList($model,'payment_system_pic',  Params::getPaymentSystem(),
                        array('empty'=>'-select-')); ?>
                <span class="error-message"><?php echo $form->error($model, 'payment_system_pic'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'payment_term_pic'); ?>
                <?php //echo $form->textField($model, 'payment_term_pic'); ?>
                <?php echo $form->dropDownList($model,'payment_term_pic',array('15'=>'15','30'=>'30','45'=>'45'),
                        array('empty'=>'-select-')); ?>
                <span class="error-message"><?php echo $form->error($model, 'payment_term_pic'); ?></span>
            </div>

            <div class="input">
                <?php echo $form->labelEx($model, 'average_gross_incorme_per_month'); ?>
                <?php echo $form->textField($model, 'average_gross_incorme_per_month'); ?>
                <span class="error-message"><?php echo $form->error($model, 'average_gross_incorme_per_month'); ?></span>
            </div>
            <div class="cb"></div>
        </div>
    </div>
</div>
<div class="bloc right">
    <div class="title">
        CMD
    </div>
    <div class="content">
        <div class="input">
            <?php echo $form->labelEx($model, 'title_cmd'); ?>
            <?php echo $form->dropDownList($model,'title_cmd',  CHtml::listData($model->title(),'id','value'),array('empty'=>'-select-')); ?>
            <span class="error-message"><?php echo $form->error($model, 'title_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'name_cmd'); ?>
            <?php echo $form->textField($model, 'name_cmd', array('size' => 60, 'maxlength' => 100)); ?>
            <span class="error-message"><?php echo $form->error($model, 'name_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'address_cmd'); ?>
            <?php echo $form->textArea($model, 'address_cmd', array('rows' => 6, 'cols' => 50)); ?>
            <span class="error-message"><?php echo $form->error($model, 'address_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'city_cmd'); ?>
             <?php echo $form->dropDownList($model,'city_cmd',  CHtml::listData(MCity::model()->findAll(), 'id', 'name_city'),
                        array('empty'=>'-select-')); ?>
            <span class="error-message"><?php echo $form->error($model, 'city_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'fax_cmd'); ?>
            <?php echo $form->textField($model, 'fax_cmd', array('size' => 20, 'maxlength' => 20)); ?>
            <span class="error-message"><?php echo $form->error($model, 'fax_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'zip_code_cmd'); ?>
            <?php echo $form->textField($model, 'zip_code_cmd'); ?>
            <span class="error-message"><?php echo $form->error($model, 'zip_code_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'email_cmd'); ?>
            <?php echo $form->textField($model, 'email_cmd', array('size' => 60, 'maxlength' => 100)); ?>
            <span class="error-message"><?php echo $form->error($model, 'email_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'office_phone_cmd'); ?>
            <?php echo $form->textField($model, 'office_phone_cmd', array('size' => 13, 'maxlength' => 13,'onblur'=>'phonenumber(this)')); ?>
            <span class="error-message"><?php echo $form->error($model, 'office_phone_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'home_phone_cmd'); ?>
            <?php echo $form->textField($model, 'home_phone_cmd', array('size' => 13, 'maxlength' => 13,'onblur'=>'phonenumber(this)')); ?>
            <span class="error-message"><?php echo $form->error($model, 'home_phone_cmd'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'type_of_business'); ?>
            <?php echo $form->dropDownList($model, 'type_of_business',CHtml::listData(LBusinessType::model()->findAll(), 'id', 'business_type'),array('empty'=>'-select-')); ?>
            <span class="error-message"><?php echo $form->error($model, 'type_of_business'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'ownership'); ?>
            <?php echo $form->dropDownList($model, 'ownership',CHtml::listData(LOwnership::model()->findAll(), 'id', 'name_owner'),array('empty'=>'-select-')); ?>
            <span class="error-message"><?php echo $form->error($model, 'ownership'); ?></span>
        </div>

    </div>
    <div class="cb"></div>
</div>
<div class="cb"></div>
<div class="bloc left">
    <div class="title">
        Reference
    </div>
    <div class="content">
        <div class="input">
            <?php echo $form->labelEx($model, 'name_reference'); ?>
            <?php echo $form->textField($model, 'name_reference', array('size' => 60, 'maxlength' => 100)); ?>
            <span class="error-message"><?php echo $form->error($model, 'name_reference'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'address_reference'); ?>
            <?php echo $form->textArea($model, 'address_reference', array('rows' => 6, 'cols' => 50)); ?>
            <span class="error-message"><?php echo $form->error($model, 'address_reference'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'phone_reference'); ?>
            <?php echo $form->textField($model, 'phone_reference', array('size' => 12, 'maxlength' => 12)); ?>
            <span class="error-message"><?php echo $form->error($model, 'phone_reference'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'vehicles_reference'); ?>
           <?php echo $form->dropDownList($model,'vehicles_reference', Params::getVehicleRef(),
                        array('empty'=>'-select-')); ?>
            <span class="error-message"><?php echo $form->error($model, 'vehicles_reference'); ?></span>
        </div>

    </div>
    <div class="cb"></div>
</div>
<div class="bloc right">
    <div class="title">
        Bank
    </div>
    <div class="content">
        <div class="input">
            <?php echo $form->labelEx($model, 'name_bank'); ?>
            <?php echo $form->textField($model, 'name_bank', array('size' => 60, 'maxlength' => 100)); ?>
            <span class="error-message"><?php echo $form->error($model, 'name_bank'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'address_bank'); ?>
            <?php echo $form->textArea($model, 'address_bank', array('rows' => 6, 'cols' => 50)); ?>
            <span class="error-message"><?php echo $form->error($model, 'address_bank'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'no_account_bank'); ?>
            <?php echo $form->textField($model, 'no_account_bank', array('size' => 30, 'maxlength' => 30)); ?>
            <span class="error-message"><?php echo $form->error($model, 'no_account_bank'); ?></span>
        </div>

    </div>
    <div class="cb"></div>
</div>
<div class="cb"></div>
<div class="bloc left">

    <div class="title">
        Management
    </div>
    <div class="content">
        <div class="input">
            <?php echo $form->labelEx($model, 'name_management'); ?>
            <?php echo $form->textField($model, 'name_management', array('size' => 60, 'maxlength' => 100)); ?>
            <span class="error-message"><?php echo $form->error($model, 'name_management'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'position_management'); ?>
            <?php echo $form->dropDownList($model, 'position_management', Params::getOccupation(), array('empty' => '-select-')); ?>
            <span class="error-message"><?php echo $form->error($model, 'position_management'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'phone_management'); ?>
            <?php echo $form->textField($model, 'phone_management', array('size' => 13, 'maxlength' => 13,'onblur'=>'phonenumber(this)')); ?>
            <span class="error-message"><?php echo $form->error($model, 'phone_management'); ?></span>
        </div>

        <div class="input">
            <?php echo $form->labelEx($model, 'handphone_management'); ?>
            <?php echo $form->textField($model, 'handphone_management', array('size' => 13, 'maxlength' => 13)); ?>
            <span class="error-message"><?php echo $form->error($model, 'handphone_management'); ?></span>
        </div>
        <div class="submit">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
</div>
    </div>
    <div class="cb"></div>
</div>
<div class="cb"></div>
<?php // echo $this->renderPartial('_gridKendaraansewa',array('model'=>$model)) ?>




<?php $this->endWidget(); ?>

<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
// Deklarasikan field yang mandatori
     $(document).ready(function() {
     $("#MCostumerData_no_cmd, #MCostumerData_name_pic,#MCostumerData_npwp_pic,#MCostumerData_payment_system_pic,#MCostumerData_payment_term_pic,#MCostumerData_name_cmd").mandatoryPluginID();
     $("#MCostumerData_name_reference, #MCostumerData_phone_reference,#MCostumerData_vehicles_reference,#MCostumerData_no_account_bank,#MCostumerData_name_management").mandatoryPluginID();
     });
 
</script>

