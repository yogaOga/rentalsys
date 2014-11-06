<?php
/* @var $this MSeksiController */
/* @var $model MSeksi */

$this->breadcrumbs=array(
	'Mseksis'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List MSeksi', 'url'=>array('index')),
array('label'=>'Manage MSeksi', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Mseksis</h1>

<div class="bloc">
    <div class="title">Create MSeksi</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>