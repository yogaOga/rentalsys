<?php
/* @var $this MCarsController */
/* @var $model MCars */

$this->breadcrumbs=array(
	'Mcars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MCars', 'url'=>array('index')),
	array('label'=>'Manage MCars', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MCars</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>