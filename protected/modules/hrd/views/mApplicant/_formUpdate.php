<?php
/* @var $this MApplicantController */
/* @var $model MApplicant */
/* @var $form CActiveForm */
?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php
if ($form->errorSummary($model)) {
    echo '<div class="notif error ui-helper-hidden"><a href="#" class="close">x</a>' . $form->errorSummary($model) . '</div>';
}
?>

<div class="left">
    <div class="input">
        <?php echo $form->labelEx($model, 'first_name'); ?>
        <?php echo $form->textField($model, 'first_name', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'First Name')); ?>
        <span class="error-message"><?php echo $form->error($model, 'first_name'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'last_name'); ?>
        <?php echo $form->textField($model, 'last_name', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Last Name')); ?>
        <span class="error-message"><?php echo $form->error($model, 'last_name'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'nickname'); ?>
        <?php echo $form->textField($model, 'nickname', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Nickname')); ?>
        <span class="error-message"><?php echo $form->error($model, 'nickname'); ?></span>
    </div>
    <div class="input">
        <?php echo CHtml::label('Birth of Date', CHtml::activeId($model, 'birth_place')); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model' => $model,
            'attribute' => 'birth_place',
            'source' => $this->createUrl('MApplicant/getBirthPlace'),
            // additional javascript options for the autocomplete plugin
            'options' => array(
                'showAnim' => 'fold',
                'minLength' => 2,
            ),
            'htmlOptions' => array(
                'placeholder' => 'City Name',
            )
        ));
        ?>
        <span class="error-message"><?php echo $form->error($model, 'birth_place'); ?></span>
    </div>
    <div class="input">
        <?php echo CHtml::label('', CHtml::activeId($model, 'birth_date')); ?>
        <?php echo $form->textField($model, 'birth_date', array('size' => 25, 'maxlength' => 25, 'class' => 'datepicker', 'placeholder' => '01-01-20014')); ?>
        <span class="error-message"><?php echo $form->error($model, 'birth_date'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'gender'); ?>
        <?php echo $form->dropDownlist($model, 'gender', Params::getGender(), array('empty' => '- Select')) ?>
        <span class="error-message"><?php echo $form->error($model, 'gender'); ?></span>
    </div>    
    <div class="input">
        <?php echo $form->labelEx($model, 'blood_type'); ?>
        <?php echo $form->dropDownlist($model, 'blood_type', Params::getBloodType(), array('empty' => '- Select')) ?>
        <span class="error-message"><?php echo $form->error($model, 'blood_type'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'nationality'); ?>
        <?php echo $form->dropDownlist($model, 'nationality', Params::getNationality(), array('empty' => '- Select')) ?>
        <span class="error-message"><?php echo $form->error($model, 'nationality'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'street_address'); ?>
        <?php echo $form->textArea($model, 'street_address', array('placeholder' => 'Street Name', 'style' => 'width:260px;')) ?>
        <span class="error-message"><?php echo $form->error($model, 'street_address'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'state_id'); ?>
        <?php
        echo CHtml::activeDropDownList($model, 'state_id', CHtml::listData(MState::model()->findAll(), 'id', 'state_name'), array(
            'ajax' => array(
                'type' => 'POST', //request type
                'url' => CController::createUrl('MApplicant/getCity'), //url to call.
                //Style: CController::createUrl('currentController/methodToCall')
                'update' => "#" . CHtml::activeId($model, 'city_id'), //selector to update
            //'data'=>'js:javascript statement' 
            //leave out the data key to pass all form values through
            ),
            'empty' => '- Select',
        ));
        ?>
        <span class="error-message"><?php echo $form->error($model, 'state_id'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'city_id'); ?>
        <?php echo $form->dropDownlist($model, 'city_id', CHtml::listData(MCity::model()->findAll('state_id = ' . $model->state_id), 'id', 'city_name'), array('empty' => '- Select')) ?>
        <span class="error-message"><?php echo $form->error($model, 'city_id'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'postal_code'); ?>
        <?php echo $form->textField($model, 'postal_code', array('size' => 25, 'maxlength' => 25, 'placeholder' => '14000')); ?>
        <span class="error-message"><?php echo $form->error($model, 'postal_code'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'home_status'); ?>
        <?php echo $form->dropDownlist($model, 'home_status', Params::getHomeStatus(), array('empty' => '- Select')) ?>
        <span class="error-message"><?php echo $form->error($model, 'home_status'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'phone'); ?>
        <?php echo $form->textField($model, 'phone', array('size' => 25, 'maxlength' => 25, 'placeholder' => '(021)-4514512')); ?>
        <span class="error-message"><?php echo $form->error($model, 'phone'); ?></span>
    </div>
    <div class="input">
        <?php echo $form->labelEx($model, 'mobile'); ?>
        <?php echo $form->textField($model, 'mobile', array('size' => 25, 'maxlength' => 25, 'placeholder' => '081-234567890')); ?>
        <span class="error-message"><?php echo $form->error($model, 'mobile'); ?></span>
    </div>
</div>

