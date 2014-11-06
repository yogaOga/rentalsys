<?php
/* @var $this LOwnershipController */
/* @var $model LOwnership */

$this->breadcrumbs=array(
	'Lownerships'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LOwnership', 'url'=>array('index')),
	array('label'=>'Create LOwnership', 'url'=>array('create')),
	array('label'=>'Update LOwnership', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LOwnership', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LOwnership', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View LOwnership #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'name_owner',
		'cr',
			),
		)); ?>
		</div>
	</div>
</div>
