<?php
/* @var $this GajipokokController */
/* @var $model Gajipokok */

$this->breadcrumbs=array(
	'Gajipokoks'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Gajipokok', 'url'=>array('index')),
array('label'=>'Manage Gajipokok', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Gajipokoks</h1>

<div class="bloc">
    <div class="title">Create Gajipokok</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>