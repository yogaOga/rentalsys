<?php
/* @var $this LBusinessTypeController */
/* @var $model LBusinessType */

$this->breadcrumbs=array(
	'Lbusiness Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List LBusinessType', 'url'=>array('index')),
	array('label'=>'Create LBusinessType', 'url'=>array('create')),
	array('label'=>'View LBusinessType', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage LBusinessType', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update LBusinessType <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>