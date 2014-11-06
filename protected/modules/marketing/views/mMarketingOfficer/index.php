<?php
/* @var $this MMarketingOfficerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mmarketing Officers',
);

$this->menu=array(
	array('label'=>'Create MMarketingOfficer', 'url'=>array('create')),
	array('label'=>'Manage MMarketingOfficer', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mmarketing Officers</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>