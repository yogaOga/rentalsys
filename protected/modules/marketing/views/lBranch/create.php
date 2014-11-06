<?php
/* @var $this LBranchController */
/* @var $model LBranch */

$this->breadcrumbs=array(
	'Lbranches'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List LBranch', 'url'=>array('index')),
	array('label'=>'Manage LBranch', 'url'=>array('admin')),
);
?>

        
<div class="bloc">
	<div class="title">Create LBranch</div> 
		<div class="content">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>		</div>
	</div>
</div>