<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h3>Formal Education</h3>

<?php echo CHtml::htmlButton('Add', array('class' => 'search-button button', 'onclick' => '$("#dialog input").each(function() {this.value = "";}); $("#dialogAddFEdu").dialog("open");')); ?>
<?php
$criteria = new CDbCriteria();
$criteria->condition = 'employee_id = ' . $model->id;
$modelFEdu = new HFormalEduEmployee($criteria);

$dataFEdu = new CActiveDataProvider($modelFEdu, array(
    'criteria' => $criteria,
        ));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'formal-edu-applicant-grid',
    'dataProvider' => $dataFEdu,
    //'filter' => $modelFamilyApp,
    'columns' => array(
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->Pagination->CurrentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
            'htmlOptions' => array(
                'style' => '',
            ),
        ),
        'education_name',
        'graduate_year',
        'majoring',
        'school_name',
        'city_country',
        'certificate_number',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'deleteButtonUrl' => 'Yii::app()->createUrl("hrd/mEmployee/removeFEdu", array("id"=>$data->id))',
            'buttons' => array(
                'update' => array(
                    'label' => 'Update',
                    'options' => array('style' => 'cursor:pointer'),
                    'url' => 'Yii::app()->createUrl("hrd/mEmployee/getFEdu", array("id"=>$data->id))',
                    'click' => 'function(){dialogUpdateFEdu(this); return false;}',
                ),
            ),
        ),
    ),
));
?>

<hr>

<h3>Informal Education</h3>

<?php echo CHtml::htmlButton('Add', array('class' => 'search-button button', 'onclick' => '$("#dialog input").each(function() {this.value = "";}); $("#dialogAddIEdu").dialog("open");')); ?>
<?php
$criteria = new CDbCriteria();
$criteria->condition = 'employee_id = ' . $model->id;
$modelIEdu = new HInformalEduEmployee($criteria);

$dataIEdu = new CActiveDataProvider($modelIEdu, array(
    'criteria' => $criteria,
        ));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'informal-edu-applicant-grid',
    'dataProvider' => $dataIEdu,
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
        'course_name',
        'level',
        'city_country',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'deleteButtonUrl' => 'Yii::app()->createUrl("hrd/mEmployee/removeIEdu", array("id"=>$data->id))',
            'buttons' => array(
                'update' => array(
                    'label' => 'Update',
                    'options' => array('style' => 'cursor:pointer'),
                    'url' => 'Yii::app()->createUrl("hrd/mEmployee/getIEdu", array("id"=>$data->id))',
                    'click' => 'function(){dialogUpdateIEdu(this); return false;}',
                ),
            ),
        ),
    ),
));
?>

<hr>

<h3>Language Skills</h3>

<?php echo CHtml::htmlButton('Add', array('class' => 'search-button button', 'onclick' => '$("#dialog input").each(function() {this.value = "";}); $("#dialogAddLang").dialog("open");')); ?>
<?php
$criteria = new CDbCriteria();
$criteria->condition = 'employee_id = ' . $model->id;
$modelLangApp = new HLanguageEmployee($criteria);

$dataLangApp = new CActiveDataProvider($modelLangApp, array(
    'criteria' => $criteria,
        ));
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'language-skill-applicant-grid',
    'dataProvider' => $dataLangApp,
    //'filter' => $modelFamilyApp,
    'columns' => array(
        array(
            'header' => 'No',
            'value' => '$this->grid->dataProvider->Pagination->CurrentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
            'htmlOptions' => array(
                'style' => '',
            ),
        ),
        'language_name',
        'speaking',
        'writing',
        array(
            'class' => 'CButtonColumn',
            'template' => '{update}{delete}',
            'deleteButtonUrl' => 'Yii::app()->createUrl("hrd/mEmployee/removeLang", array("id"=>$data->id))',
            'buttons' => array(
                'update' => array(
                    'label' => 'Update',
                    'options' => array('style' => 'cursor:pointer'),
                    'url' => 'Yii::app()->createUrl("hrd/mEmployee/getLang", array("id"=>$data->id))',
                    'click' => 'function(){dialogUpdateLang(this); return false;}',
                ),
            ),
        ),
    ),
));
?>


