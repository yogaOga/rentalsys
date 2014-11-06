<?php
/* @var $this TActivityPlanController */
/* @var $model TActivityPlan */

$this->breadcrumbs = array(
    'Tactivity Plans' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List TActivityPlan', 'url' => array('index')),
    array('label' => 'Manage TActivityPlan', 'url' => array('admin')),
);
?>


<div class="bloc">
    <div class="title">Create TActivityPlan</div> 
  

    <div class="content">
        <?php $this->renderPartial('_form', array('model' => $model)); ?>		</div>
</div>
</div>