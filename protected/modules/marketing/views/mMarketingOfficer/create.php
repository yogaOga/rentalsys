<?php
/* @var $this MMarketingOfficerController */
/* @var $model MMarketingOfficer */

$this->breadcrumbs=array(
	'Mmarketing Officers'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MMarketingOfficer', 'url'=>array('index')),
	array('label'=>'Manage MMarketingOfficer', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create MMarketingOfficer</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>