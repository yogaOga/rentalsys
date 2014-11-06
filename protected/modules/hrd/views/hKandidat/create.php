<?php
/* @var $this HKandidatController */
/* @var $model HKandidat */

$this->breadcrumbs=array(
	'Hkandidats'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List HKandidat', 'url'=>array('index')),
array('label'=>'Manage HKandidat', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> Create Hkandidats</h1>

<div class="bloc">
    <div class="title">Create HKandidat</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>