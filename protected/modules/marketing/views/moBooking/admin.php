<?php
/* @var $this MoBookingController */
/* @var $model MoBooking */

$this->breadcrumbs=array(
	'Mo Bookings'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List MoBooking', 'url'=>array('index')),
	array('label'=>'Create MoBooking', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#mo-booking-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Mo Bookings</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'mo-booking-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'booking_day',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>



