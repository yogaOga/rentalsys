<?php
/* @var $this LBusinessTypeController */
/* @var $model LBusinessType */

$this->breadcrumbs=array(
	'Lbusiness Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LBusinessType', 'url'=>array('index')),
	array('label'=>'Manage LBusinessType', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create LBusinessType</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>