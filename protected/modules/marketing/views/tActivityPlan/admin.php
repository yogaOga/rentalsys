<?php
/* @var $this TActivityPlanController */
/* @var $model TActivityPlan */

$this->breadcrumbs = array(
    'Tactivity Plans' => array('index'),
    'Manage',
);
$this->menu = array(
    array('label' => 'List TActivityPlan', 'url' => array('index')),
    array('label' => 'Create TActivityPlan', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
	$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
	});
	$('.search-form form').submit(function(){
		$('#tactivity-plan-grid').yiiGridView('update', {
			data: $(this).serialize()
		});
		return false;
	});
");
?>
<div class="bloc">
    <div class="title">Manage Tactivity Plans</div> 
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
            'id' => 'tactivity-plan-grid',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => array(
                'id',
                'id_marketing',
                'start_date',
                'end_date',
                'working_duration',
                'scale_of_priority_id',
                /*
                  'estimation_of_result',
                  'final_result_id',
                  'note_of_manager',
                  'created_user',
                  'created_date',
                  'update_user',
                  'update_date',
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