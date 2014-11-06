<?php
/* @var $this HWarningLetterController */
/* @var $model HWarningLetter */

$this->breadcrumbs=array(
	'Hwarning Letters'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List HWarningLetter', 'url'=>array('index')),
array('label'=>'Manage HWarningLetter', 'url'=>array('admin')),
);
?>
<h1><img src="/rentalsys/img/icons/dashboard.png" alt="" /> New Warning Letter</h1>

<div class="bloc">
    <div class="title">Form Warning Letter</div> 
    <div class="content">
        <?php $this->renderPartial('_formCreate', array('model'=>$model)); ?>
    </div>
</div>