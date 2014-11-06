<?php
/* @var $this LBranchController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lbranches',
);

$this->menu=array(
	array('label'=>'Create LBranch', 'url'=>array('create')),
	array('label'=>'Manage LBranch', 'url'=>array('admin')),
);
?>

<div class="bloc">
	<div class="title">Lbranches</div> 
		<div class="content">
		
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
		)); ?>
		</div>
	</div>
</div>