<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder */

$this->breadcrumbs = array(
    'Purchase Orders' => array('index'),
    'Manage',
);
$this->menu = array(
    array('label' => 'List PurchaseOrder', 'url' => array('index')),
    array('label' => 'Create PurchaseOrder', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#purchase-order-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");
?>
<div class="bloc">
    <div class="title">Manage Purchase Orders</div> 
    <div class="content">

        <?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button button')); ?>
        <div class="search-form" style="display:none">
            <?php
            $this->renderPartial('_search', array(
                'model' => $model,
            ));
            ?>
        </div><!-- search-form -->

        <?php
        $this->widget('zii.widgets.grid.CGridView', array(
            'id' => 'purchase-order-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'id',
                'marketing_id',
                'tender_no',
                'customer_name',
                'telephone',
                'contact_person',
                'marketing_name',
                /*
                'prospect_id',
                'prospect_address',
                'fax',
                'handphone',
                'po_system_no',
                'period_rent',
                'po_customer_no',
                'delivery_date',
                'vehicle_id',
                'unit_requirement',
                'accesories',
                'rate',
                'contract_period',
                'approved',
                
                  'created_date',
                  'created_user',
                  'updated_user',
                  'updated_date',
                 */
                array(
                    'class' => 'CButtonColumn',
                ),
            ),
        ));
        ?>

    </div>
</div>
</div>

<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/8a412637/jquery.js"></script>
<script src="http://code.jquery.com/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

