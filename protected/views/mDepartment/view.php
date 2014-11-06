<?php
/* @var $this MDepartmentController */
/* @var $model MDepartment */

$this->breadcrumbs=array(
	'Mdepartments'=>array('index'),
	$model->department_id,
);

$this->menu=array(
	array('label'=>'List MDepartment', 'url'=>array('index')),
	array('label'=>'Create MDepartment', 'url'=>array('create')),
	array('label'=>'Update MDepartment', 'url'=>array('update', 'id'=>$model->department_id)),
	array('label'=>'Delete MDepartment', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->department_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MDepartment', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Mdepartments</h1>
<div class="bloc">
    <div class="title">View MDepartment #<?php echo $model->department_id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'department_id',
		'department_code',
		'department_name',
        ),
        )); ?>
    </div>
</div>
