<?php
/* @var $this MApplicantController */
/* @var $model MApplicant */

$this->breadcrumbs = array(
    'Mapplicants' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List MApplicant', 'url' => array('index')),
    array('label' => 'Create MApplicant', 'url' => array('create')),
    array('label' => 'Update MApplicant', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete MApplicant', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage MApplicant', 'url' => array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View MApplicant #<?php echo $model->id; ?></h1>
<div class="bloc">
    <div class="title">View MApplicant #<?php echo $model->id; ?></div> 
    <div class="content">
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                //'id',
                'applicant_no',
                'first_name',
                'last_name',
                'nickname',
                'birth_place',
                'birth_date',
                'gender',
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
            ),
        ));
        ?>
    </div>
</div>
</div>
