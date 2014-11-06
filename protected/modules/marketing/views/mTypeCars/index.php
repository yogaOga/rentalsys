<?php
/* @var $this MTypeCarsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mtype Cars',
);

$this->menu=array(
	array('label'=>'Create MTypeCars', 'url'=>array('create')),
	array('label'=>'Manage MTypeCars', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mtype Cars</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>