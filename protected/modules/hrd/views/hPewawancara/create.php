<?php
/* @var $this HPewawancaraController */
/* @var $model HPewawancara */

$this->breadcrumbs=array(
	'Hpewawancaras'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List HPewawancara', 'url'=>array('index')),
array('label'=>'Manage HPewawancara', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Hpewawancaras</h1>

<div class="bloc">
    <div class="title">Create HPewawancara</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>