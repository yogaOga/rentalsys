<?php
/* @var $this PurchaseOrderController */
/* @var $model Vehicle[] */
/* @var $form CActiveForm */
?>
<!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" />-->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagination.css" />

<div id="content" style="margin-left: 0px">
    <table class="items">
        <thead>
            <tr>
                <th>
                </th>
                <th>
                    Merk
                </th>
                <th>
                    Color
                </th>
                <th>
                    Year
                </th>
                <th>
                    Plate Number
                </th>
            </tr>
        </thead>
        <tbody id="data">
            <?php foreach ($model as $value): ?>
                <tr id="<?php echo $value->id ?>" class="hide">
                    <td><input type="radio" name="selected" value="<?php echo $value->id ?>"></td>
                    <td class="merk">
                        <?php echo $value->merk ?>
                    </td>
                    <td class="color">
                        <?php echo $value->color ?>
                    </td>
                    <td class="year">
                        <?php echo $value->year ?>
                    </td>
                    <td class="<?php echo 'plateNumber' . $value->id; ?>">
                        <?php echo $value->plate_number ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            <?php
            // for ($i = 0; $i <= 100; $i++):
            ?>
<!--                <tr class="hide">
                <td>A<?php // echo $i;  ?></td>
                <td>B<?php // echo $i;  ?></td>
                <td>C<?php // echo $i;  ?></td>
                <td>D<?php // echo $i;  ?></td>
                <td>E<?php // echo $i;  ?></td>
            </tr>-->
            <?php //endfor; ?> 
        </tbody>
        <tr>
            <td colspan="5">
                <div class="pagination" style="text-align: center">   </div>
            </td>
        </tr>
    </table>
</div>  
<!--<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>-->
<script  type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pagination.js"></script>
<script>
    $(".pagination").pagination();
</script>