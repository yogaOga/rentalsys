<?php
/* @var $this VehicleController */
/* @var $model Vehicle */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List Vehicle', 'url'=>array('index')),
	array('label'=>'Create Vehicle', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#vehicle-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Vehicles</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'vehicle-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'merk',
		'year',
		'color',
		'plate_number',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>