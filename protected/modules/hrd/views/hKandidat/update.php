<?php
/* @var $this HKandidatController */
/* @var $model HKandidat */

$this->breadcrumbs=array(
	'Hkandidats'=>array('index'),
	$model->kandidat_id=>array('view','id'=>$model->kandidat_id),
	'Update',
);

$this->menu=array(
array('label'=>'List HKandidat', 'url'=>array('index')),
array('label'=>'Create HKandidat', 'url'=>array('create')),
array('label'=>'View HKandidat', 'url'=>array('view', 'id'=>$model->kandidat_id)),
array('label'=>'Manage HKandidat', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Update Hkandidats</h1>
<div class="bloc">
    <div class="title">Update HKandidat <?php echo $model->kandidat_id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_formUpdate', array('model'=>$model)); ?>
    </div>
</div>