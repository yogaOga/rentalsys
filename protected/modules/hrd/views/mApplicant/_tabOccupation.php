<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . '/css/style.css');
echo CHtml::htmlButton('Add', array('class' => 'search-button button', 'onclick' => '$("#dialogAddOccupation").dialog("open")'));

$criteria = new CDbCriteria();
$criteria->condition = 'applicant_id = ' . $model->id;
$modelOcup = new HOccupationApplicant();

$dataOcup = new CActiveDataProvider($modelOcup, array(
    'criteria' => $criteria,
        ));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'occupation-applicant-grid',
    'dataProvider' => $dataOcup,
    //'filter' => $modelFamilyApp,
    'columns' => array(
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->Pagination->CurrentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
            'htmlOptions' => array(
                'style' => '',
            ),
        ),
        'join_date',
        'quit_date',
        'company_name',
        'position',
        'total_junior',
        'position_of_senior',
        'reason',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'deleteButtonUrl' => 'Yii::app()->createUrl("hrd/mApplicant/removeOccupation", array("id"=>$data->id))',
            'buttons' => array(
                'update' => array(
                    'label' => 'Update',
                    'options' => array('style' => 'cursor:pointer'),
                    'url' => 'Yii::app()->createUrl("hrd/mApplicant/getOccupation", array("id"=>$data->id))',
                    'click' => 'function(){dialogUpdateOccupation(this); return false;}',
                ),
            ),
        ),
    ),
));

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogAddOccupation',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Add Occupation',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){saveDataOccupation()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogAddOccupation").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Join Date', 'join_date_a'); ?>
            <?php echo CHtml::textField('join_date_a', '', array('class' => 'datepicker', 'size' => 25, 'maxlength' => 25, 'placeholder' => 'Join Date')); ?>
            <?php echo CHtml::hiddenField('applicant_id', $model->id); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Quit Date', 'quit_date_a'); ?>
            <?php echo CHtml::textField('quit_date_a', '', array('class' => 'datepicker', 'size' => 25, 'maxlength' => 25, 'placeholder' => 'Quit Date')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Company Name', 'company_name_a'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'company_name_a',
                'source' => $this->createUrl('MApplicant/GetCompanyOccupation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Company Name, PT',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Position', 'position_a'); ?>
            <?php echo CHtml::textField('position_a', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Position')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Total Junior', 'total_junior_a'); ?>
            <?php echo CHtml::textField('total_junior_a', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Total Junior')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Position of Senior', 'position_of_senior_a'); ?>
            <?php echo CHtml::textField('position_of_senior_a', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Position of Senior')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Reason to Leave', 'reason_a'); ?>
            <?php echo CHtml::textArea('reason_a', '', array('placeholder' => 'Reason to Leave', 'style' => 'height:80px;')); ?>
        </div>
    </div>

</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogUpdateOccupation',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Update Occupation',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){updateDataOccupation()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogUpdateOccupation").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Join Date', 'join_date_u'); ?>
            <?php echo CHtml::textField('join_date_u', '', array('class' => 'datepicker', 'size' => 25, 'maxlength' => 25, 'placeholder' => 'Join Date')); ?>
            <?php echo CHtml::hiddenField('applicant_id_u', $model->id); ?>
            <?php echo CHtml::hiddenField('id_occ_u')?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Quit Date', 'quit_date_u'); ?>
            <?php echo CHtml::textField('quit_date_u', '', array('class' => 'datepicker', 'size' => 25, 'maxlength' => 25, 'placeholder' => 'Quit Date')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Company Name', 'company_name_u'); ?>
            <?php echo CHtml::textField('company_name_u', '', array('size' => 25, 'maxlength' => 60, 'placeholder' => 'Compnay Name, PT')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Position', 'position_u'); ?>
            <?php echo CHtml::textField('position_u', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Position')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Total Junior', 'total_junior_u'); ?>
            <?php echo CHtml::textField('total_junior_u', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Total Junior')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Position of Senior', 'position_of_senior_u'); ?>
            <?php echo CHtml::textField('position_of_senior_u', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Position of Senior')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Reason to Leave', 'reason_u'); ?>
            <?php echo CHtml::textArea('reason_u', '', array('placeholder' => 'Reason to Leave', 'style' => 'height:80px;')); ?>
        </div>
    </div>

</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>
<script type="text/javascript" src="js/alfamartPlugin.js"></script>
<script type="text/javascript">
    function saveDataOccupation() {
        var join_date = $('#join_date_a').val();
        var quit_date = $('#quit_date_a').val();
        var company_name = $('#company_name_a').val();
        var position = $('#position_a').val();
        var total_junior = $('#total_junior_a').val();
        var position_of_senior = $('#position_of_senior_a').val();
        var reason = $('#reason_a').val();
        $.post("<?php echo $this->createUrl('addOccupation'); ?>",
                {"applicant_id": <?= $model->id; ?>, "join_date": join_date, "quit_date": quit_date, "company_name": company_name, "position": position, "total_junior": total_junior, "position_of_senior": position_of_senior, "reason": reason}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridOccupation();

            } else {
                alert(pesan[1]);
                refreshGridOccupation();
                $("#dialog input, #dialog textarea").each(function() {
                    this.value = "";
                });
                $("#dialogAddOccupation").dialog("close");
            }

        });
    }

    function refreshGridOccupation() {
        $('#occupation-applicant-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
    }

    function dialogUpdateOccupation(url) {
        // Get data family
        $("#dialog input, #dialog textarea").each(function() {this.value = "";}); 
        $.getJSON(url, function(data) {
            
            $('#id_occ_u').val(data.id);
            $('#join_date_u').val(data.join_date);
            $('#applicant_id_u').val(data.applicant_id);
            $('#quit_date_u').val(data.quit_date);
            $('#company_name_u').val(data.company_name);
            $('#position_u').val(data.position);
            $('#total_junior_u').val(data.total_junior);
            $('#position_of_senior_u').val(data.position_of_senior);
            $('#reason_u').val(data.reason);
        });
        $("#dialogUpdateOccupation").dialog("open");
    }

    function updateDataOccupation(){
        var id = $('#id_occ_u').val();
        var join_date = $('#join_date_u').val();
        var quit_date = $('#quit_date_u').val();
        var company_name = $('#company_name_u').val();
        var position = $('#position_u').val();
        var total_junior = $('#total_junior_u').val();
        var position_of_senior = $('#position_of_senior_u').val();
        var reason = $('#reason_u').val();
        $.post("<?php echo $this->createUrl('updateOccupation'); ?>",
                {"id":id,"applicant_id": <?= $model->id; ?>, "join_date": join_date, "quit_date": quit_date, "company_name": company_name, "position": position, "total_junior": total_junior, "position_of_senior": position_of_senior, "reason": reason}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridOccupation();

            } else {
                alert(pesan[1]);
                refreshGridOccupation();
                $("#dialog input, #dialog textarea").each(function() {
                    this.value = "";
                });
                $("#dialogUpdateOccupation").dialog("close");
            }

        });
    }

</script>
