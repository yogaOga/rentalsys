<?php
/* @var $this MCarsModelsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcars Models',
);

$this->menu=array(
	array('label'=>'Create MCarsModels', 'url'=>array('create')),
	array('label'=>'Manage MCarsModels', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mcars Models</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>