<?php
/* @var $this PurchaseOrderController */
/* @var $model PurchaseOrder[] */
/* @var $form CActiveForm */
?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagination.css" />

<div id="content" style="margin-left: 0px">
    <table class="border" > 
        <thead>
            <tr>
                <th></th>
                <th>
                    Tender No
                </th>
                <th>
                    Customer Name
                </th>
                <th>
                    Purchase Order No
                </th>
                <th>
                    Purchase Order Customer No
                </th>
            </tr>
        </thead>
        <tbody id="data">
            <?php foreach ($model as $value): ?>
                <tr id="<?php echo $value->id ?>" class="hide">
                    <td><input type="radio" name="selected" value="<?php echo $value->id ?>"></td>
                    <td class="<?php echo "td" . $value->id ?>">
                        <?php echo $value->tender_no ?>
                    </td>
                    <td class="<?php echo "customer" . $value->id ?>">
                        <?php echo $value->customer_name ?>
                    </td>
                    <td class="<?php echo "po" . $value->id ?>">
                        <?php echo $value->po_system_no ?>
                    </td>
                    <td class="<?php echo "poc" . $value->id ?>">
                        <?php echo $value->po_customer_no ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php //for ($i = 0; $i <= 100; $i++): ?>
<!--                <tr class="hide">
                <td>A<?php //echo $i; ?></td>
                <td>B<?php //echo $i; ?></td>
                <td>C<?php //echo $i; ?></td>
                <td>D<?php //echo $i; ?></td>
                <td>E<?php //echo $i; ?></td>
            </tr>-->
            <?php //endfor; ?>
        </tbody>
        <tr>
            <td colspan="5">
                <div class="pagination" style="text-align: center">

                </div>

            </td>
        <tr>
    </table>
</div>  
<!--<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>-->
<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pagination.js"></script>
<script>
    $(".pagination").pagination();
</script>