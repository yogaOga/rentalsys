<?php
/* @var $this MEmployeeController */
/* @var $model MEmployee */

$this->breadcrumbs=array(
	'Memployees'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MEmployee', 'url'=>array('index')),
array('label'=>'Manage MEmployee', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Memployees</h1>

<div class="bloc">
    <div class="title">Create MEmployee</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>