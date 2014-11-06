<?php
/* @var $this MKaryawanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Mkaryawans',
);

$this->menu=array(
	array('label'=>'Create MKaryawan', 'url'=>array('create')),
	array('label'=>'Manage MKaryawan', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Mkaryawans</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>