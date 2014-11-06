<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder */

$this->breadcrumbs = array(
    'Purchase Orders' => array('index'),
    'Create',
);

$this->menu = array(
    array('label' => 'List PurchaseOrder', 'url' => array('index')),
    array('label' => 'Manage PurchaseOrder', 'url' => array('admin')),
);
?>


<div class="bloc">
    <div class="title">Create PurchaseOrder</div> 
    <div class="content">
        <?php $this->renderPartial('_form', array('model' => $model, 'prospect' => $prospect, 'merk' => $merk, 'color' => $color, 'year' => $year, 'formType' => 'create')); ?>		</div>
</div>
</div>