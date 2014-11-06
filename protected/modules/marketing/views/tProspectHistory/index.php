<?php
/* @var $this TProspectHistoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tprospect Histories',
);

$this->menu=array(
	array('label'=>'Create TProspectHistory', 'url'=>array('create')),
	array('label'=>'Manage TProspectHistory', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Tprospect Histories</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>