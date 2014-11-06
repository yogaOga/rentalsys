<?php
/* @var $this SUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Susers',
);

$this->menu=array(
	array('label'=>'Create SUser', 'url'=>array('create')),
	array('label'=>'Manage SUser', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Susers</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>