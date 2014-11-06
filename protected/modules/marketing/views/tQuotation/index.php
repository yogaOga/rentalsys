<?php
/* @var $this TQuotationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tquotations',
);

$this->menu=array(
	array('label'=>'Create TQuotation', 'url'=>array('create')),
	array('label'=>'Manage TQuotation', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Tquotations</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>