<?php
/* @var $this MDepartmentController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mdepartments',
);

$this->menu=array(
	array('label'=>'Create MDepartment', 'url'=>array('create')),
	array('label'=>'Manage MDepartment', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> List Mdepartments</h1>
<div class="bloc">
    <div class="title">Mdepartments</div> 
    <div class="content">

        <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        )); ?>
    </div>
</div>