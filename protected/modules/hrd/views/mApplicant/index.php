<?php
/* @var $this MApplicantController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mapplicants',
);

$this->menu=array(
	array('label'=>'Create MApplicant', 'url'=>array('create')),
	array('label'=>'Manage MApplicant', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mapplicants</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>