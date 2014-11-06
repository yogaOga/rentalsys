<?php
/* @var $this LBranchController */
/* @var $model LBranch */

$this->breadcrumbs=array(
	'Lbranches'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List LBranch', 'url'=>array('index')),
	array('label'=>'Create LBranch', 'url'=>array('create')),
	array('label'=>'Update LBranch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete LBranch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage LBranch', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">View LBranch #<?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'id',
		'branch_name',
			),
		)); ?>
		</div>
	</div>
</div>
