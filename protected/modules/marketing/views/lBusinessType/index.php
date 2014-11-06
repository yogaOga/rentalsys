<?php
/* @var $this LBusinessTypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lbusiness Types',
);

$this->menu=array(
	array('label'=>'Create LBusinessType', 'url'=>array('create')),
	array('label'=>'Manage LBusinessType', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Lbusiness Types</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>