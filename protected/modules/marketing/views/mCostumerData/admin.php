<?php
/* @var $this MCostumerDataController */
/* @var $model MCostumerData */

$this->breadcrumbs = array(
    'Mcostumer Datas' => array('index'),
    'Manage',
);
$this->menu = array(
    array('label' => 'List MCostumerData', 'url' => array('index')),
    array('label' => 'Create MCostumerData', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#mcostumer-data-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");
?>
<div class="bloc">
    <div class="title">Manage Costumer Master Data</div> 
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
            'id' => 'mcostumer-data-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'id',
                'no_cmd',
                'name_pic',
                'company_address_pic',
                'home_address_pic',
                'city_pic',
                /*
                  'npwp_pic',
                  'payment_system_pic',
                  'payment_term_pic',
                  'average_gross_incorme_per_month',
                  'name_bank',
                  'address_bank',
                  'no_account_bank',
                  'name_reference',
                  'address_reference',
                  'phone_reference',
                  'vehicles_reference',
                  'title_cmd',
                  'name_cmd',
                  'address_cmd',
                  'city_cmd',
                  'fax_cmd',
                  'zip_code_cmd',
                  'email_cmd',
                  'office_phone_cmd',
                  'home_phone_cmd',
                  'type_of_business',
                  'ownership',
                  'name_management',
                  'position_management',
                  'phone_management',
                  'handphone_management',
                  'create_at',
                  'create_date',
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

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>