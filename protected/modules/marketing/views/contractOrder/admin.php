<?php
/* @var $this ContractOrderController */
/* @var $model ContractOrder */

$this->breadcrumbs=array(
	'Contract Orders'=>array('index'),
	'Manage',
);
$this->menu=array(
	array('label'=>'List ContractOrder', 'url'=>array('index')),
	array('label'=>'Create ContractOrder', 'url'=>array('create')),
);
		
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#contract-order-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");

?>
<div class="bloc">
	<div class="title">Manage Contract Orders</div> 
		<div class="content">
				
		<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button button')); ?>
		<div class="search-form" style="display:none">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
		</div><!-- search-form -->

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'contract-order-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id_Contract_Order',
		'MarketingID',
		'No_Penawaran',
		'Id_Customer',
		'Nama_Customer',
		'No_Telp',
		/*
		'Contact_Person',
		'Marketing_Name',
		'ID_Prospek',
		'Alamat_Prospek',
		'No_Fax',
		'No_Hp',
		'No_PO_System',
		'Rent_Period',
		'Delivery_Date',
		'Type_Contract_Order',
		*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

		</div>
	</div>
</div>



