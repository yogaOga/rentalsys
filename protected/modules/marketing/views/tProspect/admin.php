<?php
/* @var $this TProspectController */
/* @var $model TProspect */

$this->breadcrumbs = array(
    'Tprospects' => array('index'),
    'Manage',
);
Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#tprospect-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");
?>
<div class="bloc">
    <div class="title">Manage Prospect</div> 
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
            'id' => 'tprospect-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                array(
                    'header' => 'No',
                    'value' => '$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
                ),
                array(
                    'name' => 'prospect_id',
                    'filter' => CHtml::activeTextField($model, 'prospect_id', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->prospect_id',
                ),
                array(
                    'name' => 'marketing_id',
                    'filter' => CHtml::activeTextField($model, 'marketing_id', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->marketing_id',
                ),
                array(
                    'name' => 'company_title',
                    'filter' => CHtml::activeTextField($model, 'company_title', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->company_title',
                ),
                array(
                    'name' => 'company_name',
                    'filter' => CHtml::activeTextField($model, 'company_name', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->company_name',
                ),
                array(
                    'name' => 'company_address',
                    'filter' => CHtml::activeTextField($model, 'company_address', array('placeholder' => 'Search', 'class' => 'input')),
                    'value' => '$data->company_address',
                ),
                /*
                  'phone',
                  'fax',
                  'l_business_type',
                  'l_ownership',
                  'pic',
                  'occuption',
                  'email',
                  'mobile_phone',
                  'create_user',
                  'create_at',
                  'update_at',
                  'update_user',
                 */
                array(
                    'header' => 'Introduce Letter',
                    'type' => 'raw',
                    'value' => 'Chtml::link("PDF",array(\'IL\'))',
                ),
                array(
                        'header'=>Yii::t('zii','Create CMD'),
                        'type'=>'raw',
                        'value'=>'CHtml::link("CMD", Yii::app()->createUrl("marketing/MCostumerData/Create", array("id"=>$data->id)))',
		),
                array(
                    'class' => 'CButtonColumn',
                ),
                
            ),
        ));
        ?>

    </div>
</div>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>