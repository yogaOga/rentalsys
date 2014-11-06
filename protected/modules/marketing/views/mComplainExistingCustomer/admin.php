<?php
/* @var $this MComplainExistingCustomerController */
/* @var $model MComplainExistingCustomer */

$this->breadcrumbs = array(
    'Mcomplain Existing Customers' => array('index'),
    'Manage',
);
$this->menu = array(
    array('label' => 'List MComplainExistingCustomer', 'url' => array('index')),
    array('label' => 'Create MComplainExistingCustomer', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#mcomplain-existing-customer-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");
?>
<div class="bloc">
    <div class="title">Manage Complain Of Existing Customers</div> 
    <div class="content">
        <div style="text-align: center; font-size: 18px;font-weight: bolder;line-height: 2">
            PT. TRIMITRA TRANS PERSADA<br/>
            <u> LAPORAN KELUHAN/ COMPLAIN OF EXISTING CUSTOMER</u>
        </div>	

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
            'id' => 'mcomplain-existing-customer-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'id',
                'periode',
                'branch',
               'marketing_officer',
                'customer',
                'complain_date',
                'complain',
                'complainer_name',
                'follow_up_date',
                'follow_up_description',
                'pic',
                'remarks',
                /* 'created_user',
                  'created_date',
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

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>