<?php
/* @var $this MMarketingOfficerController */
/* @var $model MMarketingOfficer */

$this->breadcrumbs=array(
	'Mmarketing Officers'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MMarketingOfficer', 'url'=>array('index')),
	array('label'=>'Create MMarketingOfficer', 'url'=>array('create')),
	array('label'=>'View MMarketingOfficer', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MMarketingOfficer', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MMarketingOfficer <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>