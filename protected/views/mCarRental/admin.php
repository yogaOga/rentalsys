<?php
/* @var $this MCarRentalController */
/* @var $model MCarRental */

$this->breadcrumbs=array(
	'Mcar Rentals'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List MCarRental', 'url'=>array('index')),
	array('label'=>'Create MCarRental', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#mcar-rental-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Mcar Rentals</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'mcar-rental-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'no_cmd',
		'mobil_id',
		'unit',
		'klas_driver',
		'rental_rates',
		/*
		'contract_periode',
		*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>