<div class="right">
    <div class="input">
        <?php echo $form->labelEx($model, 'photo_path'); ?>
        <ul class="gallery">
            <li style="width: 140px; height: 160px;">
                <a style="width: 100%; height: 100%;" href="#"><img style="width: 100%; height: 100%;" src="<?php if (isset($model->photo_path)) {
            echo Yii::app()->getBaseUrl() . '/' . $model->photo_path;
        } else {
            echo Yii::app()->getBaseUrl() . '/img/blank.png';
        } ?>" alt=""/></a>
                <span class="info"></span>
                <a href="#" title="delete Image" class="del">Delete</a>
                <a href="#" class="over"><span><?php echo $form->fileField($model, 'photo_path'); ?></span></a>
                <a href="<?php if (isset($model->photo_path)) {
            echo Yii::app()->getBaseUrl() . '/' . $model->photo_path;
        } else {
            echo Yii::app()->getBaseUrl() . '/img/blank.png';
        } ?>" class="large zoombox" title="full-size">Enlarge</a>
            </li>
        </ul>
        <span class="error-message"><?php echo $form->error($model, 'photo_path'); ?></span>
    </div>
    <div class="input">
<?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 25, 'maxlength' => 100, 'placeholder' => 'name@example.com')); ?>
        <span class="error-message"><?php echo $form->error($model, 'email'); ?></span>
    </div>
    <div class="input">
<?php echo $form->labelEx($model, 'religion'); ?>
        <?php echo $form->dropDownList($model, 'religion', Params::getReligion(), array('empty' => '- Select')); ?>
        <span class="error-message"><?php echo $form->error($model, 'religion'); ?></span>
    </div>
    <div class="input">
<?php echo $form->labelEx($model, 'driving_licence'); ?>
        <?php echo $form->dropDownList($model, 'driving_licence', Params::getDrivingLicence(), array('empty' => '- Select')); ?>
        <span class="error-message"><?php echo $form->error($model, 'driving_licence'); ?></span>
    </div>
    <div class="input">
<?php echo $form->labelEx($model, 'marital_status'); ?>
        <?php echo $form->dropDownList($model, 'marital_status', Params::getMaritalStatus(), array('empty' => '- Select')); ?>
        <span class="error-message"><?php echo $form->error($model, 'marital_status'); ?></span>
    </div>
    <div class="input">
<?php echo $form->labelEx($model, 'children'); ?>
<?php echo $form->textField($model, 'children', array('size' => 25, 'maxlength' => 25)); ?>
        <span class="error-message"><?php echo $form->error($model, 'children'); ?></span>
    </div>
    <div class="input">
<?php echo $form->labelEx($model, 'hobby'); ?>
<?php echo $form->textArea($model, 'hobby', array('placeholder' => 'Write hobby here, separate by coma.', 'style' => 'width:260px;')) ?>
        <span class="error-message"><?php echo $form->error($model, 'hobby'); ?></span>
    </div>
</div>

<script src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">

    function confirmCancel() {
        var cnf = confirm("Are you sure for cancel?");
        if (cnf === true) {
            window.location.assign("<?php echo $this->createUrl('Admin'); ?>");
        }
    }
// Deklarasikan field yang mandatori
    $(document).ready(function() {
        $("#<?= CHtml::activeId($model, 'first_name') ?>, \n\
        #<?= CHtml::activeId($model, 'birth_place') ?>,\n\
        #<?= CHtml::activeId($model, 'birth_date') ?>,\n\
        #uniform-<?= CHtml::activeId($model, 'gender') ?>,\n\
        #uniform-<?= CHtml::activeId($model, 'blood_type') ?>,\n\
        #uniform-<?= CHtml::activeId($model, 'nationality') ?>,\n\
        #<?= CHtml::activeId($model, 'street_address') ?>,\n\
        #uniform-<?= CHtml::activeId($model, 'state_id') ?>,\n\
        #<?= CHtml::activeId($model, 'postal_code') ?>,\n\
        #uniform-<?= CHtml::activeId($model, 'home_status') ?>,\n\
        #uniform-<?= CHtml::activeId($model, 'religion') ?>,\n\
        #uniform-<?= CHtml::activeId($model, 'driving_licence') ?>,\n\
        #name_a, #relation_a, #place_birth_a, #birth_date_a, #gender_a, #job_a,\n\
        #name_u, #relation_u, #birth_place_u, #birth_date_u, #gender_u, #job_u,\n\
        #join_date_a, #quit_date_a, #company_name_a, #position_a, #total_junior_a, #position_of_senior_a, #reason_a,\n\
        #join_date_u, #quit_date_u, #company_name_u, #position_u, #total_junior_u, #position_of_senior_u, #reason_u,\n\
        #education_name_a, #graduate_year_a, #majoring_a, #school_name_a, #city_country_a, #certificate_number_a, \n\
        #education_name_u, #graduate_year_u, #majoring_u, #school_name_u, #city_country_u, #certificate_number_u, \n\
        #join_date_ia, #course_name_ia, #level_ia, #city_country_ia, \n\
        #join_date_iu, #course_name_iu, #level_iu, #city_country_iu, \n\
        #language_name_a, #speaking_a, #writing_a, \n\
        #language_name_u, #speaking_u, #writing_u, \n\
        #uniform-<?= CHtml::activeId($model, 'marital_status') ?>").textMandatoryFree();
    });
</script>


