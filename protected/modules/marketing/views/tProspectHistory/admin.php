<?php
/* @var $this TProspectHistoryController */
/* @var $model TProspectHistory */

$this->breadcrumbs=array(
	'Tprospect Histories'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List TProspectHistory', 'url'=>array('index')),
	array('label'=>'Create TProspectHistory', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#tprospect-history-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Tprospect Histories</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'tprospect-history-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'history_id',
		'prospect_id',
		'status_prospect',
		'type_prospect',
		'unit_need',
		/*
		'competitor',
		'description_prospect',
		'next_plan',
		'date_prospect',
		*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>



