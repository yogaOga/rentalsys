<?php
/* @var $this HPewawancaraController */
/* @var $model HPewawancara */

$this->breadcrumbs=array(
	'Hpewawancaras'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
array('label'=>'List HPewawancara', 'url'=>array('index')),
array('label'=>'Create HPewawancara', 'url'=>array('create')),
array('label'=>'View HPewawancara', 'url'=>array('view', 'id'=>$model->id)),
array('label'=>'Manage HPewawancara', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Hpewawancaras</h1>
<div class="bloc">
    <div class="title">Update HPewawancara <?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>