<?php
/* @var $this LOwnershipController */
/* @var $model LOwnership */

$this->breadcrumbs=array(
	'Lownerships'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List LOwnership', 'url'=>array('index')),
	array('label'=>'Create LOwnership', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#lownership-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Lownerships</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'lownership-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'name_owner',
		'create_user',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>



