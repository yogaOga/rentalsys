<?php
/* @var $this LBusinessTypeController */
/* @var $model LBusinessType */

$this->breadcrumbs=array(
	'Lbusiness Types'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LBusinessType', 'url'=>array('index')),
	array('label'=>'Create LBusinessType', 'url'=>array('create')),
	array('label'=>'Update LBusinessType', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LBusinessType', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LBusinessType', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View LBusinessType #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'business_type',
		'create_user',
			),
		)); ?>
		</div>
	</div>
</div>
