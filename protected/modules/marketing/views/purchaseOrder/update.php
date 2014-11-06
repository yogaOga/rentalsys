<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder */

$this->breadcrumbs = array(
    'Purchase Orders' => array('index'),
    $model->id => array('view', 'id' => $model->id),
    'Update',
);

$this->menu = array(
    array('label' => 'List PurchaseOrder', 'url' => array('index')),
    array('label' => 'Create PurchaseOrder', 'url' => array('create')),
    array('label' => 'View PurchaseOrder', 'url' => array('view', 'id' => $model->id)),
    array('label' => 'Manage PurchaseOrder', 'url' => array('admin')),
);
?>

<div class="bloc">
    <div class="title">Update PurchaseOrder <?php echo $model->id; ?></div> 
    <div class="content">
        <?php $this->renderPartial('_form', array('model' => $model, 'prospect' => $prospect, 'merk' => $merk, 'color' => $color, 'year' => $year,'formType'=>$formType)); ?>		</div>
</div>
</div>