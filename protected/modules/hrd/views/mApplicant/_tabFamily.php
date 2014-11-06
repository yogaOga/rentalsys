<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . '/css/style.css');
echo CHtml::htmlButton('Add', array('class' => 'search-button button', 'onclick' => 'dialogAddFam()'));

$criteria = new CDbCriteria();
$criteria->condition = 'applicant_id = ' . $model->id;
$modelFam = new HFamilyApplicant();

$dataFam = new CActiveDataProvider($modelFam, array(
    'criteria' => $criteria,
        ));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'family-applicant-grid',
    'dataProvider' => $dataFam,
    //'filter' => $modelFamilyApp,
    'columns' => array(
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->Pagination->CurrentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
            'htmlOptions' => array(
                'style' => '',
            ),
        ),
        'name',
        'relation',
        array(
            'header' => 'Date of Birth',
            'type' => 'raw',
            'value' => '$data->place_birth.", ".$data->date_birth',
        ),
        'gender',
        'job',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'deleteButtonUrl' => 'Yii::app()->createUrl("hrd/mApplicant/removeFamily", array("id"=>$data->id))',
            'buttons' => array(
                'update' => array(
                    'label' => 'Update',
                    'options' => array('style' => 'cursor:pointer'),
                    'url' => 'Yii::app()->createUrl("hrd/mApplicant/getFamily", array("id"=>$data->id))',
                    'click' => 'function(){dialogUpdateFam(this); return false;}',
                ),
            ),
        ),
    ),
));

$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogAddFamily',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Add Family',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){saveDataFamily()}',
            'Cancel' => 'js:function(){$("#dialogAddFamily").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Family Name <span class="required">*</span>', 'name_a', array('class' => 'required')); ?>
            <?php echo CHtml::textField('name_a', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Family Name')); ?>
            <?php echo CHtml::hiddenField('applicant_id_a', $model->id); ?>
        </div>

        <div class="input">
            <?php echo CHtml::label('Relationship <span class="required">*</span>', 'relation_a', array('class' => 'required')); ?>
            <?php echo CHtml::textField('relation_a', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Relationship')); ?>
            <?php echo CHtml::error($modelFam, 'relation_a'); ?>
        </div>

        <div class="input">
            <?php echo CHtml::label('Date of Birth <span class="required">*</span>', 'place_birth_a', array('class' => 'required')); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'place_birth_a',
                'source' => $this->createUrl('MApplicant/GetBirthPlaceFamily'),
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

            <?php echo CHtml::textField('birth_date_a', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Birth Date', 'class' => 'datepicker required')); ?>

        </div>

        <div class="input">
            <?php echo CHtml::label('Gender <span class="required">*</span>', 'gender_a'); ?>
            <?php //echo CHtml::textField('gender', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Gender')); ?>
            <?php echo CHtml::dropDownList('gender_a', '', array('MALE' => 'Male', 'FEMALE' => 'Female'), array('size' => 2, 'maxlength' => 1, 'empty' => '- Select', 'class' => 'required')); ?>

        </div>

        <div class="input">
            <?php echo CHtml::label('Job <span class="required">*</span>', 'job_a'); ?>
            <?php echo CHtml::textField('job_a', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Job', 'class' => 'required')); ?>

        </div>
    </div>

</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>


<!-- Dialog Update Family -->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogUpdateFamily',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Update Family',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){updateDataFamily()}',
            'Cancel' => 'js:function(){$("#dialogUpdateFamily").dialog("close");}',
        ),
    ),
));
?>
<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Family Name <span class="required">*</span>', 'name_u', array('class' => 'required')); ?>
            <?php echo CHtml::textField('name_u', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Family Name')); ?>
            <?php echo CHtml::hiddenField('id_u')?>
            <?php echo CHtml::hiddenField('applicant_id_u')?>
        </div>

        <div class="input">
            <?php echo CHtml::label('Relationship <span class="required">*</span>', 'relation_u', array('class' => 'required')); ?>
            <?php echo CHtml::textField('relation_u', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Relationship')); ?>
            <?php echo CHtml::error($modelFam, 'relation_u'); ?>
        </div>

        <div class="input">
            <?php echo CHtml::label('Date of Birth <span class="required">*</span>', 'birth_place_u', array('class' => 'required')); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'birth_place_u',
                'source' => $this->createUrl('MApplicant/GetBirthPlaceFamily'),
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

            <?php echo CHtml::textField('birth_date_u', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Birth Date', 'class' => 'datepicker required')); ?>

        </div>

        <div class="input">
            <?php echo CHtml::label('Gender <span class="required">*</span>', 'gender_u'); ?>         
            <?php echo CHtml::dropDownList('gender_u', '', array('MALE' => 'Male', 'FEMALE' => 'Female'), array('size' => 2, 'maxlength' => 1, 'empty' => '- Select', 'class' => 'required')); ?>

        </div>

        <div class="input">
            <?php echo CHtml::label('Job <span class="required">*</span>', 'job_u'); ?>
            <?php echo CHtml::textField('job_u', '', array('size' => 25, 'maxlength' => 25, 'placeholder' => 'Job', 'class' => 'required')); ?>

        </div>
    </div>

</div>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<script type="text/javascript">
    function saveDataFamily() {
        var name = $('#name_a').val();
        var relation = $('#relation_a').val();
        var birth_place = $('#place_birth_a').val();
        var birth_date = $('#birth_date_a').val();
        var gender = $('#gender_a').val();
        var job = $('#job_a').val();
        $.post("<?php echo $this->createUrl('addFamily'); ?>",
                {"applicant_id": <?= $model->id; ?>, "name": name, "relation": relation, "birth_place": birth_place, "birth_date": birth_date, "gender": gender, "job": job}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGrid();

            } else {
                alert(pesan[1]);
                refreshGrid();
                $("#dialog input").each(function() {
                    this.value = "";
                });
                $("#dialogAddFamily").dialog("close");
            }

        });
    }

    function refreshGrid() {
        $('#family-applicant-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
    }

    function dialogAddFam() {
        // Clear data family
        $("#dialog input").each(function() {this.value = "";}); 
        $("#dialogAddFamily").dialog("open");
    }
    
    function dialogUpdateFam(url) {
        // Get data family
        $("#dialog input").each(function() {this.value = "";}); 
        $.getJSON(url, function(data) {
            $('#id_u').val(data.id);
            $('#applicant_id_u').val(data.applicant_id);
            $('#name_u').val(data.name);
            $('#relation_u').val(data.relation);
            $('#birth_place_u').val(data.place_birth);
            $('#birth_date_u').val(data.date_birth);
            $('#gender_u').val(data.gender);
            $('#job_u').val(data.job);
        });
        $("#dialogUpdateFamily").dialog("open");
    }
    
    function updateDataFamily() {
        var id = $('#id_u').val();
        var name = $('#name_u').val();
        var applicant_id = $('#applicant_id_u').val();
        var relation = $('#relation_u').val();
        var birth_place = $('#birth_place_u').val();
        var birth_date = $('#birth_date_u').val();
        var gender = $('#gender_u').val();
        var job = $('#job_u').val();
        $.post("<?php echo $this->createUrl('updateFamily'); ?>",
                {"id":id,"applicant_id": applicant_id, "name": name, "relation": relation, "birth_place": birth_place, "birth_date": birth_date, "gender": gender, "job": job}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGrid();

            } else {
                alert(pesan[1]);
                refreshGrid();
                $("#dialog input").each(function() {
                    this.value = "";
                });
                $("#dialogUpdateFamily").dialog("close");
            }

        });
    }
</script>