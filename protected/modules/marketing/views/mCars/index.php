<?php
/* @var $this MCarsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcars',
);

$this->menu=array(
	array('label'=>'Create MCars', 'url'=>array('create')),
	array('label'=>'Manage MCars', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mcars</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>