<?php
/* @var $this TQuotationController */
/* @var $model TQuotation */

$this->breadcrumbs=array(
	'Tquotations'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List TQuotation', 'url'=>array('index')),
	array('label'=>'Create TQuotation', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#tquotation-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Tquotations</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'tquotation-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
		'marketing_id',
		'customer_id',
		'customer_name',
		'phone',
		'contact_person',
		/*
		'note',
		'name_of_employer',
		'include_driver',
		'include_ppn',
		'date',
		'address',
		'fax',
		'handphone_customer',
		'office_boss',
		'hanphone',
		'email',
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



