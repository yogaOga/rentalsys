<?php
/* @var $this MApplicantController */
/* @var $model MApplicant */

$this->breadcrumbs = array(
    'Mapplicants' => array('index'),
    'Manage',
);
$this->menu = array(
    array('label' => 'List MApplicant', 'url' => array('index')),
    array('label' => 'Create MApplicant', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$('#mapplicant-grid').yiiGridView('update', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Manage Mapplicants</h1>

<?php
$flashMessages = Yii::app()->user->getFlashes();
if ($flashMessages) {
    foreach ($flashMessages as $key => $message) {
        echo '<div class="notif ' . $key . ' bloc">'
        . '<strong>' . $key . '</strong> ' . $message . '<a href="#" class="close">x</a></div>';
    }
}
?>

<div class="bloc">
    <div class="title">Actions</div>
    <div class="content">
        <div class="left">
            <?php echo CHtml::link('New', $this->createUrl('Create'), array('class' => 'button')); ?>
            <?php echo CHtml::link('Print', 'JavaScript:popPrint("' . $this->createUrl('Print') . '");', array('class' => 'button black')); ?>        </div>
        <div class="right">
            <form id="search" class="input placeholder">
                <input class="text" type="text" name="q" value="" />
            </form>
        </div>
    </div>
</div>

<div class="bloc">
    <div class="title">Table Mapplicants</div> 
    <div class="content">

        <?php //echo CHtml::link('Advanced Search', '#', array('class' => 'search-button button')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->

        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'mapplicant-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'header' => 'No',
                    'value' => '$this->grid->dataProvider->Pagination->CurrentPage*$this->grid->dataProvider->pagination->pageSize+$row+1',
                    'htmlOptions' => array(
                        'style' => '',
                    ),
                ),
                array(
                    'name' => 'applicant_no',
                    'htmlOptions' => array(
                        'style' => 'width:60px;',
                    ),
                ),
                'first_name',
                'last_name',
                //'nickname',
                array(
                    'name' => 'birth_place',
                    'type'=>'raw',
                ),
                array(
                    'name' => 'birth_date',
                    'filter' => $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'birth_date',
                        'language' => 'en',
                        'i18nScriptFile' => 'jquery.ui.datepicker-en.js',
                        'htmlOptions' => array(
                            'id' => 'datepicker_for_birth_date',
                            'size' => '10',
                        ),
                        'defaultOptions' => array(// (#3)
                            'showOn' => 'focus',
                            'dateFormat' => 'dd-mm-yy',
                            'showOtherMonths' => true,
                            'selectOtherMonths' => true,
                            'changeMonth' => true,
                            'changeYear' => true,
                            'showButtonPanel' => true,
                        )), true
                    ),
                    'htmlOptions' => array(
                        'style' => 'width:60px;',
                    ),
                ),
                array(
                    'name' => 'gender',
                    'value' => '(isset($data->gender)) ? CHtml::encode($data->gender) :""',
                    'filter' => CHtml::activeDropDownList($model, 'gender', array('' => 'All', 'MALE' => 'MALE', 'FEMALE' => 'FEMALE')),
                    'htmlOptions' => array(
                        'style' => 'width:60px;',
                    ),
                ),
                /*


                  'blood_type',
                  'nationality',
                  'street_address',
                  'state_id',
                  'city_id',
                  'postal_code',
                  'home_status',
                  'phone',
                  'mobile',
                  'photo_path',
                  'email',
                  'religion',
                  'hobby',
                  'driving_licence',
                  'marital_status',
                  'children',
                  'emergency_person_name',
                  'emergency_relation',
                  'emergency_mobile',
                  'emergency_ext_reference',
                  'emergency_ext_address',
                  'emergency_ext_phone',
                  'emergency_int_reference',
                  'emergency_int_position',
                  'emergency_int_location',
                  'created_at',
                  'created_by',
                  'updated_at',
                  'create_by',
                 */
                array(
                    'class' => 'CButtonColumn',
                    'buttons' => array(
                        'view' => array(
                            'label' => 'View',
                            'options' => array('class' => 'zoombox w1200 h550'),
                        ),
                    ),
                    'htmlOptions' => array(
                        'style' => 'width:70px;'
                    ),
                ),
            ),
            'afterAjaxUpdate' => 'function(id, data){reinstallDatePicker(id,data)}',
        ));
        Yii::app()->clientScript->registerScript('re-install-date-picker', "
function reinstallDatePicker(id, data) {
        //use the same parameters that you had set in your widget else the datepicker will be refreshed by default
    $('#datepicker_for_birth_date').datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional['en'],{'dateFormat':'dd-mm-yy'}));
}
");
        ?>

    </div>
</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script type="text/javascript">
// Popup window code
    function popPrint(url) {
        popupWindow = window.open(
                url, 'popUpWindow', 'height=700,width=1000,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=no,menubar=no,location=no,directories=no,status=yes')
    }
</script>