<?php
/* @var $this MCityController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcities',
);

$this->menu=array(
	array('label'=>'Create MCity', 'url'=>array('create')),
	array('label'=>'Manage MCity', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mcities</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>