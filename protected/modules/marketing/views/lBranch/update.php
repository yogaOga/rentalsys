<?php
/* @var $this LBranchController */
/* @var $model LBranch */

$this->breadcrumbs=array(
	'Lbranches'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LBranch', 'url'=>array('index')),
	array('label'=>'Create LBranch', 'url'=>array('create')),
	array('label'=>'View LBranch', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LBranch', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update LBranch <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>