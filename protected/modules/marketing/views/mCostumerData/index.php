<?php
/* @var $this MCostumerDataController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mcostumer Datas',
);

$this->menu=array(
	array('label'=>'Create MCostumerData', 'url'=>array('create')),
	array('label'=>'Manage MCostumerData', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mcostumer Datas</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>