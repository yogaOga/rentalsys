<?php
/* @var $this MCarsController */
/* @var $model MCars */

$this->breadcrumbs=array(
	'Mcars'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List MCars', 'url'=>array('index')),
	array('label'=>'Create MCars', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#mcars-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Mcars</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'mcars-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'vehicle_id',
		'model_id',
		'type_id',
		'color_id',
		'no_police',
		/*
		'no_chasis',
		'no_machine',
		'no_stnk',
		'fuel_id',
		'kilometer',
		'no_bpkb',
		'year_of_manufacture',
		'no_factory',
		'date_of_purchase',
		'purchase_price',
		'valid_stnk',
		'expired_insurance',
		'no_polis_insurance',
		'state_car',
		'transmission',
		'cylinder',
		'stnk_address',
		'create_user',
		'create_date',
		*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>



