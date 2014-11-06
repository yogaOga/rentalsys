<?php
/* @var $this LOwnershipController */
/* @var $model LOwnership */

$this->breadcrumbs=array(
	'Lownerships'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LOwnership', 'url'=>array('index')),
	array('label'=>'Create LOwnership', 'url'=>array('create')),
	array('label'=>'View LOwnership', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LOwnership', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update LOwnership <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>