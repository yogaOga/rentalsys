<?php
/* @var $this MMarketingOfficerController */
/* @var $model MMarketingOfficer */

$this->breadcrumbs=array(
	'Mmarketing Officers'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List MMarketingOfficer', 'url'=>array('index')),
	array('label'=>'Create MMarketingOfficer', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#mmarketing-officer-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Mmarketing Officers</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'mmarketing-officer-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'mo_id',
		'mo_name',
		'created_at',
		'created_user',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>



