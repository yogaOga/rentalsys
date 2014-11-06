<?php
/* @var $this LOwnershipController */
/* @var $model LOwnership */

$this->breadcrumbs=array(
	'Lownerships'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LOwnership', 'url'=>array('index')),
	array('label'=>'Manage LOwnership', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create LOwnership</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>