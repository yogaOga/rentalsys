<?php
/* @var $this HWarningLetterController */
/* @var $model HWarningLetter */

$this->breadcrumbs=array(
	'Hwarning Letters'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List HWarningLetter', 'url'=>array('index')),
	array('label'=>'Create HWarningLetter', 'url'=>array('create')),
	array('label'=>'Update HWarningLetter', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete HWarningLetter', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HWarningLetter', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> View Hwarning Letters</h1>
<div class="bloc">
    <div class="title">View HWarningLetter #<?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
        		'id',
		'employee_id',
		'nip',
		'employee_name',
		'position',
		'description',
		'warning_type',
		'created_at',
		'created_by',
        ),
        )); ?>
    </div>
</div>
