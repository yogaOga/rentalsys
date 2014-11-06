<?php
/* @var $this MDivisiController */
/* @var $model MDivisi */

$this->breadcrumbs=array(
	'Mdivisis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MDivisi', 'url'=>array('index')),
array('label'=>'Manage MDivisi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Mdivisis</h1>

<div class="bloc">
    <div class="title">Create MDivisi</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>