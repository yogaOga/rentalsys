<?php
/* @var $this MDriversController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mdrivers',
);

$this->menu=array(
	array('label'=>'Create MDrivers', 'url'=>array('create')),
	array('label'=>'Manage MDrivers', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mdrivers</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>