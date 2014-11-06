<?php
/* @var $this MDepartmentController */
/* @var $model MDepartment */

$this->breadcrumbs=array(
	'Mdepartments'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MDepartment', 'url'=>array('index')),
array('label'=>'Manage MDepartment', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Mdepartments</h1>

<div class="bloc">
    <div class="title">Create MDepartment</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>