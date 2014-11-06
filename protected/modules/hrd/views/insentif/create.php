<?php
/* @var $this InsentifController */
/* @var $model Insentif */

$this->breadcrumbs=array(
	'Insentifs'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Insentif', 'url'=>array('index')),
array('label'=>'Manage Insentif', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Insentifs</h1>

<div class="bloc">
    <div class="title">Create Insentif</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>