<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogAddFEdu',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Add Formal Education',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){saveDataFEducation()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogAddFEdu").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Education Name', 'education_name_a'); ?>
            <?php echo CHtml::dropDownList('education_name_a', '', Params::getEducations(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
            <?php echo CHtml::hiddenField('applicant_id', $model->id); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Graduate Year', 'graduate_year_a'); ?>
            <?php echo CHtml::dropDownList('graduate_year_a', '', Params::getYearList(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Majoring', 'majoring_a'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'majoring_a',
                'source' => $this->createUrl('mEmployee/GetMajoringEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Majoring',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('School Name', 'school_name_a'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'school_name_a',
                'source' => $this->createUrl('mEmployee/GetSchoolNameEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'School Name',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('City/Country', 'city_country_a'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'city_country_a',
                'source' => $this->createUrl('mEmployee/GetCityCountryEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'School Name',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Certificate Number', 'certificate_number_a'); ?>
            <?php echo CHtml::textField('certificate_number_a', '', array('size' => 25, 'maxlength' => 60, 'placeholder' => 'Certificate Number')); ?>
        </div>
    </div>

</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogUpdateFEdu',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Update Formal Education',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){updateDataFEducation()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogUpdateFEdu").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Education Name', 'education_name_u'); ?>
            <?php echo CHtml::dropDownList('education_name_u', '', Params::getEducations(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
            <?php echo CHtml::hiddenField('id_fedu', $model->id); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Graduate Year', 'graduate_year_a'); ?>
            <?php echo CHtml::dropDownList('graduate_year_u', '', Params::getYearList(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Majoring', 'majoring_u'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'majoring_u',
                'source' => $this->createUrl('mEmployee/GetMajoringEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Majoring',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('School Name', 'school_name_u'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'school_name_u',
                'source' => $this->createUrl('mEmployee/GetSchoolNameEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'School Name',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('City/Country', 'city_country_u'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'city_country_u',
                'source' => $this->createUrl('mEmployee/GetCityCountryEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'School Name',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Certificate Number', 'certificate_number_u'); ?>
            <?php echo CHtml::textField('certificate_number_u', '', array('size' => 25, 'maxlength' => 60, 'placeholder' => 'Certificate Number')); ?>
        </div>
    </div>

</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<!-- Dialog for Informal Educations -->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogAddIEdu',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Add Informal Education',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){saveDataIEducation()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogAddIEdu").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Join Date', 'join_date_ia'); ?>
            <?php echo CHtml::textField('join_date_ia', '', array('class' => 'datepicker', 'placeholder' => 'Join Date')); ?>
            <?php echo CHtml::hiddenField('applicant_id', $model->id); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Course Name', 'course_name_ia'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'course_name_ia',
                'source' => $this->createUrl('mEmployee/GetCourseNameIEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Cousre Name',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Level', 'level_ia'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'level_ia',
                'source' => $this->createUrl('mEmployee/GetLevelIEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Level',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('City/Country', 'city_country_ia'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'city_country_ia',
                'source' => $this->createUrl('mEmployee/GetCityCountryIEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'City/Country Name',
                )
            ));
            ?>
        </div>
    </div>

</div>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogUpdateIEdu',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Update Informal Education',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){updateDataIEducation()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogUpdateIEdu").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Join Date', 'join_date_iu'); ?>
            <?php echo CHtml::textField('join_date_iu', '', array('class' => 'datepicker', 'placeholder' => 'Join Date')); ?>
            <?php echo CHtml::hiddenField('id_iedu'); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Course Name', 'course_name_iu'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'course_name_iu',
                'source' => $this->createUrl('mEmployee/GetCourseNameIEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Cousre Name',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Level', 'level_iu'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'level_iu',
                'source' => $this->createUrl('mEmployee/GetLevelIEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Level',
                )
            ));
            ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('City/Country', 'city_country_iu'); ?>
            <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'city_country_iu',
                'source' => $this->createUrl('mEmployee/GetCityCountryIEducation'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'City/Country Name',
                )
            ));
            ?>
        </div>
    </div>

</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<!-- Dialog for Language SKills -->
<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogAddLang',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Add Language Skills',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){saveDataLanguage()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogAddLang").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Language Name', 'language_name_a'); ?>
           <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'language_name_a',
                'source' => $this->createUrl('mEmployee/GetLangName'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Language Name',
                )
            ));
            ?>
            <?php echo CHtml::hiddenField('applicant_id', $model->id); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Speaking', 'speaking_a'); ?>
            <?php echo CHtml::dropDownList('speaking_a', '', Params::getSkillLevel(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Writing', 'writing_a'); ?>
            <?php echo CHtml::dropDownList('writing_a', '', Params::getSkillLevel(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
        </div>
    </div>

</div>
<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<?php
$this->beginWidget('zii.widgets.jui.CJuiDialog', array(
    'id' => 'dialogUpdateLang',
    // additional javascript options for the dialog plugin
    'options' => array(
        'title' => 'Update Language Skill',
        'autoOpen' => false,
        'modal' => true,
        'resizable' => false,
        'draggable' => false,
        'buttons' => array(
            'Save' => 'js:function(){updateDataLanguage()}',
            'Cancel' => 'js:function(){ $("#dialog input").each(function() {this.value = "";}); $("#dialogUpdateLang").dialog("close");}',
        ),
    ),
));
?>

<div id="dialog">
    <div class="bloc">
        <div class="input">
            <?php echo CHtml::label('Language Name', 'language_name_u'); ?>
           <?php
            $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                'name' => 'language_name_u',
                'source' => $this->createUrl('mEmployee/GetLangName'),
                // additional javascript options for the autocomplete plugin
                'options' => array(
                    'showAnim' => 'fold',
                    'minLength' => 2,
                ),
                'htmlOptions' => array(
                    'placeholder' => 'Language Name',
                )
            ));
            ?>
            <?php echo CHtml::hiddenField('id_lang'); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Speaking', 'speaking_u'); ?>
            <?php echo CHtml::dropDownList('speaking_u', '', Params::getSkillLevel(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
        </div>
        <div class="input">
            <?php echo CHtml::label('Writing', 'writing_u'); ?>
            <?php echo CHtml::dropDownList('writing_u', '', Params::getSkillLevel(), array('size' => 2, 'maxlength' => 1, 'empty' => '-Select', 'class' => 'required')); ?>
        </div>
    </div>

</div>

<?php
$this->endWidget('zii.widgets.jui.CJuiDialog');
?>

<script type="text/javascript">
    function saveDataFEducation() {
        var education_name = $('#education_name_a').val();
        var graduate_year = $('#graduate_year_a').val();
        var majoring = $('#majoring_a').val();
        var school_name = $('#school_name_a').val();
        var city_country = $('#city_country_a').val();
        var certificate_number = $('#certificate_number_a').val();
        $.post("<?php echo $this->createUrl('addFEducation'); ?>",
                {"applicant_id": <?= $model->id; ?>, "education_name": education_name, "graduate_year": graduate_year, "majoring": majoring, "school_name": school_name, "city_country": city_country, "certificate_number": certificate_number}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridFEducation();

            } else {
                alert(pesan[1]);
                refreshGridFEducation();
                $("#dialog input, #dialog textarea").each(function() {
                    this.value = "";
                });
                $("#dialogAddFEdu").dialog("close");
            }

        });
    }


    function refreshGridFEducation() {
        $('#formal-edu-applicant-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
    }

    function dialogUpdateFEdu(url) {
        $("#dialog input").each(function() {
            this.value = "";
        });
        $.getJSON(url, function(data) {
            $('#id_fedu').val(data.id);
            $('#education_name_u').val(data.education_name);
            $('#graduate_year_u').val(data.graduate_year);
            $('#majoring_u').val(data.majoring);
            $('#school_name_u').val(data.school_name);
            $('#city_country_u').val(data.city_country);
            $('#certificate_number_u').val(data.certificate_number);
        });
        $("#dialogUpdateFEdu").dialog("open");
    }

    function updateDataFEducation() {
        var id = $('#id_fedu').val();
        var education_name = $('#education_name_u').val();
        var graduate_year = $('#graduate_year_u').val();
        var majoring = $('#majoring_u').val();
        var school_name = $('#school_name_u').val();
        var city_country = $('#city_country_u').val();
        var certificate_number = $('#certificate_number_u').val();
        $.post("<?php echo $this->createUrl('updateFEducation'); ?>",
                {"id": id, "applicant_id": <?= $model->id; ?>, "education_name": education_name, "graduate_year": graduate_year, "majoring": majoring, "school_name": school_name, "city_country": city_country, "certificate_number": certificate_number}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridFEducation();

            } else {
                alert(pesan[1]);
                refreshGridFEducation();
                $("#dialog input, #dialog textarea").each(function() {
                    this.value = "";
                });
                $("#dialogUpdateFEdu").dialog("close");
            }

        });
    }

    function saveDataIEducation() {
        var join_date = $('#join_date_ia').val();
        var course_name = $('#course_name_ia').val();
        var level = $('#level_ia').val();
        var city_country = $('#city_country_ia').val();
        $.post("<?php echo $this->createUrl('addIEducation'); ?>",
                {"applicant_id": <?= $model->id; ?>, "join_date": join_date, "course_name": course_name, "level": level, "city_country": city_country}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridIEducation();

            } else {
                alert(pesan[1]);
                refreshGridIEducation();
                $("#dialog input, #dialog textarea").each(function() {
                    this.value = "";
                });
                $("#dialogAddIEdu").dialog("close");
            }

        });
    }

    function refreshGridIEducation() {
        $('#informal-edu-applicant-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
    }

    function dialogUpdateIEdu(url) {
        $("#dialog input").each(function() {
            this.value = "";
        });
        $.getJSON(url, function(data) {
            $('#id_iedu').val(data.id);
            $('#join_date_iu').val(data.join_date);
            $('#course_name_iu').val(data.course_name);
            $('#level_iu').val(data.level);
            $('#city_country_iu').val(data.city_country);
        });
        $("#dialogUpdateIEdu").dialog("open");
    }
    
    function updateDataIEducation() {
        var id = $('#id_iedu').val();
        var join_date = $('#join_date_iu').val();
        var course_name = $('#course_name_iu').val();
        var level = $('#level_iu').val();
        var city_country = $('#city_country_iu').val();
        $.post("<?php echo $this->createUrl('updateIEducation'); ?>",
                {"id":id,"applicant_id": <?= $model->id; ?>, "join_date": join_date, "course_name": course_name, "level": level, "city_country": city_country}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridIEducation();

            } else {
                alert(pesan[1]);
                refreshGridIEducation();
                $("#dialog input, #dialog textarea").each(function() {
                    this.value = "";
                });
                $("#dialogUpdateIEdu").dialog("close");
            }

        });
    }
    
    function saveDataLanguage() {
        var language_name = $('#language_name_a').val();
        var speaking = $('#speaking_a').val();
        var writing = $('#writing_a').val();
        $.post("<?php echo $this->createUrl('addLanguage'); ?>",
                {"applicant_id": <?= $model->id; ?>, "language_name": language_name, "speaking": speaking, "writing": writing}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridLanguage();

            } else {
                alert(pesan[1]);
                refreshGridLanguage();
                $("#dialog input, #dialog select").each(function() {
                    this.value = "";
                });
                $("#dialogAddLang").dialog("close");
            }

        });
    }
    
    function dialogUpdateLang(url) {
        $("#dialog input, #dialog select").each(function() {
            this.value = "";
        });
        $.getJSON(url, function(data) {
            $('#id_lang').val(data.id);
            $('#language_name_u').val(data.language_name);
            $('#speaking_u').val(data.speaking);
            $('#writing_u').val(data.writing);
        });
        $("#dialogUpdateLang").dialog("open");
    }
    
    function updateDataLanguage() {
        var id = $('#id_lang').val();
        var language_name = $('#language_name_u').val();
        var speaking = $('#speaking_u').val();
        var writing = $('#writing_u').val();
         $.post("<?php echo $this->createUrl('updateLanguage'); ?>",
                {"id":id,"applicant_id": <?= $model->id; ?>, "language_name": language_name, "speaking": speaking, "writing": writing}, function(data) {
            var pesan = data.split("|");
            if (parseInt(pesan[0]) === 0) {
                alert(pesan[1]);
                //$("#dialog input").each(function() {this.value = "";});
                refreshGridLanguage();

            } else {
                alert(pesan[1]);
                refreshGridLanguage();
                $("#dialog input, #dialog textarea").each(function() {
                    this.value = "";
                });
                $("#dialogUpdateLang").dialog("close");
            }

        });
    }
    function refreshGridLanguage() {
        $('#language-skill-applicant-grid').yiiGridView('update', {
            data: $(this).serialize()
        });
    }
</script>