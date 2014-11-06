<?php
/* @var $this LBusinessTypeController */
/* @var $model LBusinessType */

$this->breadcrumbs=array(
	'Lbusiness Types'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List LBusinessType', 'url'=>array('index')),
	array('label'=>'Create LBusinessType', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#lbusiness-type-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Lbusiness Types</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'lbusiness-type-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'business_type',
		'create_user',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>



