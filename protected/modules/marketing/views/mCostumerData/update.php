<?php
/* @var $this MCostumerDataController */
/* @var $model MCostumerData */

$this->breadcrumbs=array(
	'Mcostumer Datas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MCostumerData', 'url'=>array('index')),
	array('label'=>'Create MCostumerData', 'url'=>array('create')),
	array('label'=>'View MCostumerData', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage MCostumerData', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Update MCostumerData <?php echo $model->id; ?></div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>