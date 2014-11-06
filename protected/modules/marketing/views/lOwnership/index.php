<?php
/* @var $this LOwnershipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lownerships',
);

$this->menu=array(
	array('label'=>'Create LOwnership', 'url'=>array('create')),
	array('label'=>'Manage LOwnership', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Lownerships</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>