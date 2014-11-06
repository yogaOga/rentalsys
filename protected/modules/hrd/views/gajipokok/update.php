<?php
/* @var $this GajipokokController */
/* @var $model Gajipokok */

$this->breadcrumbs=array(
	'Gajipokoks'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List Gajipokok', 'url'=>array('index')),
array('label'=>'Create Gajipokok', 'url'=>array('create')),
array('label'=>'View Gajipokok', 'url'=>array('view', 'id'=>$model->id)),
array('label'=>'Manage Gajipokok', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Gajipokoks</h1>
<div class="bloc">
    <div class="title">Update Gajipokok <?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>