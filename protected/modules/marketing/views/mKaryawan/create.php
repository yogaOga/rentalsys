<?php
/* @var $this MKaryawanController */
/* @var $model MKaryawan */

$this->breadcrumbs=array(
	'Mkaryawans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MKaryawan', 'url'=>array('index')),
	array('label'=>'Manage MKaryawan', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MKaryawan</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>