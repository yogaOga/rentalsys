<?php
/* @var $this LBranchController */
/* @var $model LBranch */

$this->breadcrumbs=array(
	'Lbranches'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List LBranch', 'url'=>array('index')),
	array('label'=>'Create LBranch', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#lbranch-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Lbranches</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'lbranch-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'branch_name',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>



