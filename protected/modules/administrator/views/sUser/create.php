<?php
/* @var $this SUserController */
/* @var $model SUser */

$this->breadcrumbs=array(
	'Susers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SUser', 'url'=>array('index')),
	array('label'=>'Manage SUser', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create SUser</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>