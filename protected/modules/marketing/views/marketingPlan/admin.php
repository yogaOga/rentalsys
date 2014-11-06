<?php
/* @var $this MarketingPlanController */
/* @var $model MarketingPlan */

$this->breadcrumbs=array(
	'Marketing Plans'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List MarketingPlan', 'url'=>array('index')),
	array('label'=>'Create MarketingPlan', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#marketing-plan-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Marketing Plans</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'marketing-plan-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id_marketing_plan',
		'Nama_Marketing',
		'Marketing_Items',
		'Start_End_Date',
		'Durasi_Pekerjaan',
		'Skala_Prioritas',
		/*
		'Estimasi_Hasil',
		'Result_Final',
		'Note_Manager',
		*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>