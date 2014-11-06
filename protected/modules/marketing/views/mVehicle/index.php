<?php
/* @var $this MVehicleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mvehicles',
);

$this->menu=array(
	array('label'=>'Create MVehicle', 'url'=>array('create')),
	array('label'=>'Manage MVehicle', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mvehicles</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>