<?php
/* @var $this TProspectHistoryController */
/* @var $model TProspectHistory */

$this->breadcrumbs=array(
	'Tprospect Histories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TProspectHistory', 'url'=>array('index')),
	array('label'=>'Manage TProspectHistory', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create TProspectHistory</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>