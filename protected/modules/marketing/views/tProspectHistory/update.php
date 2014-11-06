<?php
/* @var $this TProspectHistoryController */
/* @var $model TProspectHistory */

$this->breadcrumbs=array(
	'Tprospect Histories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TProspectHistory', 'url'=>array('index')),
	array('label'=>'Create TProspectHistory', 'url'=>array('create')),
	array('label'=>'View TProspectHistory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TProspectHistory', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update TProspectHistory <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>