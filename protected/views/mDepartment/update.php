<?php
/* @var $this MDepartmentController */
/* @var $model MDepartment */

$this->breadcrumbs=array(
	'Mdepartments'=>array('index'),
	$model->department_id=>array('view','id'=>$model->department_id),
	'Update',
);

$this->menu=array(
array('label'=>'List MDepartment', 'url'=>array('index')),
array('label'=>'Create MDepartment', 'url'=>array('create')),
array('label'=>'View MDepartment', 'url'=>array('view', 'id'=>$model->department_id)),
array('label'=>'Manage MDepartment', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Mdepartments</h1>
<div class="bloc">
    <div class="title">Update MDepartment <?php echo $model->department_id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>