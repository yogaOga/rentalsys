<?php
/* @var $this TQuotationController */
/* @var $model TQuotation */

$this->breadcrumbs=array(
	'Tquotations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TQuotation', 'url'=>array('index')),
	array('label'=>'Create TQuotation', 'url'=>array('create')),
	array('label'=>'View TQuotation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TQuotation', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update TQuotation <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>