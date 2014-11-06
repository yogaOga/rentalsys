<?php
/* @var $this TActivityPlanController */
/* @var $model TActivityPlan */

$this->breadcrumbs = array(
    'Tactivity Plans' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List TActivityPlan', 'url' => array('index')),
    array('label' => 'Create TActivityPlan', 'url' => array('create')),
    array('label' => 'Update TActivityPlan', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete TActivityPlan', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage TActivityPlan', 'url' => array('admin')),
);
?>

<div class="bloc">
    <div class="title">View TActivityPlan #<?php echo $model->id; ?></div> 
    <div class="content">
       
        <?php
        $this->widget('zii.widgets.CDetailView', array(
            'data' => $model,
            'attributes' => array(
                'id',
                'id_marketing',
                'start_date',
                'end_date',
                'working_duration',
                'scale_of_priority_id',
                'estimation_of_result',
                'final_result_id',
                'note_of_manager',
                'created_user',
                'created_date',
                'update_user',
                'update_date',
            ),
        ));
        ?>
    </div>
</div>
</div>
